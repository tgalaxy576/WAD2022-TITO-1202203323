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
            <img src="https://cdn.pixabay.com/photo/2015/05/28/23/12/auto-788747__340.jpg" alt="" style="height: 980px; width: 940px;">
        </div>
        <div class="col-6">
        
    <!-- Awal form  -->
        <form action="{{ route('register.store') }}" method= "post" class="mt-5" style="margin-right:250px">
        @csrf
        <br><br><br><br><br><br>
            <h3>Register</h3>
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="repassword" id="repassword">
                </div>

                    <button type="submit" class="btn btn-primary" name="Daftar">Daftar</button>
                    <p>Sudah punya akun ? <a href="/login">Login</a></p>
                </form>
<!-- Akhir form  -->
    </div>
  </div>

  </body>
</html>




