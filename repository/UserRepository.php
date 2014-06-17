<?php

require_once( 'AbstractRepository.php' );
require_once( '/model/User.php' );

/*
*	Entity Repository Layer
*/
class UserRepository extends AbstractRepository {

	public $model = 'User';
	
}

?>