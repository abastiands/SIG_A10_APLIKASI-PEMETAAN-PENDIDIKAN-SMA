<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql=$db->prepare("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $sql->execute();
    $hasil=$sql->rowCount();

    if($hasil>0){
        $_SESSION['username'] = $username;
        echo"
            <script>
                alert('Login Berhasil');
                window.location.href='index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Login Gagal');
                window.location.href='login.php';
            </script>
        ";
    }
?>