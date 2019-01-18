<?php

	class abc
	{
		
	const a=12; // constant variable declaration
		function aa()
		{
			
			
			echo "a=".self::a;
		}
	}
	
	$ob=new abc();
	
		$ob->aa();
		
	$ob->a=6; // value assign
	$ob->aa();
	
	$ob->a=14;
	$ob->aa();
	