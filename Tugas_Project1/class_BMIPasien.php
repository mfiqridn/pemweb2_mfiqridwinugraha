<?php

class BMIPasien{
    public  $id;
    public  $tanggal;
    public  $pasien;
    pubLic  $BMI;

function __construct($tanggal, $pasien, $BMI){
    $this ->tanggal=$tanggal;
    $this ->pasien=$pasien;
    $this ->BMI=$BMI;
    }
}

?>