<?php 
  if(@$_SESSION['username'] !=''){
?>
<div class="input-page">
  <div class="form-input">
    <h1>Tambah Data User</h1>
    <form action="index.php?module=user&action=proses" method="post" enctype="multipart/form-data">
      <?php if(@$_GET['id'] !=''){ ?>
        <input type="hidden" name="username" value="<?php echo @$_GET['id'];?>" >
        <input type="hidden" name="proc" value="edit">
      <?php }else{ ?>
        <input type="hidden" name="proc" value="add">
      <?php } ?>
      <table>
        <?php
          $username = @$_GET['id'];
          $sql=$db->prepare("SELECT * FROM user WHERE username = :username");
          $sql->bindParam(':username', $username);
          $sql->execute();
          $hasil=$sql->FETCH(PDO::FETCH_ASSOC);
        ?>
        <?php if(@$hasil['username'] !=''){ ?>
        <tr class="form-content">
          <td class="form-name"><label for="username">Username</label></td>
          <td class="form-colon">:</td>
          <td>
            <input
              type="text"
              id="username"
              name="username"
              value="<?php echo @$hasil['username']; ?>"
              placeholder="Ketikkan Username"
              disabled
            />
          </td>
        </tr>
        <?php }else{ ?>
        <tr class="form-content">
          <td class="form-name"><label for="username">Username</label></td>
          <td class="form-colon">:</td>
          <td>
            <input
              type="text"
              id="username"
              name="username"
              value="<?php echo @$hasil['username']; ?>"
              placeholder="Ketikkan Username"
            />
          </td>
        </tr>
        <?php } ?>
        <tr class="form-content">
          <td class="form-name"><label for="password">Password</label></td>
          <td class="form-colon">:</td>
          <td>
            <input
              type="password"
              id="password"
              name="password"
              value="<?php echo @$hasil['password']; ?>"
              placeholder="Ketikkan Password"
            />
          </td>
        </tr>
        <tr class="form-content">
          <td class="form-name"><label for="nama">Nama</label></td>
          <td class="form-colon">:</td>
          <td>
            <input
              type="text"
              id="nama"
              name="nama"
              value="<?php echo @$hasil['nama']; ?>"
              placeholder="Ketikkan Nama"
            />
          </td>
        </tr>
        <tr class="form-content">
          <td class="form-name"><label for="foto">Foto</label></td>
          <td class="form-colon">:</td>
          <td>
            <input type="file" name="foto"/>
          </td>
        </tr>
      </table>
      <!-- table -->
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="button" onclick="javascript:window.location.href='index.php?module=user'" class="btn btn-danger">Cancel</button>
    </form>
    <!-- form -->
  </div>
  <!-- form-input -->
</div>
<!-- input-page -->
<?php
  }else{
    echo"
      <script>
        window.location.href='index.php';
      </script>
    ";
  }
?>