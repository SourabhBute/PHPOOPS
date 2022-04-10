<?php 
// Encapsulation in php  // Getter method // Setter method 

class bankaccount {
    private $accname;
    private $accno;
    private $balance;

    public function bankaccount($accname, $accno) {
        $this->accname = $accname;
        $this->accno = $accno;
        $this->balance = 0;
    }

    public function deposit($amt) {
        if($amt < 5000) {
            echo "Amount is less than 5000";
        } else {
            $this->balance = $amt;
        }        
    }

    public function getBalance() {
        return $this->balance;
    }

    public function withdraw() {
        echo "withdraw method called";
    }
}

$obj = new bankaccount('ramesh', 12345);

$obj->deposit(8000);
echo  $obj->getBalance();
echo "<pre>";
print_r($obj);
?>