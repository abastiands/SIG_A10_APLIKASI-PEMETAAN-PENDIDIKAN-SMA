<?php session_start() ?>
<?php include("./koneksi/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA NEGERI SURABAYA</title>
    <link rel="stylesheet" href="./css/frontend/style.css" />
    <link rel="shortcut icon" href="./images/icon.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav class="nav-bar">
        <p class="logo"><a href="index.php">GIS SMA NEGERI SURABAYA</a></p>
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?module=data_sekolah">Daftar Sekolah</a></li>
          <?php if(@$_SESSION['username'] !=''){ ?>
            <li><a href="index.php?module=proses_logout&action=proses">Logout</a></li>
          <?php }else{ ?>
            <li><a href="login.php">Login</a></li>
          <?php } ?>
        </ul>
      </nav><!-- nav -->
    </header><!-- header -->
    <div class="container">
      <div class="row">
        <div class="content">
          <?php
            if(@$_GET['module'] !=''){
              if(@$_GET['action'] !=''){
                include("pages/".@$_GET['module']."/".@$_GET['action'].".php");
              }else{
                include("pages/".@$_GET['module']."/list.php");
              }
            }else{
              include("maps.html");
            }
          ?>
        </div><!-- content -->
      </div><!-- row -->
    </div><!-- container -->
  </body>
</html>