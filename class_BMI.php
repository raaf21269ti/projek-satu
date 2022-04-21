<?php
require_once 'class_person.php';

class BMI extends Person{
    public $berat;
    public $tinggi;
    public $nama;

    function __construct($berat,$tinggi,$nama){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->nama = $nama;
    }
}