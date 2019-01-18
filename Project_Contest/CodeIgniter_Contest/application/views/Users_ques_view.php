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
        <form action="<?php echo base_url(); ?>Login_controller/anscheck" method="post">
        <?php echo $row->qid.") "; 
              echo $row->question; ?>
            <input type="radio" name="radans" value="option1">
            <?php echo $row->optns1; ?>
            <input type="radio" name="radans" value="option2">
            <?php echo $row->optns2; ?>
            <input type="hidden" value="<?php echo $row->qid; ?>" name="txthid">
            <input type="submit" value="CLICK">
        </form> 
        <?php
        }
        ?>
	</body>
</html>