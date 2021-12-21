<?php 
  if(@$_SESSION['username'] !=''){
?>
<div class="input-page">
  <div class="form-input">
    <h1>Tambah Data Sekolah</h1>
    <form action="index.php?module=data_sekolah&action=proses" method="post" enctype="multipart/form-data">
      <?php if(@$_GET['id'] !=''){ ?>
        <input type="hidden" name="id_lokasi" value="<?php echo @$_GET['id'];?>" >
        <input type="hidden" name="proc" value="edit">
      <?php }else{ ?>
        <input type="hidden" name="proc" value="add">
      <?php } ?>
      <table>
        <?php
          $id_lokasi = @$_GET['id'];
          $sql=$db->prepare("SELECT * FROM sma_lokasi WHERE id_lokasi = :id_lokasi");
          $sql->bindParam(':id_lokasi', $id_lokasi);
          $sql->execute();
          $hasil=$sql->FETCH(PDO::FETCH_ASSOC);
        ?>
        <tr class="form-content">
          <td class="form-name"><label for="nama_sma">Nama SMA</label></td>
          <td class="form-colon">:</td>
          <td>
            <input
              type="text"
              id="nama_sma"
              name="nama_sma"
              value="<?php echo @$hasil['nama_sma']; ?>"
              placeholder="Ketikkan Nama SMA"
            />
          </td>
        </tr>
        <tr class="form-content">
          <td class="form-name"><label for="alamat_sma">Alamat SMA</label></td>
          <td class="form-colon">:</td>
          <td>
            <textarea name="alamat_sma" id="alamat_sma" placeholder="Ketikkan Alamat SMA"><?php echo @$hasil['alamat_sma'];?></textarea>
          </td>
        </tr>
      </table>
      <!-- table -->
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="button" onclick="javascript:window.location.href='index.php?module=data_sekolah'" class="btn btn-danger">Cancel</button>
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