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
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light border">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class=" d-sm-inline"><img src="<?= BASEURL;?>/img/officient.png" style="width:200px;height:75px;;"></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Home</span></a>
                    </li>
                    <li>
                        <a href="" class="nav-link px-1 align-middle collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Dashboard
                        </a>
                        <div class="collapse" id="dashboard-collapse">
                        <ul class="nav-link nav list-unstyled fw-normal pb-1 bg-light small">
                            <li><a href="#" class="nav-link d-inline-flex text-decoration-none rounded">Overview</a></li>
                            <li><a href="#" class="nav-link d-inline-flex text-decoration-none rounded">Weekly</a></li>
                            <li><a href="#" class="nav-link d-inline-flex text-decoration-none rounded">Monthly</a></li>
                            <li><a href="#" class="nav-link d-inline-flex text-decoration-none rounded">Annually</a></li>
                        </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pengumuman</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">About</span></a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="" alt="" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-small shadow">
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
        </div>
        <div class="col py-3">
            