<?php
	class a
	{
		public $e;
		function method1()
		{
			$this->e="PHP";
			echo "e=".$this->e."<br>";
		}

	}

	class b
	{
		function method2()
		{
			$p=new a();
			$p->method1();
		}
	}

	$s=new b();
	$s->method2();
?>