<?php
	class abc
	{
		
		static function aaa()
		{
			echo "aaa static function<br>";
			
		}
		
		function bbb()
		{
			echo "bbb non-static function<br>";
			self::aaa();
		}
	}
	
	abc::aaa();
	abc::bbb();
	//$ob1=new abc();
	//$ob1->aaa();
	
	//$ob2=new abc();
	//$ob2->aaa();
	//abc::bbb();

?>