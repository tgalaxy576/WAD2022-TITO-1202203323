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
    $sql = "SELECT * FROM showroom_tito_table where id_mobil ='$id_mobil'";
    $tampilData = mysqli_query($connect,$sql);
    while ($data = mysqli_fetch_array($tampilData)) {
?>
 
<div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Ubah Data Mobil</h3>
    <p>Ubah Data Mobil Anda</p>
        <form action="../config/update.php?id_mobil=<?php  echo $data['id_mobil'];?>" method="POST" class="mt-5" style="margin-right:250px" enctype="multipart/form-data">
            <!-- NAMA MOBIL -->
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" placeholder="Silahkan masukan nama mobilmu!" value="<?php echo $data['nama_mobil']; ?>">
            </div>
            <!-- NAMA MOBIL -->
            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Pemilik Mobil</label>
                <input type="text" class="form-control" name="pemilik_mobil" placeholder="Tito - 1202203323"<?php echo $data['pemilik_mobil']; ?>">
            </div>
            <!-- MERK MOBIL -->
            <div class="mb-3">
                <label for="merk" class="form-label fw-bold">Merk Mobil</label>
                <input type="text" class="form-control" name="merk" placeholder="Silahkan masukan merk mobilmu!" value="<?php echo $data['merk_mobil']; ?>">
            </div>
            <!-- TANGGAL BELI MOBIL -->
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli Mobil</label>
                <input type="date" class="form-control" name="tanggal_beli" placeholder="" value="<?php echo $data['tanggal_beli']; ?>">
            </div>
            <!-- DESKRIPSI MOBIL -->
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi Mobil</label>
                <textarea class="form-control" name="deskripsi" rows="3" 
                    placeholder="Contoh: Mobil ini adalah yang terbaik dimasanya ..."><?php echo $data['deskripsi']; ?></textarea>
            </div>
            <!-- FOTO MOBIL -->
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <!-- STATUS -->            
            <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="Bayar" value="lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
                <input class="form-check-input ms-5" type="radio" name="Bayar" value="belum lunas">
                <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Selesai</button>
        </form>
</div>

    <?php } ?>

    
 

 
      
  </body>
</html>