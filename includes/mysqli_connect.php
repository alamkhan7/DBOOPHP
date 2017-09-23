<?php 

$db = new mysqli('127.0.0.1','root',')(*LKJ','oophp');

if ($db->connect_error){
	$error = $db->connect_error;
}

$db->set_charset('utf8');