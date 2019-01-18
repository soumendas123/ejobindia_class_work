<?php
	//template name:login
	get_header();
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
			<input type="submit" name="btnlogin" value="Login">
		</form>
	

<?php
	if(isset($_POST['btnlogin']))
	{
		global $wpdb;
		
		extract($_POST);
		
		$q="select * from usertable where uname='$txtuser' and upass='$txtpass'";
	$s=$wpdb->get_row($q,ARRAY_A);
	
		if($s)
		{
		?>
			<form action="http://localhost/ad_batch2/mycms/cms/?page_id=15" method="post">
			<input type="hidden" name="txt1" value="<?php echo $s['uid']; ?>">
				Username:
	<input type="text" name="txt2" value="<?php echo $s['uname']; ?>">
	<br>
	Password:
	<input type="text" name="txt3" value="<?php echo $s['upass']; ?>">
	<br>
	<input type="submit" value="Edit">
			</form>
			
			<form action="http://localhost/ad_batch2/mycms/cms/?page_id=18" method="post">
			<input type="hidden" name="txt1" value="<?php echo $s['uid']; ?>">
				
	<input type="submit" value="Remove">
			</form>
		<?php
		}
		else
		{
			echo "Not Found";
		}
	}

?>
</body>
</html>
<?php
	get_footer();
?>