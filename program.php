<?php 

class Tv {
	public $model = "xyz";
	public $volume = 1;

	function  volumeUp() {
		return $this->volume++;
	}

	function volumeDown() {
		$this->volume--;
	}
}


$one_tv = new TV();

//var_dump($one_tv);

$one_tv->volumeUp();




?>