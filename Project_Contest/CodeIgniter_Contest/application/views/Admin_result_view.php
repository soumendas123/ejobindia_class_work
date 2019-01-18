<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script>
            function fun(){
                var a=confirm('Are You Sure???');
                if(a==1)
                   return true;
                else
                    return false;
                
            }
        </script>
	</head>

	<body>
        <table border="2" bgcolor:'pink'>
            <tr><th>UserID</th><th>UserName</th><th>Marks</th><th>Operation</th></tr>
            <?php
            foreach($a as $row)
            {
            ?>
            <form action="<?php echo base_url(); ?>Admin/publish" method="post" onsubmit="return fun()">
            <tr><td><?php echo $row->uid; ?></td>
                <td><?php echo $row->uname; ?></td>
                <td><?php echo $row->marks; ?></td>
                <td><input type="submit" name="publish_rslt" value="Publish Result" ></td>
                <input type="hidden" name="txthid" value="<?php echo $row->uid; ?>">
             </tr>
                </form>
            <?php } ?>
        </table>
	</body>
</html>