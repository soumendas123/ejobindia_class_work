<?php
	class abc
	{
		function method()
		{
			echo "Method of class abc";
		}
	}
	
	class xyz extends abc
	{
		function method()
		{
			echo "Method of class xyz";
			parent::method();
			// parent used for indicate the base class of this current class
		}
	}

	$ob=new xyz();
	$ob->method();
?>