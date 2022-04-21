<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
 <div class="content-wrapper">
<?php
require_once 'class_BMI.php';
require_once 'class_pasien.php';
require_once 'class_BMIPasien.php';

$psn1 = new Pasien("Ahmad","Jakarta","21-09-1999","L");
$psn1->gender="L";
$psn1->tmp_lahir="Jakarta";
$psn1->tgl_lahir="1999-09-21";

$psn2 = new Pasien("Rina","Tangerang","22-06-1999","P");
$psn2->gender="P";
$psn2->tmp_lahir="Tangerang";
$psn2->tgl_lahir="1999-06-22";

$psn3 = new Pasien("Lutfi","Bekasi","21-09-1998","L");
$psn3->gender="L";
$psn3->tmp_lahir="Bekasi";
$psn3->tgl_lahir="1998-09-21";

$bmi1 = new BMI("69.8","169","Ahmad");
$bmi2 = new BMI("55.3","165","Rina");
$bmi3 = new BMI("45.2","171","Lutfi");

$bmip1 = new BMIPasien("P001","Ahmad","L","2022-01-10","24.7","Kelebihan Berat Badan",$psn1);
$bmip1->berat="69.8";
$bmip1->tinggi="169";
$bmip2 = new BMIPasien("P002","Rina","P","2022-01-10","20.3","Normal(ideal)",$psn2);
$bmip2->berat="55.3";
$bmip2->tinggi="165";
$bmip3 = new BMIPasien("P003","Lutfi","L","2022-01-11","15.4","Kekurangan Berat Badan",$psn3);
$bmip3->berat="45.2";
$bmip3->tinggi="171";

$ar_data = [$bmip1,$bmip2,$bmip3];

?>
<h1>Data BMIPasien</h1>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th><th>Tanggal Periksa</th><th>Kode Pasien</th><th>Nama pasien</th>
            <th>Gender</th><th>Berat(kg)</th><th>Tinggi(cm)</th><th>Nilai BMI</th><th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
            foreach($ar_data as $obj){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->tanggal?></td>
                <td><?=$obj->id?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->gender?></td>
                <td><?=$obj->berat?></td>
                <td><?=$obj->tinggi?></td>
                <td><?=$obj->nilai?></td>
                <td><?=$obj->status?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
</table>

<?php
 include_once 'footer.php';
?>



