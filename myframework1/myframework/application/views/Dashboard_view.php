<html>
	<head>
	</head>
	
	<body>
		<h1>Welcome to <?php echo $this->session->userdata('users'); ?></h1>
		<p align="right"><a href="<?php echo base_url(); ?>index.php/Login/logout">Logout</a></p>
	</body>
</html>