<?php
    /*Monyet merupakan salah satu dari jenis Hewan, Monyet mempunyai kemampuan
    untuk Berjalan, Makan dan Bersuara, tapi suatu saat Monyet apabila dilatih akan bisa
    Berkendara seperti naik sepeda yang tidak dipunyai oleh hewan lainnya. */

abstract class Hewan {
    abstract public function berjalan();
    abstract public function makan();
    abstract public function bersuara();
    
}

class Monyet extends Hewan{
    public function berjalan() {
        
    }
    public function makan() {

    }
    public function bersuara() {

    }
    function berkendara() {
        echo "berkendara";
    }
}
?>