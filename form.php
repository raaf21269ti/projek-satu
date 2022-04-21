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
    <title>FormPasien</title>
</head>
<body>
<div class="container">
    <h2 class="text-center mb-5">Form Pasien</h2>
<form action="data.php" method="GET">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama__lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-align-justify"></i>
          </div>
        </div> 
        <input id="berat" name="berat__" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-align-justify"></i>
          </div>
        </div> 
        <input id="tinggi" name="tinggi__" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-align-justify"></i>
          </div>
        </div> 
        <input id="umur" name="umur__" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis__kelamin" id="kelamin_0" type="radio" class="custom-control-input" value="laki -laki"> 
        <label for="kelamin_0" class="custom-control-label">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis__kelamin" id="kelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>


  <hr>
  <?php require_once "classbmi.php"?>

  <div class="container">
      <h2 class="text-center mb-5">Data BMI Pasien</h2>
      <table class="table table-hover table-striped">
          <thead>
              <tr>
                  <th scope='col'>#</th>
                  <th scope='col'>Nama Lengkap</th>
                  <th scope='col'>Gender</th>
                  <th scope='col'>Umur</th>
                  <th scope='col'>Berat</th>
                  <th scope='col'>Tinggi</th>
                  <th scope='col'>BMI</th>
                  <th scope='col'>Hasil</th>
                </tr>
           </thead>
           <tbody>
               <?php
               $nomor = 1;
               foreach ($ar_pasien as $pasien){
                   echo '<tr><td>' . $nomor .'</td>';
                   echo '<td>' . $pasien['nama'] .'</td>';
                   echo '<td>' . $pasien['kelamin'] .'</td>';
                   echo '<td>' . $pasien['umur'] .'</td>';
                   echo '<td>' . $pasien['berat'] .'</td>';
                   echo '<td>' . $pasien['tinggi'] .'</td>';
                   $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100) ** 2);
                   echo '<td>' . number_format($BMI, 1) . '</td>';
                   $status = new bmipasien();
                   echo $status->statusBMI($BMI);
                   echo '</tr>';
                   $nomor++;
               }
               ?>
            </tbody>
            </table>
    </div>    
</body>
</html>

</div>
<?php
 include_once 'footer.php';
?>