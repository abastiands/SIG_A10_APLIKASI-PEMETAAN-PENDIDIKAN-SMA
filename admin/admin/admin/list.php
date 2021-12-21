<?php 
  if(@$_SESSION['username'] !=''){
?>
<div class="admin-page">
  <h1>Data Admin</h1>
  <div class="add">
    <a href="index.php?module=admin&action=add" class="btn btn-add"> <i class="fas fa-plus"></i> Add </a>
  </div>
  <!-- add -->
  <div class="table-data">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Foto</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          $sql=$db->prepare("SELECT * FROM admin");
          $sql->execute();
          while($hasil=$sql->FETCH(PDO::FETCH_ASSOC)){
        ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $hasil['username'];?></td>
          <td><?php echo $hasil['nama'];?></td>
          <td><img src="./../images/<?php echo $hasil['foto']; ?>" ></td>
          <td>
            <a href="index.php?module=admin&action=add&id=<?php echo @$hasil['username'];?>" class="btn btn-edit">
              <i class="fas fa-edit"></i>
            </a>
            <a href="index.php?module=admin&action=proses&id=<?php echo @$hasil['username'];?>&proc=delete" class="btn btn-delete">
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