<?php

require_once( 'AbstractService.php' );
require_once( '/repository/UserRepository.php' );

/*
*	Entity Service Layer
*/
class UserService extends AbstractService {

	public $model;
	public $repository;
	
	public function UserService() {
		
		$this->repository = new UserRepository();
		
	}
	
}

?>