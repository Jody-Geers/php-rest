<?php

require_once( 'Controller.php' );
require_once( '/service/UserServiceImpl.php' );
require_once( '/validation/Validation.php' );

/*
*	@RequestMapping( value="/User" )
*/
class UserController implements Controller {

	private $_userService = null;
	private $_validation = null;
	
	public function UserController () {
	
		$this->_userService = new UserService();
		$this->_validation = new Validation();
		
	}

	/*
	*	@Overide
	*/
	public function get( $args ) {
		
		$returnToClient;
			
		if( $args['method'] != 'GET' ) return;
		
		$id = ( !empty( $args['request'][2] ) )? $args['request'][2] : null;
		
		// return single obj if id given else array of all
		if ( $id ) {
			
			// validation error
			if ( $this->_validation->isValidPrimaryKey( $id ) == false ) {
				
				header( 'HTTP/1.1 400 Bad Request', true, 400 );
				
				return;
				
			}
			
			// invalid request primary key
			$returnToClient = $this->_userService->getOne( $id );
			
			if ( $returnToClient == null ) {
			
				header( 'HTTP/1.1 404 Not Found', true, 404 );
				
				return;
				
			}
			
		} else {

			$returnToClient = $this->_userService->getAll();
			
		}
		
		// sucessful request return JSON results
		echo json_encode( $returnToClient );

	}
	
}

?>