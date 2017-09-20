<?php
require 'environment.php';

global $config;
$config = array();

if(ENVIRONMENT == "development"){
	$config['dbname'] = "sapo";
	$config['host'] = "localhost";
	$config['dbuser'] = "root";
	$config['dbpass'] = "";
}
else{
	//Informaçoes do servidor externo
	$config['dbname'] = "sapo";
	$config['host'] = "localhost";
	$config['dbuser'] = "root";
	$config['dbpass'] = "";
}
?>