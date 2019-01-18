<?php
	function inc()
	{
		static $a=1;
		$a=$a+1;
		
		echo "a=".$a."<br>";
	}

	inc();
	inc();
	inc();
?>