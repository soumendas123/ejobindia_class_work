<?php
	interface fno
	{
		function getfno($m); // only declaration
	}
	
	interface sno
	{
		function getsno($n); // only declaration
	}
	
	class result implements fno,sno
	// implements used for inherits interface with class
	{
		public $a,$b,$c;
		
		function getfno($m)
		{
			$this->a=$m;
		}
		
		function getsno($n)
		{
			$this->b=$n;
		}
		
		function sum()
		{
				$this->c=$this->a+$this->b;
				echo "Sum=".$this->c;
		}
	}

	$ob=new result();
	$ob->getfno(2);
	$ob->getsno(5);
	$ob->sum();
?>