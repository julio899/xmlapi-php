<?php
#importacion de las clase principal
include '../xmlapi.php';

//Instacio un objeto xmlapi con las variables definidas en config.php
$xmlapi = new xmlapi(SERVER_IP);
$xmlapi->password_auth(ROOT_USER,ROOT_PASSWORD);

$xmlapi->set_debug(1);
//Creacion de Cuentas paso los parametros de la nueva cuenta a registrar en mi panel WHM
$acct = array( username => "someuser", password => "pass123", domain => "thisdomain.com", plan =>"user_plan_diamond", contactemail=>"user@gmail.com",language=>"es");
print $xmlapi->createacct($acct);
//en caso de algun error se generara un archivo de error en el directorio en donde se ejecuto el script

