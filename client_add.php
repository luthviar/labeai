<?php
	require_once('lib/nusoap.php');
	$client = new nusoap_client('http://www.dneonline.com/calculator.asmx?WSDL', true);
	$error = $client->getError();

	if ($error) {
    	echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
	}

	$response = $client->call('Add', array('intA'=> 99, 'intB'=> 3));


	echo var_export($response, true);
?>