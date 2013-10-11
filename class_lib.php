<?php
class person{

	var $name;

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