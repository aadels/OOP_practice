<?php
class person{

	var $name;

	function set_name($new_name){

		$this->name = $new_name;
	}

	function get_Name() {
		return $this->name;
	}
}