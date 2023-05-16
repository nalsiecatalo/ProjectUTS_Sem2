<?php
require_once 'dbkoneksi.php';

    $iddel = $_GET['iddel'];
    $query = "DELETE FROM jenis_produk WHERE id = ?";
    $delete = $dbh->prepare($query);
    $delete->execute([$iddel]);

    header('location:jenis_produk.php');
?>