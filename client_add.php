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

	//get the value from user input
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];

	//call the function that we want, and give the input from user
	$response = $client->call('Add', array('intA'=> $angka1, 'intB'=> $angka2));


	//get the response from server
	echo var_export($response['AddResult'], true);
?>