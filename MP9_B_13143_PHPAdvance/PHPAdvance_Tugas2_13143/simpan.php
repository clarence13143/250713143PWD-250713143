<?php
    require 'koneksi.php';
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $judul=trim($_POST['judul'] ?? '');
        $penulis=trim($_POST['penulis'] ?? '');
        $tahun=trim($_POST['tahun'] ?? '');

        if($judul==='' || $penulis==='' || $tahun===''){
            echo '<p style="color:red;">!! Harap Lengkap semua Data !!</p>';
        }elseif (!preg_match('/^[0-9]{4}$/', $tahun)) {
            echo '<p style="color:red;">!! Tahun harus berupa Angka !!</p>';
        }else{
            $stmt=mysqli_prepare($conn, 'INSERT INTO buku (judul, penulis, tahun)VALUES(?, ?, ?)');
            mysqli_stmt_bind_param($stmt, 'sss', $judul, $penulis, $tahun);
            mysqli_stmt_execute($stmt);

            echo '<p>Data Berhasil Disimpan (' . mysqli_stmt_affected_rows($stmt) . ' baris).</p>';
        }//if2
    }else{
        echo '<p>Silahkan isi formulir terlebih dahulu.</p>';
    }//if1
    echo '<a href="index.xhtml">Kembali</a>';
?>