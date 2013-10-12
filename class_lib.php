<?php
class person{

	var $name;

	/*public $height;

	protected $social_insurance;

	private $pinn_number;*/

	function __construct($persons_name) {
		$this->name=$persons_name;
	}

	/*private function get_pinn_number()){
		return $this->$pinn_number;
	}

	function set_name($new_name){

		$this->name = $new_name;
	}*/

	function get_name() {
		return $this->name;
	}
	/* protected methods and properties restrict access to those 
	   elements*/
	protected function set_name($new_name){
		if (name != "Jimmy Two Guns"){
		$this->name = strtoupper($new_name);
		}
	}
}
// 'extends' is the keyword that enables inheritance
class employee extends person {

	protected function set_name($new_name){
		if ($new_name == "Stephan Lamp") {
			$this->name = $new_name;
		}
		else if($new_name == "Johnny Fingers"){
			parent::set_name($new_name);
		
		/* could also be
		else if($new_name == "Johnny Fingers") {
 			person (name of parent class)::set_name($new_name);
		}*/

		}
	}
	
	function __construct($employee_name) {
		$this->set_name($employee_name);
	}
} 

?>