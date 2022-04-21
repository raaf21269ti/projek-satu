<?php
  class bmipasien {

    public $nama,
        $berat,
        $tinggi,
        $umur,
        $jeniskelamin;
    public function hasilBMI()
    {
        return "<b>Nama : $this->nama <br><br>
                Berat Badan : $this->berat <br><br>
                Tinggi Badan : $this->tinggi <br><br>
                Umur : $this->umur <br><br>
                Jenis Kelamin : $this->jeniskelamin <br><br>";
    }
    public function statusBMI($BMI)
    {
      if ($BMI < 18.5) {
         return "<td>kekurangan Berat Badan</td>";
       } else if ($BMI >= 18.5 && $BMI <= 24.9) {
         return "<td>Normal (ideal)</td>";
       } else if ($BMI >= 25.0 && $BMI <= 29.9) {
         return "<td>kelebihan Berat Badan</td>";
       } else {
         return "<td>kegemukan (obesitas)</td>";
       } 
    }
}
if(isset($_GET["nama__lengkap"])){
    $bmi = new bmipasien;
    $bmi->nama = $_GET["nama__lengkap"];
    $bmi->berat = $_GET["berat__"];
    $bmi->tinggi = $_GET["tinggi__"];
    $bmi->umur = $_GET["umur__"];
    $bmi->jeniskelamin = $_GET["jenis__kelamin"];
} 
$pasien1 = ['nama' => 'Ahmad', 'kelamin' => 'Laki-laki', 'umur' => 20, 'berat' => 69.8, 'tinggi' => 169];
$pasien2 = ['nama' => 'Rina', 'kelamin' => 'Perempuan', 'umur' => 19, 'berat' => 55.3, 'tinggi' => 165];
$pasien3 = ['nama' =>'Lutfi', 'kelamin' => 'Laki-laki', 'umur' => 18, 'berat' => 45.2, 'tinggi' => 171];

$ar_pasien = [$pasien1, $pasien2, $pasien3];
?>
      

