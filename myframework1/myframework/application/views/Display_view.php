<html>
	<head>
	
	</head>
	<body>
		<?php
			//print_r($r);
			
			foreach($r as $h)
			{
				echo $h->sid."<br>";
				echo $h->sname."<br>";
				echo $h->addr."<br>";
				echo "---------------<br>";
			}
		?>
	</body>
</html>