<?php
    require_once "class_PersegiPanjang.php";
    $persegiPanjang1 = new PersegiPanjang( 14,6 );
    $persegiPanjang2 = new PersegiPanjang( 18, 8 );

    echo "<br/>Luas Persegi Panjang I ".$persegiPanjang1->getLuas();
    echo "<br>Luas Persegi Panjang II ".$persegiPanjang2->getLuas();
    
    echo "<br>Keliling Persegi Panjang I ".$persegiPanjang1->getKeliling();
    echo "<br>Keliling Persegi Panjang II ".$persegiPanjang2->getKeliling();
?>