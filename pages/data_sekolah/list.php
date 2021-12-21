<div class="table-data">
    <h1>Daftar Sekolah</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>Alamat Sekolah</th>
            <tr>
        </thead>
        <tbody>    
            <?php
                $no = 1;
                $sql=$db->prepare("SELECT * FROM sma_lokasi");
                $sql->execute();
                while($hasil=$sql->FETCH(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $hasil['nama_sma'];?></td>
                    <td><?php echo $hasil['alamat_sma'];?></td>
                </tr>
            <?php
                $no++;
                }
            ?>
        </tbody>
    </table>
</div>