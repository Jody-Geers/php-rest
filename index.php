<?php

/*
*	Sort request url
*/
$request = explode( '/', $_SERVER['REQUEST_URI'] );
	array_splice( $request, 0, 1 );

/*
*	Routing
*/
if ( !$request[0] ) return;

require_once( 'controllers/' . $request[0] . 'Controller.php' );

$Controller = $request[0] . 'Controller';

$controller = new $Controller();

if( !empty( $request[1] ) ) return $controller->$request[1]( array(
	'method' => $_SERVER['REQUEST_METHOD'],
	'request' => $request
));

?>