<?php
	class pqr
	{
		public $a="Hello";// member variable
		function aaa() // member function
		{
		
			echo $this->a;
			// $this is a predefined object that represent current class
		}
		
		function bbb()
		{
			$this->a="PHP";
			echo $this->a;
		}
	}

	$s=new pqr();
	$s->aaa();
	$s->bbb();
?>