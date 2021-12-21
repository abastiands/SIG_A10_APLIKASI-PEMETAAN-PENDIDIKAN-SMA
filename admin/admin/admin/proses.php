<?php

    include('./../koneksi/config.php');

    @$proc = @$_REQUEST['proc'];

    @$username = @$_POST['username'];
    @$password = @$_POST['password'];
    @$nama = @$_POST['nama'];
    @$asal = @$_FILES['foto']['tmp_name'];
    @$tujuan = @$_FILES['foto']['name'];

    move_uploaded_file(@$asal, "./../images/".@$tujuan);

    switch(@$proc){

        case "add" :
            $sql=$db->prepare("INSERT INTO admin(username, password, nama, foto) VALUES (:username, :password, :nama, :foto)");
            $sql->bindParam(':username', $username);
            $sql->bindParam(':password', $password);
            $sql->bindParam(':nama', $nama);
            $sql->bindParam(':foto', $tujuan);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menambahkan data?');
                    window.location.href='index.php?module=admin';
                </script>
            ";
        break;

        case "edit" :
            $sql=$db->prepare("UPDATE admin SET password = :password, nama = :nama, foto = :foto WHERE username = :username");
            $sql->bindParam(':username', $username);
            $sql->bindParam(':password', $password);
            $sql->bindParam(':nama', $nama);
            $sql->bindParam(':foto', $tujuan);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin merubah data?');
                    window.location.href='index.php?module=admin';
                </script>
            ";
        break;

        case "delete" :
            @$username = @$_GET['id'];

            $sql=$db->prepare("DELETE FROM admin WHERE username = :username");
            $sql->bindParam(':username', $username);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menghapus data?');
                    window.location.href='index.php?module=admin';
                </script>
            ";
        break;
    }

?>