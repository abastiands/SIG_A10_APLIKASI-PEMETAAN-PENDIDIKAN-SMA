<?php session_start() ?>
<?php
  include("./../koneksi/config.php");
  if(@$_SESSION['username'] ==''){
    if(@$_GET['module'] !=''){
      if(@$_GET['action'] !=''){
        include("admin/".@$_GET['module']."/".@$_GET['action'].".php");
      }else{
        include("admin/".@$_GET['module']."/list.php");
      }
    }else{
      include("login.php");
    }
  }else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA NEGERI SURABAYA</title>
    <link rel="stylesheet" href="./../css/backend/style.css" />
	<link rel="shortcut icon" href="./../images/icon.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <nav class="nav-bar">
        <p class="logo"><a href="index.php">admin</a></p>
        <ul class="btn-logout">
          <li>
            <a href="login.php">logout</a>
          </li>
        </ul>
        <!-- btn-logout -->
      </nav>
      <!-- nav-bar -->
    </header>
    <!-- header -->
    <div class="container">
      <div class="row">
        <div class="sidebar">
          <ul class="menu">
            <li>
              <a href="index.php?module=admin"
                ><i class="fas fa-user-tie"></i> Admin</a
              >
            </li>
            <li>
              <a href="index.php?module=data_sekolah"
                ><i class="fas fa-table"></i> Data Sekolah</a
              >
            </li>
            <li>
              <a href="maps.html"
                ><i class="fas fa-globe"></i> Maps Sekolah</a
              >
            </li>
            <li>
              <a href="index.php?module=user"
                ><i class="fas fa-user"></i> User</a
              >
            </li>
          </ul>
          <!-- menu -->
        </div>
        <!-- sidebar -->
        <div class="content">
          <?php
            if(@$_GET['module'] !=''){
              if(@$_GET['action'] !=''){
                include("admin/".@$_GET['module']."/".@$_GET['action'].".php");
              }else{
                include("admin/".@$_GET['module']."/list.php");
              }
            }else{
              include("admin/admin/list.php");
            }
          ?>
        </div>
        <!-- content -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </body>
</html>
<?php } ?>