<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <?php 
            foreach($r as $row)
            {
            ?>
        <p>Winner of the Contest is: </p><?php echo $row->uname; ?>
        <?php } ?>
	</body>
</html>