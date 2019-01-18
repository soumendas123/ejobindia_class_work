<?php
	class abc
	{
		function abc()
		{
			echo "abc called<br>";
		}

		function __construct() // default constructor
		{
			echo "Constructor Called<br>";	
		}

		function xxx()
		{
			echo "xxx called<br>";
		}
	}

$s=new abc();
//$s->abc();
$s->xxx();
?>