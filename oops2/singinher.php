<?php
	class data // base class
	{
		public $a,$b,$c;
		function getdata($m,$n)
		{
			$this->a=$m;
			$this->b=$n;
		}
	}
	
	class sum extends data // extends keywords used for inherits two class
	{ // derive class
		function result()
		{
			$this->c=$this->a+$this->b;
			echo "Sum is ".$this->c;
		}
	}

	$d=new sum();
	$d->getdata(6,2);
	$d->result();
	
?>