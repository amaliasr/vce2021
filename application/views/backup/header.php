<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Nubis Webpage Title</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/user/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/user/css/swiper.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/user/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  
  <!-- Favicon  -->
    <link rel="icon" href="<?=base_url()?>assets/user/images/favicon.png">
    <style type="text/css">
      .video-container {
          position: relative;
          padding-bottom: 56.25%; /* 16:9 */
          height: 0;
      }
      .video-container iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
      }
      .color-orange{
          color: #FFD523;
      }
      .default-texting{
        color: #FFFFFF;
        text-decoration: none;
        background-color: #212529;
      }
      .default-texting:hover{
        background-color: #00587A;
        text-decoration: none;
      }
      .imgshape {
        width:  100%;
        height: 200px;
        object-fit: cover;
      }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="<?=base_url()?>assets/user/images/logo.svg" alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Nubis</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#details">Saved Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Event</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="#contact">Profil Anda</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->