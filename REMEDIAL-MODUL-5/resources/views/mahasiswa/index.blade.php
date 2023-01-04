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
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Input Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>JURUSAN</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $no => $hasil)
                            <tr>
                                <th>{{ $no+1 }}</th>
                                <td>{{ $hasil->nim }}</td>
                                <td>{{ $hasil->nama }}</td>
                                <td>{{ $hasil->jurusan }}</td>
                                <td>
                                    <form action="{{ route('mahasiswa.destroy', $hasil->id )}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('mahasiswa.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>