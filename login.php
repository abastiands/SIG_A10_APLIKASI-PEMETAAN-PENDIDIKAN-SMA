<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA NEGERI SURABAYA</title>
    <link rel="stylesheet" href="./css/frontend/style.css" />
    <link rel="shortcut icon" href="./images/icon.png" />
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form action="index.php?module=register&action=proses&proc=add" method="post" enctype="multipart/form-data" class="register-form">
          <input type="text" name="username" placeholder="Ketikkan Username" />
          <input type="password" name="password" placeholder="Ketikkan Password" />
          <input type="nama" name="nama" placeholder="Ketikkan Nama" />
          <input type="file" name="foto" />
          <button>Create</button>
          <p class="message">Already Registered? <a href="#">Login</a></p>
        </form>
        <form action="index.php?module=proses_login&action=proses" method="post" class="login-form">
          <input type="text" name="username" placeholder="Ketikkan Username" />
          <input type="password" name="password" placeholder="Ketikkan Password" />
          <div class="button-login">
            <button type="submit">Login</button>
          </div>
          <p class="message">Not Registered? <a href="#">Register</a></p>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(".message a").click(function () {
        $("form").animate({ height: "toggle", opacity: "toggle" }, "slow");
      });
    </script>
  </body>
</html>
