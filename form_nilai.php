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
    <title>Form Nilai</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <form class="form-horizontal mt-3" method="POST" action="form_nilai.php">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="select">Mata Kuliah</label> 
                <div class="col-8">
                <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br>
        <?php
        $harga_produk = 3800000;
        $jumlah = 2;
        $total_belanja = $harga_produk * $jumlah;
        echo $total_belanja;
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama_lengkap'];
            $mata_kuliah = $_POST['mata_kuliah'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            $persentase_uts = 0.3 * $nilai_uts;
            $persentase_uts = (30 * $nilai_uts) / 100;
            $nilai_total = $persentase_uts;

            echo 'Nama : ' . $nama;
            echo '<br />Mata Kuliah : ' . $mata_kuliah;
            echo '<br />Nilai UTS : ' . $nilai_uts;
            echo '<br />Nilai UAS : ' . $nilai_uas;
            echo '<br />Nilai Tugas : ' . $nilai_tugas;
            echo '<br />Nilai Total : ' . $nilai_total;

            $grade_uts = '';
            if ($nilai_uts >= 55) {
                $grade_uts = 'A';
                echo "<br />Nilai UTS anda bagus";
            } else {
                $grade_uts = 'B';
                echo "<br />Nilai UTS anda perlu diperbaiki";
            }

            echo "<br />Grade Nilai UTS anda : " . $grade_uts;

            switch ($grade_uts) {
                case 'A':
                    echo '<br />Predikat nilai : Sangat Memuaskan';
                    break;
                
                default:
                    echo '<br />Predikat nilai : Memuaskan';
                    break;
            }
        } else {
            echo 'Form belum disubmit';
        }
        
        ?>
    </div>
</body>
</html>


</div>
<?php
 include_once 'footer.php';
?>