<?php
	class aaa
	{
		function aaa()
		{
			echo "aaa function called<br>";
		}
		
		function __construct()
		{
			echo "Default Constructor<br>";
		}
		
		
		function bbb()
		{
			echo "bbb function called<br>";
		}
	}
	
	$r=new aaa(); // constructor called
	$r->aaa();
	$r->bbb();
?>