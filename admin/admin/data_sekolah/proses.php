<?php

    include('./../koneksi/config.php');

    @$proc = @$_REQUEST['proc'];

    @$id_lokasi = @$_POST['id_lokasi'];
    @$nama_sma = @$_POST['nama_sma'];
    @$alamat_sma = @$_POST['alamat_sma'];

    switch(@$proc){

        case "add" :
            $sql=$db->prepare("INSERT INTO sma_lokasi(nama_sma, alamat_sma) VALUES (:nama_sma, :alamat_sma)");
            $sql->bindParam(':nama_sma', $nama_sma);
            $sql->bindParam(':alamat_sma', $alamat_sma);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menambahkan data?');
                    window.location.href='index.php?module=data_sekolah';
                </script>
            ";
        break;

        case "edit" :
            $sql=$db->prepare("UPDATE sma_lokasi SET nama_sma = :nama_sma, alamat_sma = :alamat_sma WHERE id_lokasi = :id_lokasi");
            $sql->bindParam(':id_lokasi', $id_lokasi);
            $sql->bindParam(':nama_sma', $nama_sma);
            $sql->bindParam(':alamat_sma', $alamat_sma);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin merubah data?');
                    window.location.href='index.php?module=data_sekolah';
                </script>
            ";
        break;

        case "delete" :
            @$id_lokasi = @$_GET['id'];

            $sql=$db->prepare("DELETE FROM sma_lokasi WHERE id_lokasi = :id_lokasi");
            $sql->bindParam(':id_lokasi', $id_lokasi);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menghapus data?');
                    window.location.href='index.php?module=data_sekolah';
                </script>
            ";
        break;
    }

?>