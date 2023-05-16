<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];

$sql = "SELECT * FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PELANGGAN ' . $row['nama'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pesanan</h3>

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
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td><?= $row['id'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><?= $row['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><?= $row['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No.Telepon</td>
                                        <td><?= $row['no_telepon'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Beli</td>
                                        <td><?= $row['jumlah_beli'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Produk</td>
                                        <td><?= $row['produk_id'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
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
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>