<html>
	<head>
	</head>
	
	<body>
		<form action="<?php echo base_url(); ?>index.php/Db/ins" method="post">
			Name:
			<input type="text" name="txtname">
			<br>
			Address:
			<textarea name="txtaddr"></textarea>
			<br>
			<input type="submit" name="btninsert" value="Add">
		</form>
		<a href="<?php echo base_url(); ?>index.php/Db/display">View All</a>
	</body>
</html>