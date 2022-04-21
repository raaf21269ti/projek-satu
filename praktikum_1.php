<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
 <div class="content-wrapper">
<?php

// variable user
$keranjang = 1;

$keranjang = 5;

echo 'variable user : ' . $keranjang;

echo '<br>';

// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo '<br>';

// variable konstan
define('JARAK', 10);

echo JARAK;

// Array
$arr_buah = ['jeruk', 'apel', 'mangga', 'buah naga', 'duku'];
$count_buah = count($arr_buah); // menghitung jumlah elemen dalam array
echo $count_buah . '<br>';

// Looping for
for ($index=0; $index < $count_buah; $index++) {
    echo $index . ' ' . $arr_buah[$index];
    echo '<br>';
}

foreach ($arr_buah as $index => $value) {
    echo $index . ' ' . $value;
    echo '<br>';
}

// Array Sort Arsort
$arr_buah = ['siti', 'aminah', 'abdul', 'muttalib'];
$count_buah = count($arr_buah);

// sort($arr_buah); // silahkan dihilangkan komennya
// arsort($arr_buah); // silahkan dihilangkan komennya
foreach ($arr_buah as $index => $value) {
    echo $index . ' ' . $value;
    echo '<br>';
}

// Array Pop
$tims = ['heru', 'jaki', 'ali', 'udin', 'samsul'];
array_pop($tims);
foreach ($tims as $index => $value) {
    echo $value;
    echo '<br>';
}

// Array Push
$tims = ['heru', 'jaki', 'ali', 'udin', 'samsul'];
array_push($tims, 'wati', 'ronaldo');
foreach ($tims as $index => $value) {
    echo $value;
    echo '<br>';
}

// Array Shift
$tims = ['heru', 'jaki', 'ali', 'udin'];
array_shift($tims);
foreach ($tims as $index => $value) {
    echo $value;
    echo '<br>';
}

// Array Unshift
$tims = ['heru', 'jaki', 'ali'];
array_unshift($tims, 'joko', 'wati', 'siti', 'ardan');
foreach ($tims as $index => $value) {
    echo $index . ' ' . $value;
    echo '<br>';
}

// Array Data
$ns1 = ['id'=>1,'nim'=>'01101', 'uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121', 'uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130', 'uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134', 'uts'=>90,'uas'=>91,'tugas'=>82];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>
<br>
<br>
<table border="1" width="100%">
    <thead>
        <th>Nomor</th>
        <th>nim</th>
        <th>uts</th>
        <th>uas</th>
        <th>tugas</th>
        <th>nilai akhir</th>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $value) {
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$value['nim'].'</td>';
            echo '<td>'.$value['uts'].'</td>';
            echo '<td>'.$value['uas'].'</td>';
            echo '<td>'.$value['tugas'].'</td>';
            $nilai_akhir = ($value['uts'] + $value['uas']+$value['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;

        }
        ?>
    </tbody>
</table>

<?php
 include_once 'footer.php';
?>