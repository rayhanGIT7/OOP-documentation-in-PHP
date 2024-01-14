<!DOCTYPE html>
<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<body>

<?php
class Employee {
  // Properties
  public $name;
  public $email;
  public $phoneNumber;
  public $EmployeeID;
  public $Address;

  // Methods using construct

  public function __construct($name, $email, $phoneNumber, $EmployeeID, $Address) {
    $this->name = $name;
    $this->email = $email;
    $this->phoneNumber = $phoneNumber;
    $this->EmployeeID = $EmployeeID;
    $this->Address = $Address;
}

// Method to get details
public function get_details() {
    
 echo  ' <table class="table">
  <thead>
    <tr>
      <th scope="col">Employee Name:</th>
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">EmployeeID</th>
      <th scope="col">Employee Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">'.$this->name.'</th>
      <td>'.$this->email.'</td>
      <td>'.$this->phoneNumber.'</td>
      <td>'.$this->EmployeeID.'</td>
      <td>'.$this->Address.'</td>
    </tr>
    
  </tbody>
</table>';

   
}
}

$rayhan = new Employee('Rayhan', 'rayhan@gmail.com', '014623125', 10001, 'Rajshahi');
$hossen =new Employee('Hossen','hossen@gmail.com','013216523',10002,'Naogaon');


 $rayhan->get_details();

 $hossen->get_details();
?>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

