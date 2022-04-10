<?php 
abstract class bank {
abstract protected function id_proof($id);
    
}
class HDFC extends bank {
    public function id_proof($id) {
        echo  "id proof is ".$id ;
    }
}

class ICIC extends bank {
    public function id_proof($id) {
        
    }
}

$obj = new HDFC();
$obj->id_proof("addhar");


?>