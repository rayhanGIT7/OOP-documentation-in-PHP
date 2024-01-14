<!DOCTYPE html>
<html>
<body>

<?php
// Parent class
abstract class Car {
  public $name;
  public $model;
  public $cc;
  public function __construct($name,$model,$cc) {
    $this->name = $name;
    $this->model = $model;
    $this->cc=$cc;

  }
  abstract public function intro() : string; 
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "I'm an $this->name. My model is $this->model, and CC is $this->cc!";

  }
}

class Volvo extends Car {
  public function intro() : string {
    return "I'm an $this->name. My model is $this->model, and CC is $this->cc!";
 
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "I'm an $this->name. My model is $this->model, and CC is $this->cc!";

  }
}

// Create objects from the child classes
$audi = new audi("Audi","M2023",2000);
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo","L2022",2200);
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen","G2012",1500);
echo $citroen->intro();
?>
 
</body>
</html>
