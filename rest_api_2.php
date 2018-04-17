<?php
	$maps_url = 'http://api.openweathermap.org/data/2.5/weather?q=depok&appid=f1d898c8b7e3f017c4f8faf317cbb7fe';
	$maps_json = file_get_contents($maps_url);
	$maps_array = json_decode($maps_json, true);
	$temp = $maps_array['weather'];

	print_r($temp);

	echo "<br>";
	$temp = $temp[0];
	print_r($temp);

	echo "<br>";
	$temp = implode(" ", $temp);
	print_r($temp);
?>