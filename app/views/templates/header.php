<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <title>OFC | <?= $data['judul'] ?></title>

</head>

<body>

  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light border">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
          <a href="<?= BASEURL; ?>" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark">
            <span class=" d-sm-inline"><img src="<?= BASEURL; ?>/img/officient.png" style="width:200px;height:75px;;"></span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
            <div id="menu">
              <li>
                <a href="<?= BASEURL; ?>" class="nav-link px-0 align-middle">
                  <i class="fs-4 bi-house-fill"></i> <span class="ms-1 d-none d-sm-inline">Home</span></a>
              </li>
              <li>
                <a href="#karyawan-collapse" id="karyawan-toggle" class="nav-link px-0 align-middle" data-bs-toggle="collapse" aria-controls="karyawan-collapse" aria-expanded="false">
                  <i class="fs-4 bi-people mr-1"></i> <span class="ms-1 d-none d-sm-inline">Karyawan</span><i class="bi bi-caret-down-fill mx-1 py-1" style="font-size:12px;"></i></a>
                <div class="collapse navbar-collapse" id="karyawan-collapse">
                  <ul class="nav-link nav fw-normal pb-1 bg-light small">
                    <li class="nav-item"><a href="<?= BASEURL; ?>/data" class="nav-link">
                        <i class="fs-4 bi-folder-fill mx-2"></i>Data</a></li>
                    <li class="nav-item"><a href="<?= BASEURL; ?>/absensi" class="nav-link">
                        <i class="fs-4 bi-clipboard-check-fill mx-2"></i>Absensi</a></li>
                    <li class="nav-item"><a href="<?= BASEURL; ?>/izin" class="nav-link">
                        <i class="fs-4 bi-book-fill mx-2"></i>Laporan</a></li>
                    <li class="nav-item"><a href="<?= BASEURL; ?>/izin" class="nav-link">
                        <i class="fs-4 bi-envelope-fill mx-2"></i>Izin</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                  <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pengumuman</span></a>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                  <i class="fs-4 bi-info-circle"></i> <span class="ms-1 d-none d-sm-inline">About</span></a>
              </li>
          </ul>
          <hr>
        </div>
        <div class="dropdown pb-4">
          <a href="#menuuser" class="d-flex align-items-center text-dark dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-controls="menuuser" aria-expanded="false">
            <i class="bi bi-person-circle-fill" alt="profile" width="30" height="30" class="rounded-circle">
            </i>
            <span class="d-none d-sm-inline mx-1 text-dark">User</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small-dark shadow" id="menuuser">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
      <div class="col py-3">