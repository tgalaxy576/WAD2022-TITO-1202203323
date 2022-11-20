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
              <a class="nav-link active " aria-current="page" href="#">Home</a>
              <a class="nav-link " href="#">MyCar</a>
            </div>
          </div>
        </div>
      </nav><br><br><br>

      <div class="container">
        <div class="row">
          <div class="col-9">

            <h3>Tambah Mobil</h3><p>Tambahkan mobil baru anda ke dalam show room</p><br><br>
            <form action="../config/insert.php" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"> <b>Nama Mobil</b></label>
              <input type="namaMobil" class="form-control" placeholder="ex: Tesla model S" name="namamobil">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Nama Pemilik</b></label>
              <input type="text" class="form-control" placeholder="Nama - NIM" name="namapemilik">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Merk</b></label>
              <input type="text" class="form-control" placeholder="ex: Tesla" name="merk">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"><b>Tanggal Beli</b></label>
              <input type="text" class="form-control" placeholder="ex: 31/12/2022" name="tanggalbeli">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
              <textarea class="form-control" rows="3" name="deskripsi"></textarea>
            </div>
            
            <div><label for="Image" class="form-label">Image</label>
              <input class="form-control" type="file" id="Image" name="Image" accept="image/*"><br></div>
              <label for="form-label">Status Pembayaran</label> <br>
            <div class="form-check form-check-inline">
              <label class="form-check-label" for="Bayar"> Lunas </label>
              <input class="form-check-input" type="radio" name="Bayar" id="Bayar" value="Lunas">
            </div>
           <div class="form-check form-check-inline">
              <label class="form-check-label" for="Bayar"> Belum Lunas </label>
             <input class="form-check-input" type="radio" name="Bayar" id="Bayar" value="Belum Lunas"> <br>
           </div><br><br>

          <button type="submit" name="Selesai" class="btn btn-primary">Selesai</button>
          </form>
          </div>

        </div>
      </div>
      
  </body>
</html>