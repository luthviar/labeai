<?php
	//import library nusoap
	require_once('lib/nusoap.php');

	//construct new object nusoap_client to call the SOAP service calculator
	$client = new nusoap_client('http://www.dneonline.com/calculator.asmx?WSDL', true);
	$error = $client->getError();

	//handling if the constructor of service is error
	if ($error) {
    	echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
	}

	//call the function that we want, and give the input from user
	$response = $client->call('Subtract', array('intA'=> 99, 'intB'=> 3));


	//get the response from server
	echo var_export($response, true);
?>