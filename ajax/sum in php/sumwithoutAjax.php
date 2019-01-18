<html>
	<head>
	
	</head>
	<body>
		<form method="post">
			1st number:
			<input type="text" name="txt1">
			<br>
			2nd number:
			<input type="text" name="txt2">
			<br>
			<input type="submit" value="Sum" name="btnsum">
		</form>
	</body>
</html>

<?php
	if(isset($_POST['btnsum']))
	{
		$c=$_POST['txt1']+$_POST['txt2'];
		echo "SUM is ".$c;
	}

?>