<?php
	class abc
	{
			/*function method()
			{
				echo "Method with no parameter";
			}
			
			function method($a)
			{
				echo "Method with one parameter";
			}
			
			function method($a,$b)
			{
				echo "Method with two parameter";
			} */
			
			function __call($name,$args)
			//__call() is a magic function for called before any function calling
			{
				if($name=="prg")
				{
					$c=count($args);
					
					switch($c)
					{
						case 0:
							echo "Method with no parameter<br>";
							break;
						case 1:
							echo "Method with one parameter ".$args[0]."<br>";
							break;
						case 2:
							echo "Method with two parameter ".$args[0]." and ".$args[1]."<br>";
							break;
					}
				}
				else
				{
					echo "Such function name not found<br>";
				}
			}
	}
	
$r=new abc();
$r->prg();
$r->prg(3);
$r->prg(4,9);
$r->method(4,9);
?>