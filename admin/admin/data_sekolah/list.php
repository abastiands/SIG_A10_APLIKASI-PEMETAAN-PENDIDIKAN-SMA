<?php 
  if(@$_SESSION['username'] !=''){
?>
<div class="admin-page">
  <h1>Data Sekolah</h1>
  <div class="add">
    <a href="index.php?module=data_sekolah&action=add" class="btn btn-add"> <i class="fas fa-plus"></i> Add </a>
  </div>
  <!-- add -->
  <div class="table-data">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama SMA</th>
          <th>Alamat SMA</th>
          <!-- <th>Lokasi SMA</th> -->
          <th>Option</th>
        </tr>
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
          <td><?php echo substr($hasil['alamat_sma'], 0, 23);?></td>
          <!-- <td></td> -->
          <td>
            <a href="index.php?module=data_sekolah&action=add&id=<?php echo @$hasil['id_lokasi'];?>" class="btn btn-edit">
              <i class="fas fa-edit"></i>
            </a>
            <a href="index.php?module=data_sekolah&action=proses&id=<?php echo @$hasil['id_lokasi'];?>&proc=delete" class="btn btn-delete">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        <?php
          $no++;
          }
        ?>
      </tbody>
    </table>
    <!-- table -->
  </div>
  <!-- table-data -->
</div>
<!-- admin-page -->
<?php
  }else{
    echo"
      <script>
        window.location.href='index.php';
      </script>
    ";
  }
?>