<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

//untuk edit data customer
if (!empty($_GET['idedit'])) {
  $edit = $_GET['idedit'];
  //untuk menampilkan data dengan perintah select
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  $st = $dbh->prepare($sql);
  //untuk menjalankan program 
  $st->execute([$edit]);
  //untuk menampilkan baris di tiap data 
  $row = $st->fetch();
} else {
  //untuk buat data baru 
  $row = [];
};
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h1 align="center">Customer Form</h1>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="proses_pelanggan.php">
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama</label>
                  <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
                  <div class="col-8">
                    <input id="jenis_kelamin" name="jenis_kelamin" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-4 col-form-label">Alamat</label>
                  <div class="col-8">
                    <input id="alamat" name="alamat" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="no_telepon" class="col-4 col-form-label">No.Telepon</label>
                  <div class="col-8">
                    <input id="no_telepon" name="no_telepon" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label>
                  <div class="col-8">
                  <input id="jumlah_beli" name="jumlah_beli" type="number" class="form-control">
                  </div>
                  </div>
                <div class="form-group row">
                  <label for="produk_id" class="col-4 col-form-label">Produk</label>
                  <div class="col-8">
                <?php
                    $sqlproduk_id = "SELECT * FROM produk";
                    $rsproduk_id = $dbh->query($sqlproduk_id);
                    ?>
                    <select id="produk_id" name="produk_id" class="custom-select">
                      <?php
                      foreach ($rsproduk_id as $rowproduk_id) {
                      ?>
                        <option value="<?= $rowproduk_id['id'] ?>"><?= $rowproduk_id['nama'] ?></option>
                      <?php
                      }
                      ?>
                  </select> 
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <?php
                    //melakukan validasi form 
                    $button = (empty($edit)) ? "Simpan" : "Update";
                    ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                    <input type="hidden" name="idedit" value="<?= $edit ?>">
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- footer section -->
<?php require_once "footer.php" ?>