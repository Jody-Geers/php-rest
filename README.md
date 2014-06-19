# php-rest

  RESTful web service, talks to mysql, returns JSON.
  
  Written in PHP because i see far too many devs looking down on PHP,
  when its not PHP thats the problem its the devs writing it.
  
  As far as REST stuffs goes i would go for a node.js option but
  the deployment of which costs big monney for a project which
  might not even be earning any income at all, hosting PHP is cheap,
  when your company grows than you can rethink of your REST service
  environment / language, just keep the same API. =-)

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
  
## License

  MIT
