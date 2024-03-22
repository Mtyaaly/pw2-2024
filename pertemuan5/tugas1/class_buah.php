<?php

class Buah{
    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama,$warna,$rasa){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }

    public function getinfo(){
        return "Buah:{$this->nama}, Warna:{$this->warna}, Rasa:{$this->rasa}";
    }
}
?>