<?php

/*
*	Server requests shared validation
*/
class Validation {

	/*
	*	Check valid db primary key
	*/
	public function isValidPrimaryKey( $value ) {

		if ( (int)$value != 0 )
			return true;
		else
			return false;
		
	}
	
}

?>