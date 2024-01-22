<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['dataguru'])){
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $notlp = $_POST['notlp'];
    $email = $_POST['email'];
    // buat query
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, 
    sekolah_asal) VALUE ('$nama', '$alamat', '$jk','$notlp', '$email')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>