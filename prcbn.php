<!DOCTYPE html>
<html>
<body>

<?php
//class/object
class Toko {

//access modifier
  public $name;
  public $color;

//constuktor
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }

//destruktor
  function __destruct() {
    echo "Mereka menyukai {$this->name}."; 
    echo "<br>";
    echo "<hr>";
  }
 
  public function susu() {
    echo "Mereka menyukai {$this->name} yang berwarna {$this->color}."; 
    echo "<br>";
    echo "<hr>";
  }
}

//inheritance
class Jenis extends Toko {
  public function message() {
    echo "Toko saya menjual 3 jenis hewan"; 
    echo "<br>";
    echo "<hr>";
  }
}

//static method
class Banyaknya {
  public static function harga() {
    echo "Harga kucing adalah 200.000";
    echo "<br>";
    echo "Harga Anjing adalah 300.000";
    echo "<br>";
    echo "Harga tikus adalah 50.000";
    echo "<hr>";
  }
}

//static properties
class harga {
  public static $value = 20000;
}

$apple = new Toko("Susu","Putih");
$Jenis = new Jenis("Susu", "Putih");
$Jenis->message();
$Jenis->susu();

Banyaknya::harga();

echo harga::$value;

//iretables
function getIterable():iterable {
  return [" adalah harga", " makanan yang", " disukai oleh"." ke tiga hewan di toko kami"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}

//interface
interface hewan {
  public function suara();
}

class kucing implements hewan {
  public function suara() {
    echo "<hr>";
    echo " Kucing di toko kami bersuara Meow ";
    echo "<br>";
  }
}

class anjing implements hewan {
  public function suara() {
    echo "Anjing di toko kami bersuara Bark ";
    echo "<br>";
  }
}

class tikus implements hewan {
  public function suara() {
    echo "Tikus toko di kami bersuara Squeak";
    echo "<br>";
    echo "<hr>";
  }
}

$kucing = new kucing();
$anjing = new anjing();
$tikus = new tikus();
$hewan = array($kucing, $anjing, $tikus);

foreach($hewan as $hewan) {
  $hewan->suara();
}
?>
 
</body>
</html>
