<?php
include ('connect.php');
if (isset($_POST['Selesai'])){
    $poto="../image/";
    $namapoto= $_FILES['foto']['name'];

    mysqli_query($connect, "INSERT INTO showroom_tito_table set
    nama_mobil = '$_POST[namamobil]',
    pemilik_mobil = '$_POST[namapemilik]',
    merk_mobil = '$_POST[merk]',
    tanggal_beli = '$_POST[tanggalbeli]',
    deskripsi = '$_POST[deskripsi]',
    status_pembayaran = '$_POST[Bayar]',
    foto_mobil = '$namapoto'");

    move_uploaded_file($_FILES['foto']['tmp_name'],$poto.$namapoto);


    // echo "<URL = '../pages/ListCar-Tito.php'>";
    echo "berhasil";
    echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Tito.php'>";
} 

?>