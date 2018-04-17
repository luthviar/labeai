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
print_r($response);
// var_dump($response);
echo $response;
?>