<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
 <div class="content-wrapper">
<?php
    require_once "clas_persegipanjang.php";
    $persegi1 = new PersegiPanjang(10,15);
    $persegi2 = new PersegiPanjang(18,9);
    echo "<br> Luas Persegi Panjang Ke - 1 : " . $persegi1->luasPersegiPanjang();
    echo "<br> Luas Persegi Panjang Ke - 2 : " . $persegi2->luasPersegiPanjang();

    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi1->kllPersergiPanjang();
    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi2->kllPersergiPanjang();
?>

<?php
 include_once 'footer.php';
?>