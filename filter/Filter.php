<?php

class Filter
{
	var $str;
	function __construct() {
		$this->str = $str1 ;
	}
	function filter($str)
	{ 
        require('badword.src.php');
		$badword1 = array_combine($badword,array_fill(0,count($badword),'*'));
		$str1 = strtr($str,$badword1);
		return $str1;
	}
}
?>