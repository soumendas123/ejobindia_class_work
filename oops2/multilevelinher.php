<?php
	class fno
	{
		public $a;
		function getfno($m)
		{
			$this->a=$m;
		}
	}
	
	class sno extends fno
	{
		public $b;
		function getsno($n)
		{
			$this->b=$n;
		}
	}
	
	class sum extends sno
	{
		public $c;
		function result()
		{
			$this->c=$this->a+$this->b;
			return $this->c; 
		}
	}
	
$ob=new sum();
$ob->getfno(3);
$ob->getsno(5);
$s=$ob->result();
echo "Sum=".$s;
?>