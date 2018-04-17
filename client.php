<?php
	require_once('lib/nusoap.php');
	$client = new nusoap_client('http://localhost:8000/server.php');
	
	$response = $client->call('get_message', array("name"=>"Harry"));
	echo $response;
?>