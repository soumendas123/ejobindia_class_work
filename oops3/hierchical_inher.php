<?php
	class data
	{
		public $a,$b,$c;
		
		function inputdata($m,$n)
		{
			$this->a=$m;
			$this->b=$n;
		}
	}
	
	class sum extends data
	{
		function sumresult()
		{
			$this->c=$this->a+$this->b;
			echo "Sum=".$this->c."<br>";
		}
	}

	class minus extends data
	{
		function minusresult()
		{
			$this->c=$this->a-$this->b;
			echo "Minus=".$this->c."<br>";
		}
	}
	
	$s=new sum();
	$s->inputdata(5,3);
	$s->sumresult();
	
	$m=new minus();
	$m->inputdata(10,3);
	$m->minusresult();
	
?>