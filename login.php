<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
margin: 0;
padding: 0;
box-sizing: border-box;
    }

    body{
      min-height: 100vh;
      background: #eee;
      display: flex;
      font-family: sans-serif;

    }
    .container{
      margin: auto;
      width: 500px;
      max-width: 90%;
    }
  </style>
</head>
<body>
<div class="row mt-5 mb-5 justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <p class="text-center"><strong>Login Perpustakaan Digital</strong></p>
      </div>
      <form action="index.php?page=postlogin" method="POST" id="logForm">
        <div class="card-body">

          <div class="form-group">
            <label>Nama Pengguna</label>
            <input type="text" class="form-control" name="Username" placeholder="Masukan Nama Pengguna" required>
          </div>

          <div class="form-group">
            <label>Kata Sandi</label>
            <input type="password" class="form-control" name="Password" placeholder="Masukan Kata Sandi" required>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Login</button>
          <hr>
          <center>
            <a href="index.php?page=register">Belum punya akun? Silahkan Daftar terlebih dahulu</a>
          </center>
        </div>
      </form>
    </div>
  </div>

</div>
  
</body>
</html>




































<!-- <div class="row mt-5 mb-5 justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <p class="text-center"><strong>Login Perpustakaan Digital</strong></p>
      </div>
      <form action="index.php?page=postlogin" method="POST" id="logForm">
        <div class="card-body">

          <div class="form-group">
            <label>Nama Pengguna</label>
            <input type="text" class="form-control" name="Username" placeholder="Masukan Nama Pengguna" required>
          </div>

          <div class="form-group">
            <label>Kata Sandi</label>
            <input type="password" class="form-control" name="Password" placeholder="Masukan Kata Sandi" required>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Login</button>
          <hr>
          <center>
            <a href="index.php?page=register">Belum punya akun? Silahkan Daftar terlebih dahulu</a>
          </center>
        </div>
      </form>
    </div>
  </div>

</div> -->