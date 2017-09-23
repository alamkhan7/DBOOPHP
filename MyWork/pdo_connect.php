<?php
$dsn = 'mysql:host=localhost;dbname=oophp';
//$dsn = 'mysql:host=localhost;dbname=oophp;port=8889';
// $dsn = 'sqlite:C:\xampp\htdocs\DBOOPHP\sqlite\oophp.db';	// No need of username and password
//$dsn = 'sqlite:/Applications/MAMP/htdocs/oophp/sqlite/oophp.db';


$db = new PDO($dsn, 'root', ')(*LKJ');
$db->setAttribute( PDO::ATTR_PERSISTENT, true );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );