<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
        
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style="color: white;">Praktikum ke 3</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cari Data</a>
      </li>
    </ul>
  </div>
</nav>
<a href="{{ route('home.create') }}">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($data as $dataPelanggan)
        <tr>
            <th>{{ $dataPelanggan -> nomor}}</th>
            <th>{{ $dataPelanggan -> nama}}</th>
            <th>{{ $dataPelanggan -> alamat}}</th>
            <th>{{ $dataPelanggan -> barang}}</th>
            <th>{{ $dataPelanggan -> harga}}</th>
            <th> <a href="">edit</a>
             | 
              <a href="/hapus">hapus</a>
            </th>
        </tr>
      @endforeach
    </tbody>

</table>

</body>
</html>