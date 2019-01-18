<?php
	class abc
	{
		public $a; // member variable
		// public is an access specifier
		function aaa()
		{
			$this->a="Hello";
			// $this used for indicate current class

		}

		function show()
		{
			$this->aaa();
			echo $this->a."<br>";
		}


	}

	$s=new abc();
	//$s->aaa();
	$s->show();
?>