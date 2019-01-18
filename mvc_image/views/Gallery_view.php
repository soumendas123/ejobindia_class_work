<html>
	<head>
		<link rel="stylesheet" href="css/styles.css"></link>
	</head>
	
	<body>
		<h1>Image Gallery</h1>
		<?php
			foreach($r as $img)
			{
				?>
				<img class="img" src="upload/<?php echo $img; ?>"></img>
				<?php
				
			}
		
		?>
	</body>
</html>