<?php

require_once 'class_buah.php';

$buah1 = new Buah("Apel","Merah","Manis");
$buah2 = new Buah("Jeruk","Oranye","Asam");
$buah3 = new Buah("Pisang","Kuning","Manis");

$buahList=array($buah1,$buah2,$buah3);

foreach ($buahList as $buah) {
    echo $buah->getinfo(). "<br>";
}

?>