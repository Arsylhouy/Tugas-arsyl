<?php include("config.php"); ?>
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
        <a class="nav-link" href="form-daftar.php">Data guru</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
    <h2>data guru</h2><br>
    <a class="btn btn-primary" href="form-daftar.php" role="button">tambah data</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID_gur</th> 
                <th>Nama_guru</th> 
                <th>Alamat</th>  
                <th>jenis_kelamin</th>  
                <th>no_tlp</th>
                <th>email</th>
                <th>aksi</th> 
</tr>
</thead>
<tbody>
    <?php
    $sql ="SELECT*FROM daftarguru";
    $query=mysqli_query($db, $sql);
    while($daftarguru= mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$daftarguru['id_guru']."</td>";
        echo "<td>".$daftarguru['nama_guru']."</td>";
        echo "<td>".$daftarguru['alamat']."</td>";
        echo "<td>".$daftarguru['jenis_kelamin']."</td>";
        echo "<td>".$daftarguru['no_tlp']."</td>";
        echo "<td>".$daftarguru['email']."</td>";
        echo"<td>
        <a href='index.php? edit=" . $daftarguru['id_guru']."' class='btn btn-warning'> edit</a>
        <a href='index.php? delete=" . $daftarguru['id_guru']."' class='btn btn-danger'> delete</a>
        </td>";
        echo "</tr>";
    }
    ?>
</tbody>

    </table>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
        

    