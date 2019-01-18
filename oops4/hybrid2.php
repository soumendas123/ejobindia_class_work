<?php
	interface A
	{
		function methodA();
	}
	
	interface B extends A
	{
		function methodB();
	}
	
	interface C extends A
	{
		function methodC();
	}
	
	interface E extends A
	{
		function methodE();
	}
	
	class D implements B,E,C
	{
		function methodA()
		{
			echo "Method A<br>";
		}
		
		function methodB()
		{
			echo "Method B<br>";
		}
		
		function methodC()
		{
			echo "Method C<br>";
		}
		
		function methodD()
		{
			echo "Method D<br>";
		}
		
		function methodE()
		{
			echo "Method E<br>";
		}
	}
	
	$ob=new D();
	$ob->methodA();
	$ob->methodB();
	$ob->methodC();
	$ob->methodD();
	$ob->methodE();

?>