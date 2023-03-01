<?php
if(isset($_GET['submit'])){
    $customer = $_GET['customer'];
    $produk = $_GET['radio'];
    $jumlah = $_GET['jumlah'];

    //daftar harga produk
    $harga_tv =  4200000;
    $harga_kulkas = 3100000;
    $harga_mesin = 3800000;

    //hitung total harga
    if($produk == 'tv'){
        $total_harga = $jumlah * $harga_tv;
    } elseif ($produk == 'kulkas'){
        $total_harga = $jumlah * $harga_kulkas;
    }else{
        $total_harga = $jumlah * $harga_mesin;
    }



}
?>
