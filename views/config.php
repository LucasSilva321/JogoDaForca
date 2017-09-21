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
	$config['dbname'] = "epiz_20722867_sapo";
	$config['host'] = "sql313.epizy.com";
	$config['dbuser'] = "epiz_20722867";
	$config['dbpass'] = "ZVPXNoJT2K";
}
?>