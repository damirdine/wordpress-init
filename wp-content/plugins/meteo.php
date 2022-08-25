<?php
/**
 * @package Meteo
 * @version 1.1.1
 */
/*
Plugin Name: Meteo
Plugin URI: http://wordpress.org/plugins/meteo/
Description: A meteo plugin
Version: 1.7.2
Author URI: http://ma.tt/
*/
function getApi() {
	$url = 'https://api.openweathermap.org/data/2.5/weather?q=nantes&units=metric&lang=fr&appid=92c3fd34ea87fe572aaad5a6f99029fb';
	$json_data= file_get_contents($url);
	$response = json_decode($json_data);
	return $response;
}
function display() {
	$data = getApi();
	//var_dump($data->name,$data->weather[0]->description,$data->main->temp);
    echo('
    <div style = "display : flex">
    <img src="https://duckduckgo.com/assets/weather/icons/partly-cloudy-day.svg" style = "width:20px" alt="" srcset="">
    <p> '.$data->name . ', ' . $data->weather[0]->description . ', <strong>' . $data->main->temp . ' °C</strong></p>
</div>
    ');
}

add_action( 'admin_notices', 'display' );
