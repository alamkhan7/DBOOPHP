<?php 

class Alam{
	public function __construct($name){
		$this->name = $name ;
	}
	public function get(){
		return $this->name;
	}
}

$obj = new Alam("Alam");
echo $obj->get();


?>