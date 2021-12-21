<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA NEGERI SURABAYA</title>
    <link rel="stylesheet" href="./../css/backend/style.css" />
	<link rel="shortcut icon" href="./../images/icon.png" />
  </head>
  <body>
    <div class="login-page">
      <div class="form-login">
        <h1>LOGIN</h1>
        <form action="index.php?module=proses_login&action=proses" method="post" class="login-admin">
          <input type="text" name="username" placeholder="username" />
          <input type="password" name="password" placeholder="password" />
          <button class="submit" onclick="javascript:window.location.href='index.php'">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
