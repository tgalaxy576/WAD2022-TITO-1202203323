<?php
    include 'connect.php';
    
    $query=mysqli_query($connect, "SELECT * FROM showroom_tito_table WHERE id_mobil='$_GET[id_mobil]'");
    $data = mysqli_fetch_array($query);

    $poto="../image/";
    $file=$_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'],$poto.$file);

    if(isset($_POST['submit'])){
        mysqli_query($connect, "UPDATE showroom_tito_table set
        nama_mobil = '$_POST[nama_mobil]',
        pemilik_mobil = '$_POST[pemilik_mobil]',
        merk_mobil = '$_POST[merk]',
        tanggal_beli = '$_POST[tanggal_beli]',
        deskripsi = '$_POST[deskripsi]',
        status_pembayaran = '$_POST[Bayar]',
        foto_mobil = '$file'

        WHERE id_mobil = '$_GET[id_mobil]'");

        echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Tito.php'>";

    }
?>