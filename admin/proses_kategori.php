<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2

   if($_proses == "Save"){
    // data baru
    $sql = "INSERT INTO jenis_produk (nama_jenis) VALUES (?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE jenis_produk SET nama_jenis=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:jenis_produk.php');
?>