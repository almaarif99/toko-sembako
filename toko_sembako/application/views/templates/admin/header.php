<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>as</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?= base_url('asset/HTML/styles/shards-dashboards.1.1.0.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/HTML/styles/extras.1.1.0.min.css');?>">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
<body class="h-100">


      <div class="container-fluid">
        <div class="row">
          <!-- Main Sidebar -->
          <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <div class="main-navbar">
              <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">

                <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                  <div class="d-table m-auto">
                    <!-- <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard"> -->
                    <span class="d-none d-md-inline ml-1">Shards Dashboard</span>
                  </div>
                </a>


                <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                  <i class="material-icons">&#xE5C4;</i>
                </a>
              </nav>
            </div>






            <div class="nav-wrapper">
              <ul class="nav flex-column">

                <!-- <li class="nav-item">
                  <a class="nav-link " href="">
                    <i class="material-icons">person</i>
                    <span>User Profile</span>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link active" href="<?= site_url('Admin/show_barang'); ?>">
                    <i class="material-icons">table_chart</i>
                    <span>Tables Barang</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="<?= site_url('Admin/show_kategori'); ?>">
                    <i class="material-icons">table_chart</i>
                    <span>Tables Kategori</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="<?= site_url('Admin/create_kategori'); ?>">
                    <i class="material-icons">vertical_split</i>
                    <span>Blog Posts</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('Admin/create_barang'); ?>">
                    <i class="material-icons">note_add</i>
                    <span>Add New Post</span>
                  </a>
                </li>

              </ul>
            </div>
          </aside>



          <!-- End Main Sidebar -->
          <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
              <!-- Main Navbar -->
              <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                  <div class="input-group input-group-seamless ml-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-search"></i>
                      </div>
                    </div>
                    <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
                </form>

                <ul class="navbar-nav border-left flex-row ">

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <!-- <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar"> -->
                      <span class="d-none d-md-inline-block">Sierra Brooks</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-small">


                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="#">
                        <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                    </div>
                  </li>
                </ul>
                <nav class="nav">
                  <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                    <i class="material-icons">&#xE5D2;</i>
                  </a>
                </nav>
              </nav>
            </div>
