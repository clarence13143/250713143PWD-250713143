var iTotal;
var sKupon;

iTotal=prompt("masukkan total belanja (dalam ribu rupiah).", 0);
sKupon=prompt("punya kupon? (Y)a atau (T)idak", "Y");

if(iTotal>=200){
    if(sKupon=="Y"){
        alert("Diskon 20% dan gratis ongkir");
    }else{
        alert("Diskon 10% dan gratis ongkir");
    }//if2
}else{
    if(sKupon=="Y"){
        alert("Diskon 10%");
    }else{
        alert("Tidak ada diskon");
    }//if3
}//if1