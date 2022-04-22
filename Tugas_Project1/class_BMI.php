<?php
require "class_pasien.php";

trait BMI
{
    public $berat, $tinggi;

    public function nilaiBMI()
    {
        return number_format((float)$this->berat / ($this->tinggi / 100) ** 2, 1, '.', '');
    }

    public function statusBMI($nilai)
    {
        if ($nilai <= 18.4) {
            return "Kekurangan berat badan";
        } elseif ($nilai >= 18.5 && $nilai <= 23.9) {
            return "Normal (ideal)";
        } elseif ($nilai >= 24 && $nilai <= 26.9) {
            return "Kelebihan berat badan";
        } elseif ($nilai >= 27 && $nilai <= 29.9) {
            return "Obesitas 1";
        } elseif ($nilai >= 30) {
            return "Obesitas 2";
        }
    }
}

class BMIPasien extends Pasien
{
    use BMI;
    public $bmi;
    public $tanggal;

    public function __construct($id, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat)
    {
        parent::__construct($id, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->tanggal = date("Y-m-d");
    }
}

?>