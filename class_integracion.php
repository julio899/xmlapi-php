<?php
require_once('xmlapi.php');
class integracion{
	private $xmlapi=null;
public function __construct(){
	$this->xmlapi = new xmlapi(SERVER_IP);
	$this->xmlapi->password_auth(ROOT_USER,ROOT_PASSWORD);
}//fin de constructor

/* Esta funcion recibe la cuenta con un arreglo con el formato
** Establecido en WHM API https://documentation.cpanel.net/display/SDK/WHM+API+1+Functions+-+createacct
** un ejemplo podria ser una array con el siguiente formato 
$acct = array( 
				username => "someuser", 
				password => "pass123", 
				domain => "thisdomain.com", 
				plan =>"user_plan_diamond", 
				contactemail=>"user@gmail.com",
				language=>"es"
			);
*/
public function create_account($account=""){
	$this->xmlapi->createacct($account);
}//fin de funcion create_account

}//fin de clase