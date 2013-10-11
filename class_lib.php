<?php
class person{

	var $name;

	public $height;

	protected $social_insurance;

	private $pinn_number;

	function __construct($persons_name) {
		$this->name=$persons_name;
	}

	function set_name($new_name){

		$this->name = $new_name;
	}

	function get_Name() {
		return $this->name;
	}
}

class employee extends person {
	
	function __construct($employee_name) {
		$this->set_name($employee_name);
	}
} 

