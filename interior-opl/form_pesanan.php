<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--====== Favicon Icon ======-->
   <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/png" >
  <title>Checkout</title>
</head>
<body>
  <!--====== PRELOADER PART START ======-->

  <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

  <!--====== HEADER PART START ======-->

  <header id="home" class="header-area pt-100">
<div class="shape header-shape-three animation-one">
    <img src="assets/images/banner/shape/shape-3.png" alt="shape" width="100px" height="100px>
</div> 
<div class="shape header-shape-fore">
    <img src="assets/images/banner/shape/shape-4.png" alt="shape" width="100px" height="100px>
</div>

<div class="navigation-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.jpg" alt="Logo" height="100px" width="450px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="page-scroll" href="index.php">Home</a>
                            </li>
                        </ul> <!-- navbar nav -->
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- navigation bar -->

<div class="header-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="banner-image bg_cover" style="background-image: url(assets/images/1.jpg)"></div>
</div> <!-- header banner -->
<div class="form-container">
<div class="container-fluid">
<div class="row">
  <div class="col-3"></div>
  <div class="col-6 card p-3" style="background-color:#FFC0CB;" >
<form action="../admin/pelanggan.php" method="post" >
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-circle"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat Lengkap</label> 
    <div class="col-8">
      <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-internet-explorer"></i>
          </div>
        </div> 
        <input id="text1" name="text1" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">No.Telepon</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="text2" name="text2" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Varian Blouse</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select" required="required">
        <option value="bmr">Blueish Mariana Ribbon Blouse</option>
        <option value="bmb">Beige Maryon Blouse</option>
        <option value="brc">Brown Regular Collar Blouse</option>
        <option value="mac">Maroon Academia Blouse</option>
        <option value="bwh">Broken White Hitomi Blouse</option>
        <option value="efb">Emerald Fiance Blouse</option>
        <option value="mcb">Mono Corner Blouse</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-sort-numeric-asc"></i>
          </div>
        </div> 
        <input id="number" name="number" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select2" class="col-4 col-form-label">Pembayaran Via</label> 
    <div class="col-8">
      <select id="select2" name="select2" class="custom-select" required="required">
        <option value="cc">Kartu Kredit</option>
        <option value="bca">BANK BCA</option>
        <option value="bni">BANK BNI</option>
        <option value="man">BANK Mandiri</option>
        <option value="">Cash On Delivery (COD)</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="Submit" type="Submit" class="btn btn-primary">CHECKOUT</button>
    </div>
  </div>
  <div class="col-3"></div>
</form>
</div>
</div>
</div>
<?php
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_telepon = $_POST['no_telepon'];
        $jumlah_beli = $_POST['jumlah_beli'];
        $produk_id = $_POST['produk_id'];
           
        // Insert user data into table
        $rs = $dbh->query($sql, "INSERT INTO pelanggan(id,nama,jenis_kelamin,no_telepon,jumlah_beli,produk_id) VALUES('$id','$nama','$jenis_kelamin','$no_telepon','$email','$jumlah_beli','$produk_id')");
        
        // Show message when user added
        echo "User added successfully. <a href='../admin/pelanggan.php'>View Users</a>";
    }
    ?>
</header>
<!--====== HEADER PART ENDS ======-->
</body>
</html>