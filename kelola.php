<?php
include'config.php';
$id_pendaftaran ='';
$nama ='';
$jk ='';
$agama ='';
$alamat ='';
$desa ='';
$kecamatan ='';
$kota ='';
$provinsi ='';
$kodepos ='';
$email ='';
$sekolah ='';

if(isset($_GET{'edit'})){
    $id_pendaftaran =$_GET['edit'];
    $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query =mysqli_query($db,$sql);
    $result =mysqli_fetch_assoc($query);
    $nama =result['nama'];
    $tanggal =result['tanggal_lahir'];
    $jk =result['jenis_kelamin'];
    $agama =result['agama'];
    $alamat =result['alamat'];
    $desa =result['desa'];
    $kecamatan =result['kecamatan'];
    $kota =result['kota'];
    $provinsi =result['provinsi'];
    $kodepos =result['kode_pos'];
    $no_telepon=result['no_tel'];
    $email =result['email'];
    $sekolah =result['sekolah_asal'];
}
?>


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
    <a class="navbar-brand" href="index.php">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pendaftaran</a>
        <a class="nav-link" href="kelola.php">Data guru</a>
      </div>
    </div>
</div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses.php" method="POST">
    <input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class= "mb-3">
    <label for="nama" class="form-label">Nama: </label>
    <input type="text" class ="form-control" name=" nama" placeholder="nama lengkap" />
</div>
<div class= "mb-3">
    <label for="nama" class="form-label">Tanggal lahir </label>
    <input type="text" class ="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal;?>" />
</div>
<div class= "mb-3">
    <div class="from-check">
    <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jk == 'laki-laki') {echo "checked";}?> value="laki-laki">
        <label class="from-check-label" for="laki-laki"> Laki-Laki</label><br>
        <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jk == 'Perempuan') {echo "checked";}?> value="Perempuan">
        <label class="from-check-label" for="Perempuan"> Perempuan</label><br>
    </div>
</div>
<div class= "mb-3">
    <label for="agama" class="form-label">Agama: </label>
    <select name="agama" class="form-control" >
        <option <?php if($agama == 'islam'){echo "selected";}?> value="islam">Islam </option>
        <option <?php if($agama == 'kristen'){echo "selected";}?> value="islam">kristen </option>
        <option <?php if($agama == 'hindu'){echo "selected";}?> value="islam">Hindu </option>
        <option <?php if($agama == 'budha'){echo "selected";}?> value="islam">Budha </option>
</div>
<div class="mb -3">
<label for=" alamat" class="form-label ">Alamat</label>
<textarea class="form-control" name="alamat" rows ="3"><?php echo $alamat;?></textarea>
</div>
<div class="mb -3">
<label for=" tanggal" class="form-label ">Tanggal</label>
<input type="text" class ="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal;?>" />
</div>
<div class="mb -3">
<label for="desa" class="form-label ">desa</label>
<input class="form-control" name="desa" rows ="3"><?php echo $desa;?></textarea>
</div>
<div class="mb -3">
<label for="kecamatan" class="form-label ">Kecamatan</label>
<input class="form-control" name="kecamatan" rows ="3"><?php echo $kecamatan;?></textarea>
</div>
<div class="mb -3">
<label for=" kota" class="form-label ">Kabupaten/ kota</label>
    <select name="kota" class="from-control">
        <option <?php if($kota == 'bandung'){echo "selected";}?> value="bandung">bandung </option>
        <option <?php if($kota == 'kbb'){echo "selected";}?> value="kbb">kbb </option>
        <option <?php if($kota == 'sumedang'){echo "selected";}?> value="sumedang">sumedang </option>
        <option <?php if($kota == 'kabupaten bandung'){echo "selected";}?> value="kabupaten banddung">kabupaten bandung </option>
        <option <?php if($kota == 'cimahi'){echo "selected";}?> value="cimahi">cimahi </option>
</div>
<div class="mb -3">
<label for=" provinsi" class="form-label ">provinsi</label>
    <select name="provinsi" class="from-control">
        <option <?php if($provinsi == 'banten'){echo "selected";}?> value="banten">banten </option>
        <option <?php if($provinsi == 'yogyakarta'){echo "selected";}?> value="yogyakarta">yogyakarta </option>
        <option <?php if($provinsi == 'jakarta'){echo "selected";}?> value="jakarta">jakarta </option>
        <option <?php if($provinsi == 'jawa barat'){echo "selected";}?> value="jawa barat">jawa barat </option>
        <option <?php if($provinsi == 'jawa tengah'){echo "selected";}?> value="jawa tengah">jawa tengah </option>
        <option <?php if($provinsi == 'jawa timur'){echo "selected";}?> value="jawa timur">jawa timur </option>
</div>
<div class="mb -3">
<div class="form-check">
<label for="jenis kelamin" class="form-label"> Jenis Kelamin:</label><br>
    <input class="form- check-input" type="radio" name="ienis kelamin" value="laki-laki">
    <label class="form-check-labe1" for="laki-laki">Laki-Laki</label><br>
    <input class="form-check-input" type="radio" name="jenis kelamin" value=" perempuan">
    <label class="form- check-label" for="laki-laki">Perempuan</label>
</div>
<div class="mb -3">
<label for=" kodepos" class="form-label ">kode pos</label>
<input type="text" class ="form-control"  name="kodepos" value="<?php echo $tanggal;?>" placeholder="kode pos" />
</div>
<div class="mb -3">
<label for=" notlp" class="form-label ">nomor telopon</label>
<input type="text" class ="form-control"  name="notlp" value="<?php echo $notlp;?>" placeholder="notlp" />
</div>
<div class="mb -3">
<label for=" kodepos" class="form-label ">kode pos</label>
<input type="text" class ="form-control"  name="kodepos" value="<?php echo $tanggal;?>" placeholder="kode pos" />
</div>
<div class="mb -3">
<label for=" email" class="form-label ">email</label>
<input type="email" class ="form-control"  name="email" value="<?php echo $email;?>" placeholder="email" />
</div>
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form- labe l">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" placeholder="nama sekolah" />
</div>
<div class="mb -3">
<label for=" jurusan" class="form-label ">jurusan</label>
    <select name="jurusan" class="from-control">
        <option <?php if($jurusan == 'PPLG'){echo "selected";}?> value="MPLB">MPLB </option>
        <option <?php if($jurusan == 'MPLB'){echo "selected";}?> value="MPLB">MPLB </option>
        <option <?php if($jurusan == 'PH'){echo "selected";}?> value="PH">PH </option>
        <option <?php if($jurusan == 'TO'){echo "selected";}?> value="TO">TO </option>
        <option <?php if($jurusan == 'jawa tengah'){echo "selected";}?> value="jawa tengah">jawa tengah </option>
        <option <?php if($jurusan == 'jawa timur'){echo "selected";}?> value="jawa timur">jawa timur </option>
</div>
<div class="mb-3 row mt-4">
    <div class="col">
        <?php
        if(isset($_GET['edit'])){
            ?>
      <button type="submit" name='aksi' value="edit" class="btn btn-primary">
        simpan perubahan
        </button>
       <?php
        }else{
            ?>
            <button type="submit" name='aksi' value="add" class="btn btn-primary">
        daftar
        </button>
        <?php
        }
        ?>
        <a href="index.php" type="button" class="btn btn-danger">Batal</a>

</div>
    </form>
</div>
    </body>
</html>