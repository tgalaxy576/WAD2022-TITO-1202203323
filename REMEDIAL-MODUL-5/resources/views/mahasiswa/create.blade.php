<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remedial Modul5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Mahasiswa Telkom 2020</h1>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="nim" class="form-label">NIM</label>
                      <input type="text" class="form-control" name="nim" id="nim" >
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">NAMA</label>
                      <input type="text" class="form-control" name="nama" id="nama" >
                    </div>
                    <div class="mb-3">
                      <label for="jurusan" class="form-label">JURUSAN</label>
                      <input type="text" class="form-control" name="jurusan" id="jurusan" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                  </form>
            </div>
        </div>
    </div>
  </body>
</html>