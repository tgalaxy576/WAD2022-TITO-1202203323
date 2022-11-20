<?php 
include("../config/connect.php");

    $id = $_POST['id_mobil'];
    mysqli_query($connect, "DELETE from showroom_tito_table WHERE id_mobil=$id");
    header("Location:insert.php");


?>