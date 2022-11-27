<?php 

  include('../config/connect.php');

  if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $log = mysqli_query($connect, "SELECT * FROM user_tito WHERE email='$email'");

    if(mysqli_num_rows($log)==1) {

      $row = mysqli_fetch_assoc($log);
      if(password_verify($password, $row["password"])){



        header("Location: Home-Tito.php");
        exit;

      }
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
    
    <div class="row">
      <div class="col-6">
        <img src="../image/reg-bg.jfif" alt="" style="height: 1040px; width: 1000px;" >
      </div>
    <div class="col-6">
    <br><br><br><br><br><br>
    <!-- Awal form  -->
        <form action="" method="post" class="mt-5" style="margin-right:250px">
            <h3>Login</h3>
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya bang</label>
                </div>

                  <button type="submit" class="btn btn-primary" name="login">Login</button>
                  <p>Belum punya akun ? <a href="Register-Tito.php">Sign Up</a></p>

                </form>
<!-- Akhir form  -->
    </div>
  </div>




  </body>
</html>




