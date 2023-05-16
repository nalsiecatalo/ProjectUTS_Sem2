<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer Order Data</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-color: white;" class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <table class="table">
                        <thead>
                        <div class="card-body">
                            <a style="background-color: #343a40" class="btn text-white" href="form_pelanggan.php" role="button">Add Customer</a><br><br>
                            <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No.Telepon</th>
                                <th scope="col">Jumlah Beli</th>
                                <th scope="col">Produk</th>
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
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['no_telepon'] ?></td>
                                        <td><?= $row['jumlah_beli'] ?></td>
                                        <td><?= $row['produk_id'] ?></td>
                                        <td>
                                            <a style="background-color: #343a40; border-style: solid; border-color: cyan" class="btn text-white" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                                            <a style="background-color: #343a40; border-style: solid; border-color: yellow" class="btn text-white" href="form_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                                            <a style="background-color: #343a40; border-style: solid; border-color: red" class="btn text-white" href="delete_pelanggan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda yakin ingin menghapus ini? <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                    </table>
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