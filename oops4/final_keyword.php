<?php
	class abc
	{
		final function method()
		{
			echo "Method for abc<br>";
		}
	}

	class xyz extends abc
	{
		function method()
		{
			echo "Method for xyz<br>";
		}
	}
	
	$ob=new xyz();
	$ob->method();
?>