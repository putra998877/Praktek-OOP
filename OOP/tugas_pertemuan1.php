<?php

class Product {
  protected $name;
  protected $price;
  protected $discount;

  public function __construct($name, $price, $discount) {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getDiscount() {
    return $this->discount;
  }
}

class CDMusic extends Product {
  protected $artist;
  protected $genre;

  public function __construct($name, $price, $discount, $artist, $genre) {
    parent::__construct($name, $price, $discount);
    $this->artist = $artist;
    $this->genre = $genre;
  }

  public function getPrice() {
    return parent::getPrice() * 1.1;
  }

  public function getDiscount() {
    return parent::getDiscount() * 1.05;
  }

  public function getArtist() {
    return $this->artist;
  }

  public function getGenre() {
    return $this->genre;
  }
}

class CDRack extends Product {
  protected $capacity;
  protected $model;

  public function __construct($name, $price, $discount, $capacity, $model) {
    parent::__construct($name, $price, $discount);
    $this->capacity = $capacity;
    $this->model = $model;
  }

  public function getPrice() {
    return parent::getPrice() * 1.15;
  }

  public function getCapacity() {
    return $this->capacity;
  }

  public function getModel() {
    return $this->model;
  }
}

// contohnya :
$cdMusic = new CDMusic("Album A", 100000, 0.2, "Artist A", "Pop");
echo "Name: " . $cdMusic->getName() . "\n";
echo "Price: " . $cdMusic->getPrice() . "\n";
echo "Discount: " . $cdMusic->getDiscount() . "\n";
echo "Artist: " . $cdMusic->getArtist() . "\n";
echo "Genre: " . $cdMusic->getGenre() . "\n\n";

$cdRack = new CDRack("CD Rack A", 500000, 0.1, 50, "Model A");
echo "Name: " . $cdRack->getName() . "\n";
echo "Price: " . $cdRack->getPrice() . "\n";
echo "Discount: " . $cdRack->getDiscount() . "\n";
echo "Capacity: " . $cdRack->getCapacity() . "\n";
echo "Model: " . $cdRack->getModel() . "\n";

?>