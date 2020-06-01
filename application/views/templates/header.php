<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="http://localhost/ci-app/asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    
</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
       <a class="navbar-brand" href="#">CI App</a>
       <button class="navbar-toggler" type="button" data-tonggle="coapse"
       data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
       aria-expanded="false" aria-label="toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url(); ?>">HOME</a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">MAHASISWA</a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>peoples">PEOPLES</a>
          <a class="nav-item nav-link" href="#">ABOUT</a>
          </div>
      </div>
      </div>
   </nav>

 <br>
 <br>
