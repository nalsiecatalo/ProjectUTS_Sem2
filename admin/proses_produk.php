<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_harga_jual = $_POST['harga_jual'];
   $_stok= $_POST['stok'];
   $_jenis_produk_id = $_POST['jenis_produk_id'];
   $_kode = $_POST['kode'];

   $_proses = $_POST['proses'];

   // array data
 
   $ar_data[]=$_nama; 
   $ar_data[]=$_harga_jual;
   $ar_data[]=$_stok; 
   $ar_data[]=$_jenis_produk_id; 
   $ar_data[]=$_kode; 

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (nama,harga_jual,stok,jenis_produk_id,kode) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama=?,harga_jual=?,stok=?,jenis_produk_id=?,kode=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>