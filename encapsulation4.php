<?php 

class Bank {

    private $amount;
    private $pin;

    private function  credit($amt) {
        $this->amount += $amt;
    }

    private function  debit($deb) {
        $this->amount -= $deb;
    }

    private function  balance() {
        echo "Amount is ".$this->amount;
    }

    public function login($pin) {
        if ($pin == 123) {
            $this->credit(2000);
            $this->balance();
        } else {
            echo  "Invalid pin enter";
        }

    }


}

// $obj =  new Bank();
// $obj -> credit(1000);
// $obj -> balance();
// $obj -> debit(100);
// $obj-> balance();

$obj = new Bank();
$obj ->login(1234);



?>