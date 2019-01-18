<?php
//template name:newuser

get_header();// get the wordpress theme header
?>
<html>
	<head>
	</head>
	
	<body>
		<form method="post">
			Username:
			<input type="text" name="txtuser">
			<br>
			Password:
			<input type="password" name="txtpass">
			<br>
			<input type="submit" name="btnadd" value="Register">
		</form>
	</body>
</html>
<?php
	if(isset($_POST['btnadd']))
	{
		extract($_POST);
		global $wpdb;
		// $wpdb used for get database connectivity with Wordpress
		
		$arr=array("uname"=>$txtuser,"upass"=>$txtpass);
		
		$i=$wpdb->insert("usertable",$arr);
		// insert() for insert into database by Wordpress
		if($i)
		{
			echo "Registration Completed";
		}
		else
		{
			echo "Registration Failed";
		}
		
	}

?>
<?php
	get_footer(); // get Wordpress Theme Footer 
?>

