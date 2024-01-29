<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['aksi'])){
    if($POST['aksi']== 'add'){
    // ambil data dari formulir
    $nama =$_POST['nama'];
    $tanggal =$_POST['tanggal_lahir'];
    $jk =$_POST['jenis_kelamin'];
    $agama =$_POST['agama'];
    $alamat =$_POST['alamat'];
    $desa =$_POST['desa'];
    $kecamatan =$_POST['kecamatan'];
    $kota =$_POST['kota'];
    $provinsi =$_POST['provinsi'];
    $kodepos =$_POST['kode_pos'];
    $no_telepon=$_POST['no_tel'];
    $email =$_POST['email'];
    $sekolah =$_POST['sekolah_asal'];
    // buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, 
    sekolah_asal, to_tlp, email, desa, kecamatan, kota, provinsi, kode_pos, tanggal_lahir) VALUE
    ('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$notlp', '$email', '$desa', '$kecamatan', '$kota', '$provinsi', '$kode_pos', '$tangal_lahir')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if($query){
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    }else{
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
  }else if($_POST['aksi']=='edit'){
    $id_pendaftaran =$_POST['id_pendaftaran'];
    $nama =$_POST['nama'];
    $tanggal =$_POST['tanggal_lahir'];
    $jk =$_POST['jenis_kelamin'];
    $agama =$_POST['agama'];
    $alamat =$_POST['alamat'];
    $desa =$_POST['desa'];
    $kecamatan =$_POST['kecamatan'];
    $kota =$_POST['kota'];
    $provinsi =$_POST['provinsi'];
    $kodepos =$_POST['kode_pos'];
    $no_telepon=$_POST['no_tel'];
    $email =$_POST['email'];
    $sekolah =$_POST['sekolah_asal'];
    $tanggal_mysql = date("y-m-d", strtotime($tanggal));
    $sql ="UPDATE pendaftaran SET nama='$nama', alamat='$alamat', agama='$agama', sekolah_asal='$sekolah_asal', to_tlp='$to_tlp', email='$email', desa='$desa', kecamatan='$kecamatan' kota='$kota', provinsi='$provinsi', kode_pos='$kode_pos', tanggal_lahir='$tanggal_lahir'
    WHERE id_pendaftaran='$id_pendaftaran'";
  $query = mysqli_query($db, $sql);
  //apakah query hapus berhasil?
  if($query){
    headher('Location: index.php?status=sukses');
  } else {
    headher('Location: index.php?status=gagal');
  }
}
}

if( isset($_GET['hapus'])){
    //ambil id dari query string
    $id_pendaftaran = $_GET['hapus'];

    //buat query hapus
    $sql = "DELETE FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db, $sql);

    //apakah query haqpus berhasil?
    if($query){
        headher('Location: index.php?status=sukses');
    }else {
        headher('Location: index.php?status=gagal');
    }
}

?>