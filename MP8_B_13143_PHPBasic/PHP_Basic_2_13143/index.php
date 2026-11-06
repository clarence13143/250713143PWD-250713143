<?php
    if($_POST){
        $bayaran = $_POST['bayaran'] ?? '';
        $jenis = $_POST['jenis'] ?? '';
        $harga = 600000;
        $message = array();
        $message2 = "";
        $bayaranKembali = 0;

        if(empty($bayaran) || empty($jenis)){
            $message[] = "harap lengkapi semua data";
        }//if2

        if(!preg_match("/^[0-9]*$/", $bayaran)){

        }//if3

        if(!preg_match("/^[a-zA-Z]*$/", $jenis)){

        }//if4

        if(!empty($message)){
            foreach($message as $msg){
                echo "<p style='color:red;'>!! " . htmlspecialchars($msg) . " !!</p>"
            }//foreach
        }else{//if5
            function jenisPembayaran($jenis){
                switch(strtolower($jenis)){
                    case 'a':
                        $potongan = 0.75;
                        break;
                    case 'b':
                        $potongan = 0.50;
                        break;
                    case 'c':
                        $potongan = 0.25;
                        break;
                    case 'd':
                        $potongan = 0;
                    default:
                        $potongan = 0;
                }//switch
                return $potongan;
            }//func1

            function infoJenisPembayaran($jenis){
                switch(strtolower($jenis)){
                    case 'a':
                        $info = "Cicilan 25%";
                        break;

                    case 'b':
                        $info = "Cicilan 50%";
                        break;

                    case 'c':
                        $info = "Cicilan 75%";
                        break;

                    case 'd':
                        $info = "Lunas";
                        break;

                    default:
                        $info= "jenis pembayaran tidak valid";
                }//switch
                return $info;
            }//func2

            $potongan = jenisPembayaran($jenis);
            $infojenis = infoJenisPembayaran($jenis);

            function totalBayar($harga, $potongan){
                return $harga - ($harga*$potongan);
            }//func3

            $totalBayar = totalBayar($harga, $potongan);

            function pembayaran($bayaran, $totalBayar){
                if($bayaran<$totalBayar){
                    return null;
                }else{
                    $bayaranKembali=$bayaran-$totalBayar;
                    return $bayaranKembali;
                }//if6
            }//func4

                    $bayaranKembali=$bayaran-$totalBayar;
                    
                    if($bayaranKembali===NULL){
                        $message2 = "jumlah yang dibayar kurang dari total pembayaran. silahkan bayar sesuai jumlah yang ditentukan";
                        $bayaranKembali=0;
                    }//if7

                    if(!empty($message2)){
                        echo "<p style='color:red;'>!! " . htmlspecialchars($message2) . " !!</p>";
                    }else{
                        echo "<h2>Informasi Pembayaran</h2>";
                        echo "<p><strong>Jumlah yang dibayar: </strong> Rp" . htmlspecialchars($bayaran) . "</p>";
                        echo "<p><strong>Jenis Pemabayaran: </strong> Rp " . htmlspecialchars($infojenis) . "</p>";

                        if($potongan==0){

                        }else{
                            
                        }
                    }//if8
        }//if5
    }//if1
?>