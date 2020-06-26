<?php 
	
	#implode()
	$array = array('A','E','I','O','U');

	$comma_separated = implode("-",$array);

	echo $comma_separated."\n";

	print_r(implode('hello'."\n", $array));

	#explode()
	// $str = "I am simple !";
	// print_r(explode(" ", $str));
?>