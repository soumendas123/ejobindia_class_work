<?php
	class calculator
	{
		public $a,$b,$c;

		function __construct($m,$n)
		// parameterize constructor
		{
			$this->a=$m;
			$this->b=$n;
		}

		function sum()
		{
			$this->c=$this->a+$this->b;

			echo "Sum=".$this->c;
		}

		function minus()
		{
			$this->c=$this->a-$this->b;

			echo "Minus=".$this->c;
		}

	}

	$ob=new calculator(5,2);
	$ob->sum();
	$ob->minus();

?>