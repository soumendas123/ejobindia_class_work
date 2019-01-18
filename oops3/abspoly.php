<?php
	 abstract class data
	 {
		 public $a,$b,$c;
		 function __construct($m,$n)
		 {
			 $this->a=$m;
			 $this->b=$n;
		 }
		 
		 abstract function result();
	 }
	 
	 class sum extends data
	 {
			
			function __construct($p,$q)
			{
				parent::__construct($p,$q);
			}
			
			function result()
			{
				$this->c=$this->a+$this->b;
				echo "SUM=".$this->c."<br>";
			}
	 }
	 
	 class minus extends data
	 {
			function __construct($p,$q)
			{
				parent::__construct($p,$q);
			}
			
			function result()
			{
				$this->c=$this->a-$this->b;
				echo "MINUS=".$this->c."<br>";
			}
	 }
	 
	/* $s=new sum();
	 $s->getdata(5,2);
	 $s->result();
	 
	 $m=new minus();
	 $m->getdata(5,2);
	 $m->result(); */
	 //$r=new data(); // not possible, because of it is abstract class
	 $d=[new sum(5,1),new minus(8,6),new sum(1,3),new sum(10,5),new minus(90,5)];
	 
	 foreach($d as $e)
	 {
		 $e->result(); 
	 }

?>