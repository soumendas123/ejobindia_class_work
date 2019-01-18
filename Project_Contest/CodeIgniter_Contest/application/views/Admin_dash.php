<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <a href="<?php echo base_url(); ?>Admin/questions">Question</a>
        <a href="<?php echo base_url(); ?>Admin/winner">Winner</a>
        <a href="<?php echo base_url(); ?>Admin/users">User</a>
        <a href="<?php echo base_url(); ?>Admin/logout">Logout</a>
        
        <?php
        echo "WELCOME ".$this->session->userdata('uname');
        ?>
	</body>
</html>