<?php

/*
*	Entity Model
*/
class User {

	public $id;
	public $name;
	public $surname;
	
	public function User( $id = null, $name = null, $surname = null ) {
	
		$this->id = $id;
		$this->name = $name;
		$this->surname = $surname;
		
	}
	
	public function setId( $id ) {
	
		$this->id = $id;
	
	}
	
	public function setName( $name ) {
	
		$this->name = $name;
	
	}
	
	public function setSurname( $surname ) {
	
		$this->surname = $surname;
	
	}
	
}

?>