<?php include('connect.php');

if (isset($_POST['Daftar'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $check_email = mysqli_query($connect, "SELECT * FROM user_tito WHERE email = '$email'");
    $check_email2 = mysqli_num_rows($check_email);

    if ($password==$repassword){
        if ($check_email2 > 0){
            echo "<script>
                  alert('email sudah digunakan');
                  window.location = '../pages/Register-Tito.php';
                  </script>";
        } else{
            $password = password_hash($password,PASSWORD_DEFAULT);
            $insert="INSERT INTO user_tito(nama,email,no_hp,password) VALUES('$nama','$email','$no_hp','$password')";

        }


    } else{
        echo "<script>
                  alert('Password tidak sesuai');
                  window.location = '../pages/Register-Tito.php';
                  </script>";
        echo "<meta http-equiv=refresh content=2;URL='../pages/Register-Tito.php'>";
    }
    
mysqli_query($connect,$insert);
header('location:../pages/Login-Tito.php');

}



?>