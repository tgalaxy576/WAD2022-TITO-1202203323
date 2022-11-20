<?php
include ('../config/connect.php');
if (isset($_POST['Selesai'])){
    $car_name = $_POST['namamobil'];
    $owner_name = $_POST['namapemilik'];
    $brand = $_POST['merk'];
    $purchase_date = $_POST['tanggalbeli'];
    $description = $_POST['deskripsi'];
    $payment_status = $_POST['Bayar'];

    // if (!empty($_FILES["Foto"]["tmp_name"])) {
    //     $fileType = pathinfo($_FILEs['Foto']['tmp_name'], PATHINFO_EXTENSION);
    //     $target_dir = "../Images/";
    //     $filename = $car_name . "." . $fileType;
    //     $target_file = $target_dir . $filename;
        
    //     if ($fileType != "") {
            
    //         move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file); 
    // }
$insert = "INSERT INTO showroom_tito_table (id_mobil,nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,status_pembayaran)
            VALUES(rand(),'$car_name','$owner_name','$brand','$purchase_date','$description','$payment_status')";



    mysqli_query($connect, $insert); 
} 

header('location:../pages/Add-Tito.php')
?>