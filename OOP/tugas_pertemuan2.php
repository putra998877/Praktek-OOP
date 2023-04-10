<?php
class Hewan {
  public $jenis;
  public $kemampuan = array();
  
  public function __construct($jenis, $kemampuan) {
    $this->jenis = $jenis;
    $this->kemampuan = $kemampuan;
  }
}

class Monyet extends Hewan {
  public function __construct() {
    parent::__construct("Monyet", array("Berjalan", "Makan", "Bersuara"));
  }
  
  public function berkendara() {
    echo "Monyet sedang berkendara sepeda";
  }
}

$monyet = new Monyet();
echo $monyet->jenis; // Output: Monyet
echo "<br>";
echo "Kemampuan: " . implode(", ", $monyet->kemampuan); // Output: Kemampuan: Berjalan, Makan, Bersuara
echo "<br>";
$monyet->berkendara(); // Output: Monyet sedang berkendara sepeda
?>