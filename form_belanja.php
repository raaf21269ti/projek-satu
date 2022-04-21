<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
<div class="content-wrapper">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Form Belanja</title>
<h1>Belanja Online</h1>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
<form method="GET" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama customer" type="text" class="form-control">
      </div>
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
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" name="submit" value="kirim" class="btn btn-primary">
    </div>
  </div>
</form>
		</div>
		<div class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV : 4.200.000
				</div>
                <div class="list-group-item">
					Kulkas : 3.100.000
				</div>
                <div class="list-group-item">
					Mesin Cuci : 3.800.000
				</div>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah setiap saat</a>
			</div>
		</div>
	</div>
</div>
<?php
    $_customer = $_GET;
    $_produk = $_GET;
    $_jumlah = $_GET;

    // if ($TotalBelanja >= 85 && $TotalBelanja <= 100){
    //   echo "Nilai Anda : A";
    // }elseif ($nilai >= 70 && $nilai <= 84){
    //   echo "Nilai Anda : B";
    // }elseif ($nilai >= 56 && $nilai <= 69){
    //   echo "Nilai Anda : C";
    // }elseif ($nilai >= 0 && $nilai <= 35){
    //   echo "Nilai Anda : E";
    // }else {
    //   echo "Nilai Anda : I";
    ?>

    <h1>Success</h1>
    <!-- <br/>Total belanja = <?=$TotalBelanja?> -->

<?php
include_once 'footer.php';
?>