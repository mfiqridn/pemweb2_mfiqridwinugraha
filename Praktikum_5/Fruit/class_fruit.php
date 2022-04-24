<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->warna = $color;
    }
    public function intro(){
        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{ //extends adalah keyword untuk inherite atau memasukkan class turunan dari class seblumnya.
    public function pesan(){
        echo "Aku strawberry atau pisang?";
    }
}
$buah = new Strawberry('strawberry','merah');
$buah->pesan();
$buah->intro();
?>