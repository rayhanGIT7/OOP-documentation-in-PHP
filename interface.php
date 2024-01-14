<!DOCTYPE html>
<html>
<body>

<?php
// Interface definition
interface information {
  public function details();
}

// Class definitions
class Laptop implements information {
  public function details() {
   
   
    ?>
<button type="button" onclick='document.getElementById("laptop").innerHTML = " A laptop is a personal computer that can be easily  moved and used   in a variety of locations. Most laptops are designed to have all of the functionality of a desktop computer, which means     they can generally run the same software and open the same types of files"'>Laptop Details</button>
   

    <?php
      echo '<p id="laptop"></p>';
  }
}

class  Mobile  implements information {
  public function details(){

    ?>
<button type="button" onclick='document.getElementById("mobile").innerHTML = "A mobile phone (or cellphone) is a portable telephone that      can make and receive calls over a radio frequency link while the user is moving within a     telephone service area, as opposed to a fixed-location phone (landline phone)."'>Mobile Details</button>



    <?php 
   echo '<p id="mobile"></p>';
  }
}



// Create a list of animals
$laptop= new Laptop();
$mobile= new Mobile();

$product = array($laptop,$mobile);

// Tell the animals to make a sound
foreach($product as $data) {
  $data->details();
}
?>
 
</body>
</html>
