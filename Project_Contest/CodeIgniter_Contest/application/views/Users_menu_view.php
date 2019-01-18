<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <a href="">Home</a>
        <a href="<?php echo base_url(); ?>Login_controller/users_result">Result</a>
        <a href="<?php echo base_url(); ?>Login_controller/profile_show">Profile</a>
        <a href="<?php echo base_url(); ?>Login_controller/logout">Logout</a>
        <?php
        echo "WELCOME ".$this->session->userdata('uname');
        ?>
	</body>
</html>