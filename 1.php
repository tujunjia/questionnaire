<?php

$a = array(
	    "aa" => 123,
	        "bb" => 456
	);
$fp = fopen('aa.txt','w+'); 
fwrite($fp,var_export($times,true)); 
fclose($fp);
