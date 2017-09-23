<?php 

$dish = "a%la_m";

$dish = strtr($dish, array('_' => '\_', '%' => '\%'));

echo $dish ;

?>