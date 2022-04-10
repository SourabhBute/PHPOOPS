<?php 
abstract class Bank {
    protected $amount;
    protected $pin;

    public function bankInfo() {
        echo "Display bank information";
    }

    abstract protected function  credit($credit);
    abstract protected function  debit($debit);
    abstract protected function  balance();
}

class Customer extends Bank {

    public function credit($credit) {
        $this->amount += $credit;
    }

    public function debit($debit) {
        $this->amount += $debit;
    }

    public function balance() {
        echo "Balance amount is = ".$this->amount;
    }
}

$obj =  new Customer();
$obj -> credit(5000);
$obj -> balance();
?>