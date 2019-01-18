<?php
	class abc
	{
		function __construct()
		{
			echo "Welcome to class<br>";
		}
		
		function method1()
		{
			echo "method1 for class abc<br>";
		}
		
		function __destruct()
		{
			echo "Ending the class<br>";
		}
	}

	$ob=new abc();
	$ob->method1();
	$ob2=new abc();
	$ob2->method1();
?>