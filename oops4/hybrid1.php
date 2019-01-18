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
	
	class D implements B,C
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
	}
	
	$ob=new D();
	$ob->methodA();
	$ob->methodB();
	$ob->methodC();
	$ob->methodD();
	

?>