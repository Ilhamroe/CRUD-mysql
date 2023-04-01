<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Read Update Delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/6.4.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body{
        background-image: url('img/bg2.jpg');
        background-size:cover;
      }
      .space{
        width: 100;
        height: 10px;
        margin-left: 9px;
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
  <div class="space">
  </div>
  <h1 align ="center" style="color: black " >Tambahkan Data Mahasiswa</h1><br>
  <div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Read</a>
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
 <form method="post" action="add_action.php">
 <div class="container">
  <div class="mb-3 row">
    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
    <div class="col-sm-10">
      <input type="text" name="NRP" class="form-control" id="NRP" placeholder="1234567890">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Miroe">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="JenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select class="form-select" name="JenisKelamin" id="JenisKelamin">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
      <input type="text" name="Jurusan" class="form-control" id="Jurusan" placeholder="Teknik">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Hobi" class="col-sm-2 col-form-label">Hobi</label>
    <div class="col-sm-10">
      <input type="text" name="Hobi" class="form-control" id="Hobi" placeholder="Bowling">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="EmailStudent" class="col-sm-2 col-form-label">Email Student</label>
    <div class="col-sm-10">
      <input type="text" name="EmailStudent" class="form-control" id="EmailStudent" placeholder="student@student.pens.ac.id">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" name="Alamat" class="form-control" id="Alamat" placeholder="Njepapung">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="NoHp" class="col-sm-2 col-form-label">No HP</label>
    <div class="col-sm-10">
      <input type="text" name="NoHp" class="form-control" id="NoHp" placeholder="081234567890">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="AsalSMA" class="col-sm-2 col-form-label">Asal SMA</label>
    <div class="col-sm-10">
      <input type="text" name="AsalSMA" class="form-control" id="AsalSMA" placeholder="SMA HAHAHA">
    </div>
  </div>
  <div class="mb-4 row">
    <label for="MataKuliahFavorit" class="col-sm-2 col-form-label">Mata Kuliah Favorit</label>
    <div class="col-sm-10">
      <input type="text" name="MataKuliahFavorit" class="form-control" id="MataKuliahFavorit" placeholder="Penjas">
    </div>
  </div>
  <div class="mb-3">
    <a href="index.php" type="button" class="btn btn-primary btn-sm">
        <i class="fa fa-home"></i> Kembali
    </a> 
    <button href="index.php" class="btn btn-primary btn-sm" onclick="return confirm ('Apakah anda yakin ingin menambahkan data?')">
        <i class="fa fa-add"></i> Tambahkan
    </button>
    </div>    
  </div>
 </div>
 </form>
</div>
</div>
</div>
<br>
<br>
<br>

<script src="https://kit.fontawesome.com/46af51a585.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>