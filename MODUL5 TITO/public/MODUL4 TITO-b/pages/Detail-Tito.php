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
              <a href="Add-Tito.php" style="width: 100px;position:relative;left:1400px;" class="btn btn-light fw-bold">Add Car</a>
              <a href="" style="width: 100px;position:relative;left:1450px;" class="btn btn-light fw-bold">Name</a>
            </div>
          </div>
        </div>
    </nav>


    <?php
        include '../config/connect.php';
        $id_mobil = $_GET['id_mobil'];
        $query = "SELECT * FROM showroom_tito_table where id_mobil ='$id_mobil'";
        $show = mysqli_query($connect,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>

<div class="container mt-5 mb-5">
    <form>
    <div class="row">
        <!-- gambar -->
        <div class="col">
            <div class="d-flex align-items:center mt-2">
            <img src="../image/<?php echo $data['foto_mobil'];?>" class="card-img-top">
            </div>
        </div>
        <!-- akhir gambar -->
        <!-- detail -->
        <div class="col">
            <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" value="<?php echo $data['nama_mobil']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" value="<?php echo $data['pemilik_mobil']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" name="merk" value="<?php echo $data['merk_mobil']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" name="tanggal_beli" value="<?php echo $data['tanggal_beli']; ?>" readonly>  
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3" readonly><?php echo $data['deskripsi']; ?></textarea>
            </div>
            <!-- <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" class="form-control" name="foto" value="<?php echo $data['foto_mobil'];?>" readonly>  
            </div> -->
            <div>
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
            </div>
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status" value="<?php echo $data['tanggal_beli']; ?>">
                <label class="form-check-label" for="lunas"><?php echo $data['status_pembayaran']; ?></label>
            </div>
            <a href="../pages/Edit-Tito.php?id_mobil=<?php  echo $data['id_mobil'];?>" class="btn btn-primary" style="width:150px;">Edit</a>
            </form>
            <!-- akhir detail -->
            </div>
        </div>
    </div>

    <?php } ?>
    
 
      
  </body>
</html>