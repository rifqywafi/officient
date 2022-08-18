<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">
    <title>OFC | <?= $data['judul'] ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg shadow mb-3 py-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL;?>" style="color:white;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link mx-2 font1" href="<?= BASEURL;?>" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 font1" href="<?= BASEURL;?>/data">Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>