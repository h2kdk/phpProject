<?php
/**
 * Created by PhpStorm.
 * User: hoang
 * Date: 17/03/2018
 * Time: 22:23
 */
$dbc = mysqli_connect('localhost',  'root', '', 'music_land');
if (!$dbc){
	echo "Error: ";
	//only during development
	echo "Debugging error: ".mysqli_connect_error();
	exit;
}