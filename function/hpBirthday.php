<?php
include('../function/connsql.php');

function hpBirthday($UBirth){
	$happy = 0;
	$birthday = substr($UBirth,5);
    $CurTime = date('m-d'); 
	if($birthday == $CurTime){
        $happy = 1;	
	}
	return $happy;
}  
?>
