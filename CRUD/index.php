<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/6.4.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Create Read Update Delete</title>
    <style>
      body{
        background-image: url('img/bg2.jpg');
        background-size:cover;
      }
      .space{
        width: 100;
        height: 10px;
      }
    </style>
</head>
<body>
<nav class="navbar bg-dark mb-3">
  <div class="container">
    <a class="navbar-brand text-white" href="index.php">
      <img src="img/php-custom.svg" alt="Logo" width="70" height="50" class="d-inline-block align-text-center">
      CRUD
    </a>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="add.php">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Read</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Update</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Delete</a>
        </li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="space"></div>
  <h1 align ="center" style="color : black" >Data Mahasiswa</h1><br> 
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="add.php">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Read</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Delete</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <div class="container-fluid">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
<div class="table-responsive" >
<table class="table table-bordered border-dark table-hover mt-3">
  <tr class="table-primary table-bordered border-dark" >
      <th>No</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Jurusan</th>
      <th>Hobi</th>
      <th>Email Student</th>
      <th>Alamat</th>
      <th>No.HP</th>
      <th>Asal SMA</th>
      <th>Mata Kuliah Favorit</th>
      <th>Edit</th>
      <th>Delete</th>
  </tr>
  <tbody id="myTable" >
  <tr>
  <?php 
  include 'connect.php';
  $id = 1;
  $data = mysqli_query($koneksi,"SELECT * FROM datamahasiswa");
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
    <td><?php echo $id++; ?></td>
    <td><?php echo $d['NRP']; ?></td>
    <td><?php echo $d['Nama']; ?></td>
    <td><?php echo $d['JenisKelamin']; ?></td>
    <td><?php echo $d['Jurusan']; ?></td>
    <td><?php echo $d['Hobi']; ?></td>
    <td><?php echo $d['EmailStudent']; ?></td>
    <td><?php echo $d['Alamat']; ?></td>
    <td><?php echo $d['NoHp']; ?></td>
    <td><?php echo $d['AsalSMA']; ?></td>
    <td><?php echo $d['MataKuliahFavorit']; ?></td>
    <td>
      <a href="edit.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-success btn-sm">
        <i class="fa fa-pencil"></i>  
      </a>
    </td>
    <td>
      <a href="delete.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah anda yakin ingin menghapus data?')">
        <i class="fa fa-trash"></i>
      </a>
    </td>
  </tr>
    <?php 
		}
		?>
  </tbody>
</table>

</div>
</div>
  </div>
</div>
<br><br><br>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script src="https://kit.fontawesome.com/46af51a585.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>