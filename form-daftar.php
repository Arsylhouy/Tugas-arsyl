<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class= "mb-3">
    <label for="nama" class="form-label">Nama: </label>
    <input type="text" class ="form-control" name=" nama" placeholder="nama lengkap" />
</div>
<div class="mb -3">
<label for=" alamat" class="form-label ">Alamat</label>
<textarea class="form-control" name="alamat" rous ="3"></textarea>
</div>
<div class="mb -3">
<div class="form-check">
<label for="jenis kelamin" class="form-label"> Jenis Kelamin:</label><br>
    <input class="form- check-input" type="radio" name="ienis kelamin" value="laki-laki">
    <label class="form-check-labe1" for="laki-laki">Laki-Laki</label><br>
    <input class="form-check-input" type="radio" name="jenis kelamin" value=" perempuan">
    <label class="form- check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb -3">
    <label for=" agama" class="form- l abel">Agama: </label>
    <select name="agama" class="form-control">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Atheis</option>
</select>
</div>
<div class="mb-3">
    <label for=" sekolah_asal" class="form- labe l">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" placeholder="nama sekolah" />
</div>
<div class="mb-3">
    <label for=" sekolah_asal" class="form- labe l">nomor telopon: </label>
    <input type="text" class ="form-control" name="notlp" placeholder="nomor telopon" />
</div>
<div class="mb-3">
    <label for=" sekolah_asal" class="form- labe l">email: </label>
    <input type="email" class ="form-control" name="email" placeholder="masukan email anda ...." />
</div>
<div class="mb-1">
    <input type="submit"class="btn btn-primary" value="Daftar" name="daftar" />
</div>
    </form>
</div>
    </body>
</html>