<?php

require_once( '/repository/ModelService.php' );

/*
*	Entity Service Shared Core
*/
Abstract class AbstractService implements ModelService {

	/*
	*	@Overide
	*/
	public function getAll() {

		return $this->repository->getAll();
		
	}
	
	/*
	*	@Overide
	*/
	public function getOne( $id ) {

		return $this->repository->getOne( $id );
		
	}
	
}

?>