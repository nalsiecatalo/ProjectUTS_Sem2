<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_jenis_kelamin = $_POST['jenis_kelamin'];
   $_alamat= $_POST['alamat'];
   $_no_telepon = $_POST['no_telepon'];
   $_jumlah_beli = $_POST['jumlah_beli'];
   $_produk_id = $_POST['produk_id'];
   $_proses = $_POST['proses'];

   // array data
 
   $ar_data[]=$_nama; 
   $ar_data[]=$_jenis_kelamin;
   $ar_data[]=$_alamat; 
   $ar_data[]=$_no_telepon; 
   $ar_data[]=$_jumlah_beli; 
   $ar_data[]=$_produk_id;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (nama,jenis_kelamin,alamat,no_telepon,jumlah_beli, produk_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET nama=?,jenis_kelamin=?,alamat=?,no_telepon=?,jumlah_beli=?,produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:pelanggan.php');
?>