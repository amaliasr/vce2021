<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistem Audit E-Marketing">
  <meta name="author" content="Resanti">
  <title>Dashboard - VCE2021</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="<?=base_url()?>assets/admin/img/brand/favicon.png" type="image/png"> -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link href="<?=base_url()?>assets/admin/user/edible.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/summernote/summernote.css" />
    <link href="<?=base_url()?>assets/admin/chart/morris/morris.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin/dropify/dropify.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin/dropzone/dropzone.css" rel="stylesheet">
    

  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/argon.css?v=1.2.0" type="text/css">
  <link href="<?=base_url()?>assets/admin/group/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="<?=base_url()?>assets/admin/numeric/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
        crossorigin="anonymous">
  </script>
  <script src="<?=base_url()?>assets/admin/numeric/easy-number-separator.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <style type="text/css">
    body{
      font-size: 12px;
    }
    .dropzone,
    .dropzone:focus {
      position: absolute;
      outline: none !important;
      width: 100%;
      height: 150px;
      cursor: pointer;
      opacity: 0;
    }
    .dropzone-wrapper {
      border: 2px dashed #91b0b3;
      color: #92b0b3;
      position: relative;
      height: 150px;
    }
    .dropzone-desc {
      position: absolute;
      margin: 0 auto;
      left: 0;
      right: 0;
      text-align: center;
      width: 40%;
      top: 50px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?=base_url()?>assets/img/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <?php foreach ($menu as $key) { if($key->id_level == $id_level){?>
            <li class="nav-item">
              <a class="nav-link <?php if($sidebar == $key->link){echo 'active';} ?>" href="<?=site_url('akses/'.$key->link)?>">
                <i class="<?=$key->icon ?>" style="color: grey"></i>
                <span class="nav-link-text">
                  <?=$key->nama_menu ?>
                </span>
              </a>
            </li>
            <?php }}?>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Pesonal Information</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="<?=base_url()?>" >
                <i class="fa fa-play"></i>
                <span class="nav-link-text">Show Page</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url('akses/ubah_password')?>" >
                <i class="fa fa-lock"></i>
                <span class="nav-link-text">Ubah Password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url('akseslog/logout')?>" >
                <i class="fa fa-sign-out-alt"></i>
                <span class="nav-link-text">Keluar</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
  