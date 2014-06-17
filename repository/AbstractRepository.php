<?php

require_once( 'ModelService.php' );
require_once( '/config/Config.php' );

/*
*	Entity Repository Shared Core
*/
Abstract class AbstractRepository implements ModelService {

	private $_dbConnection;
	
	public function AbstractRepository() {
	
		$_config = new Config();
	
		$this->_dbConnection = mysqli_connect( $_config::LINK, $_config::UN, $_config::PW, $_config::DB );
	
	}

	/*
	*	@Overide
	*/
	public function getAll() {
		
		$returnArr = array();
		
		$sql = "SELECT * FROM " . strtolower( $this->model );
		
		$returnArr = $this->createModelArrFromResultSet( 
			mysqli_query( $this->_dbConnection, $sql ) 
		);
		
		return $returnArr;
		
	}
	
	/*
	*	@Overide
	*/
	public function getOne( $id ) {
		
		$returnArr = array();
		
		$sql = "SELECT * FROM " . strtolower( $this->model ) . " WHERE " . strtolower( $this->model ) . "_id = " . (int)$id;
		
		$returnArr = $this->createModelArrFromResultSet( 
			mysqli_query( $this->_dbConnection, $sql ) 
		);
		
		// not found
		if ( empty($returnArr[0]) ) {
		
			return;
			
		}
		
		return $returnArr[0];
		
	}
	
	/*
	*	helper - creates array of model objects
	*/
	private function createModelArrFromResultSet( $resultSet ) {
	
		$returnArr = array();
		
		while( $row = mysqli_fetch_array( $resultSet ) ) {
			
			// has to be set at child class
			$entity = new $this->model();

			foreach( $row as $key => $value ) {
			
				$arr = explode( '_', $key );
				
				if ( !empty( $arr[1] ) ) {
				
					$function = 'set' . ucfirst( $arr[1] );
					
					$entity->$function( $value );
					
				}

			}
			
			array_push( $returnArr, $entity );
			
		}
		
		return $returnArr;
		
	}
	
}

?>