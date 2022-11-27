<?php

include "connect.php";

$id = $_GET['id_mobil'];
$query = mysqli_query ($connect,"SELECT * FROM showroom_tito_table WHERE id_mobil = '$id' ");
$data = mysqli_fetch_assoc($query);
$poto = $data['foto_mobil'];


if (file_exists("../image/$poto")){
    unlink("../image/$poto");
    if (isset($_GET['id_mobil'])){
        mysqli_query($connect, "DELETE FROM showroom_tito_table WHERE id_mobil = '$_GET[id_mobil]'");
    }

    
}

echo "berhasil dihapus";
echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Tito.php'>";

?>
