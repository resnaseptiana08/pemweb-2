<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="d-flex">
  <div class="col-8">
    <h4>Belanja Online</h4>
    <hr>
    <form method="post">
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Customer</label> 
        <div class="col-4">
          <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
            <label for="produk_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
            <label for="produk_1" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-2">
          <input id="jumlah" name="jumlah" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-success">Kirim</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <tr class="bg-primary text-white">
      <td>Daftar Harga</td>
    </tr>
    <tr>
      <td>TV : 4.200.000</td>
    </tr>
    <tr>
      <td>KULKAS : 3.100.000</td>
    </tr>
    <tr>
      <td>MESIN CUCI : 3.800.000</td>
    </tr>
    <tr class="bg-primary text-white">
      <td>Harga Dapat Berubah Setiap Saat</td>
    </tr>
  </table>
</div>
<?php
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];

  $total = 0;
  if($produk == "TV"){
    $total = 4200000 * $jumlah;
  }else if($produk == "KULKAS"){
    $total = 3100000 * $jumlah;
  }else if($produk == "MESIN CUCI"){
    $total = 3800000 * $jumlah;
  }

  echo "
  <div class='col-8'>
    <ul class='list-group'>
      <li class='list-group-item'>Nama Customer : $nama</li>
      <li class='list-group-item'>Produk : $produk</li>
      <li class='list-group-item'>Jumlah : $jumlah</li>
      <li class='list-group-item'>Total : ".number_format($total, 0, ",", ".")."</li>
    </ul>
  </div>
  "; 
}
?>
</body>
</html>