<html>
	<head>
	</head>
	
	<body>
		<form method="post" action="<?php echo base_url(); ?>index.php/Login/check_login">
			Username:
			<input type="text" name="txtuser">
			<br>
			Password:
			<input type="password" name="txtpass">
			<br>
			<input type="submit" name="btnlogin" value="Login">
		</form>
	</body>
</html>