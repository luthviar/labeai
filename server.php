<?php
	require_once('lib/nusoap.php');
	$server = new soap_server();

	function get_message($name) {
		return "Welcome ".$name;
	}

	$server->register('get_message');

	if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
		$server->service($HTTP_RAW_POST_DATA);
		exit();
?>