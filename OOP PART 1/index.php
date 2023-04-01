<?php

class Product {
    public $name;
    public $price;
    public $discount;

    function set_Name($name) {
        $this->name = $name;
    }
    function get_Name() {
        return $this->name;
    }

    function set_Price($price) {
        $this->price = $price;
    }
    function get_Price() {
        return $this->price;
    }

    function set_Discount($discount) {
        $this->discount = $discount;
    }
    function get_Discount() {
        return $this->discount;
    }
    public function message() {
        echo "Nama Produk yaitu {$this->name} dan harganya {$this->price} <br>";
    }
}

class CDMusic extends Product {
    public $artist;
    public $genre;
    
    function get_Artist() {
        return $this->artist;
    }
    function set_Artist($new_artist) {
        $this->artist = $new_artist;
    }

    function get_Genre() {
        return $this->genre;
    }
    function set_Genre($new_genre) {
        $this->genre = $new_genre;
    }

    function set_Price($price) {
        $this->price = $price;
    }
    function get_Price() {
        $price = $this->price;
        $tax = ($this->price * (10/100));
        $discount = ($this->price * (5/100));
        return ($price + $tax) - $discount;
    }

    function set_Discount($discount) {
        $this->discount = $discount;
    }

}

class CDRack extends Product {
    public $capacity;
    public $model;

    function get_Capacity() {
        return $this->capacity;
    }
    function set_Capacity($new_capacity) {
        $this->capacity = $new_capacity;
    }

    function get_Model() {
        return $this->model;
    }
    function set_Model($new_model) {
        $this->model = $new_model;
    }

    function get_Price() {
        $price = $this->price;
        $tax = ($this->price * (15/100));
        return $price + $tax;
    }
}

$cobaproduk = new Product();
$cobaproduk->set_Name("kaset");
$cobaproduk->set_Price(20000);

$cobaproduk->message();

$cobamusik = new CDMusic();
$cobamusik->set_Name("musik");
$cobamusik->set_Price(20000);
echo "Nama Produk yaitu ". $cobamusik->get_Name() ." dan harganya " . $cobamusik->get_Price() . "<br>";

$cobarack = new CDRack();
$cobarack->set_Name("rack");
$cobarack->set_Price(20000);
echo "Nama Produk yaitu ". $cobarack->get_Name() ." dan harganya " . $cobarack->get_Price() . "<br>";
?>