<!DOCTYPE html>
<html>
<body>

<?php
// Implementation of the trait
trait getData {
    public $number1;
    public $number2;

    // Constructor
    public function __construct($number1, $number2) {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

   
   
}
class Sum{
    use getData;
    public function result()
    {
        $sum= $this->number1 + $this->number2;
        echo "The result (Sum):".$sum."<br>";
    }
}
class Min {
    use getData;
    public function result() {
        $min = $this->number1 - $this->number2;
        echo "The result (Min): " . $min . "<br>";
    }
}


class Mul {
    use getData;

    public function result() {
        $mul = $this->number1 * $this->number2;
        echo "The Result (Mul): " . $mul . "<br>";
    }
}

class Div {
    use getData;

    public function result() {
        $div = $this->number1 / $this->number2;
        echo "The Result (Div): " . $div . "<br>";
    }
}

// Creating objects and using them
$sum= new Sum(122,255);
$min = new Min(100, 5);
$mul = new Mul(100, 5);
$div = new Div(100, 50);

$values = array($sum,$min, $mul, $div);

foreach ($values as $data) {
    $data->result();
}
?>

</body>
</html>
