<?php
	$maps_url = 'http://api.openweathermap.org/data/2.5/weather?q=depok&appid=f1d898c8b7e3f017c4f8faf317cbb7fe';
	$maps_json = file_get_contents($maps_url);
	$maps_array = json_decode($maps_json, true);
	print_r($maps_array);
?>