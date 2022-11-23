<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active " aria-current="page" href="Home-Tito.php">Home</a>
              <a class="nav-link " href="ListCar-Tito.php">MyCar</a>
            </div>
          </div>
        </div>
      </nav>

      <?php 

      include('../config/connect.php');

      $query = mysqli_query($connect, "SELECT * FROM showroom_tito_table");
      ?>

      <?php
      while($fetch = mysqli_fetch_array($query)){
      

      ?>
     <div class="container">
        <div class="row align-items-start">
          <div class="col">
            
            <div class="card" style="width: 18rem;">
                <img src="../image/<?php echo $fetch["foto_mobil"];?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $fetch["nama_mobil"];?></h5>
                </div>

                <?php echo $fetch["deskripsi"]; ?>

                <div class="card-footer text-center">
                <a class="btn btn-primary" href="" role="button">Edit</a>
                <a class="btn btn-danger"  href="../config/delete.php?id_mobil=<?php echo $fetch['id_mobil']; ?>" role="button" >Delete</a>
                </div>

            </div>
         </div>
      </div>
        <br>
      

     <?php
     }
     
     
     ?>
  </body>
</html>