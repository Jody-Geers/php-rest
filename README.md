# php-rest

  RESTful web service, talks to mysql, returns JSON.
  
  Written in PHP for fun and because PHP is pretty darn nifty.
  
  A node.js example i wrote here : https://github.com/Jody-Geers/node-rest
  =-)

## Installation

  There is a class in the config directory to get a connection.

	const LINK = 'localhost:3306';
	const DB = 'test';
	const UN = 'root';
	const PW = 'root';

## API

	// GET all of a type
	http://localhost:8080/User/get
	
	// GET one of a type by id
	http://localhost:8080/User/get/1

## Note

  This is a template to be expanded upon, its not compleated, 
  but theres enougth to sink your teeth into and get going.
  for new datatypes, i would start at the controller, then
  follow the yellow brick stack exceptions.
  
  At the index / routing level you can add extra layers / logic, such as security.
  
## License

  MIT
