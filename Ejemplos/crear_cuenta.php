<?php #aun en desarrollo
require_once('../class_integracion.php');
# SEGUNDA FORMA AUN TRABAJANDO EN ELLA
$app=new integracion();
//ejemplo de una posible cuenta a registrar
$acct = array( 
				username => "someuser", 
				password => "pass123", 
				domain => "thisdomain.com", 
				plan =>"user_plan_diamond", 
				contactemail=>"user@gmail.com",
				language=>"es"
			);
#aplico el registro
$app->create_account($acct);//Tratando de simplificar y encapsular al maximo los procesos
