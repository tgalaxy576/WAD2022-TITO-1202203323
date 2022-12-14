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
              <a class="nav-link active " aria-current="page" href="/home.php">Home</a>
              <a class="nav-link " href="ListCar-Tito.php">MyCar</a>
              <a href="Add-Tito.php" style="width: 100px;position:relative;left:1400px;" class="btn btn-light fw-bold">Add Car</a>
              <a href="" style="width: 100px;position:relative;left:1450px;" class="btn btn-light fw-bold">Name</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container mt-5 px-5">
    <h1>My Showroom</h1>
    <p>List Showroom TITO - 1202203323</p>
    <div class="row">
      <?php
        include '../config/connect.php';
        $query = "SELECT * FROM showroom_tito_table ORDER BY id_mobil ASC";
        $show = mysqli_query($connect,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>
          <div class="col">
            <div class="card mt-2" style="width: 18rem;margin-bottom:25px;">
              <img src="../image/<?php echo $data['foto_mobil'];?>" class="card-img-top"  style="min-height:200px;">
              <div class="card-body"  style="max-height:200px;">
                <h5 class="card-title"><?php echo $data['nama_mobil'];?></h5>
                <p class="card-text"><?php echo $data['deskripsi'];?></p>
                <div class="container px-5">
                  <a href="/detail<?php echo $data['id_mobil'];?>" class="btn btn-primary">Detail</a>
                  <!-- <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-danger">Delete</a> -->
                </div>
              </div>
            </div>
          </div>
        <?php  } ?>
    </div>
    <?php
  
    $tabel = mysqli_query($connect,"SELECT * FROM showroom_tito_table");
    $banyakMobil = mysqli_num_rows($tabel);

    ?>
    <div class="container mt-5">
        <p class="fw-bold opacity-50 fixed-bottom px-3">Jumlah Mobil : <?php echo "$banyakMobil" ?></p>
    </div>
</div>


  </body>
</html>