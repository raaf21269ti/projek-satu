<?php
class Pasien{
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $gender;

    function __construct($nama,$tmp_lahir,$tgl_lahir,$gender){
        $this->nama = $nama;
        $this->tempatlahir = $tmp_lahir;
        $this->tanggallahir = $tgl_lahir;
        $this->gender = $gender;
    }
}