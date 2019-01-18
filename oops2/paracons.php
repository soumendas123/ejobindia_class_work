<?php
	class calc
	{
		public $a,$b,$c;
			function __construct($m,$n)
			{
				$this->a=$m;
				$this->b=$n;
			}
			
			function sum()
			{
				$this->c=$this->a+$this->b;
				echo "SUM=".$this->c."<br>";
			}
			
			function minus()
			{
				$this->c=$this->a-$this->b;
				echo "MINUS=".$this->c."<br>";
			}
	}
	
	$s=new calc(9,2);
	$s->sum(); 
	$s->minus();

?>