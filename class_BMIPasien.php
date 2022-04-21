<?php
require_once 'class_BMI.php';
require_once 'class_pasien.php';

class BMIPasien{
    public $id;
    public $nama;
    public $tanggal;
    public $nilai;
    public $statusBMI;
    public $pasien;

    function __construct($id,$nama,$gender,$tanggal,$nilai,$statusBMI,$pasien){
        $this->id = $id;
        $this->gender = $gender;
        $this->nama = $nama;
        $this->tanggal = $tanggal;
        $this->nilai = $nilai;
        $this->status = $statusBMI;
        $this->pasien = $pasien;
    }
}