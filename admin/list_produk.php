<?php
require_once 'dbkoneksi.php';
require_once "header.php";
require_once "sidebar.php";

?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Data</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section style="background-color: white;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <a style="background-color: #343a40" class="btn text-white" href="form_produk.php" role="button">Create Produk</a><br><br>
                        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                    <th>jenis_produk_id</th>
                                    <th>kode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor  = 1;
                                foreach ($rs as $row) {
                                ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['harga_jual'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['jenis_produk_id'] ?></td>
                                        <td><?= $row['kode'] ?></td>
                                        <td>
                                            <a style="background-color: #343a40; border-style: solid; border-color: cyan" class="btn text-white" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                                            <a style="background-color: #343a40; border-style: solid; border-color: yellow" class="btn text-white" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                            <a style="background-color: #343a40; border-style: solid; border-color: red" class="btn text-white" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda yakin ingin menghapus ini? <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>