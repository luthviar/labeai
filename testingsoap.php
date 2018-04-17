<?php
require_once('lib/nusoap.php');
$client = new nusoap_client('http://tempuri.org/');
/*
echo "test <br/>";
$data = array(
	'intA'=>"1",
	'intB'=> "3"
);
*/
$response = $client->call('Add', array('intA'=> 1, 'intB'=> 3));
echo $response;
?>