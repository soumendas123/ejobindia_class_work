<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <table border="2">
            <?php
            foreach($p as $row){
            ?>
            <tr><th>YOUR ID: </th><td><?php echo $row->uid; ?></td></tr>
            <tr><th>YOUR NAME: </th><td><?php echo $row->uname; ?></td></tr>
            <tr><th>YOUR PHONE NO: </th><td><?php echo $row->phnno; ?></td></tr>
            <tr><th>YOUR ADDRESS: </th><td><?php echo $row->address; ?></td></tr>
            <tr><th>YOUR MARKS: </th><td><?php echo $row->marks; ?></td></tr>
            <?php } ?>
        </table>
	</body>
</html>