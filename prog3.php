<?php 
class BankAccount {

    public $accName;
    public $accNo;
    public $balance;

    public function BankAccount($accno, $accname, $balance) {
        $this->accName = $accname;
        $this->accNo = $accno;
        $this->balance = $balance;     
    }

    public function deposit() {
        
    }

    public function withdraw() {

    }
}

$ramesh = new bankaccount(12345, 'test', 12000);

  // $ramesh->accName = "ramesh rai"; 
  echo "<pre>";
  print_r($ramesh);
 

// echo "<br/>";

// echo  $obj->accNo ." ";
// echo  $obj->accName ." ";
// echo  $obj->balance ;
?>