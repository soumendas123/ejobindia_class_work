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
            <tr><th>UserID</th><th>UserName</th><th>Marks</th><th>Status</th><th>Operation</th></tr>
            <?php
            foreach($r as $row)
            {
                if($row->uname=='admin_sj')
                    echo "";
                else
                {
            ?>
            <form action="<?php echo base_url() ?>Admin/user_remove" method="post" onsubmit="return fun()">
            <tr><td><?php echo $row->uid; ?></td>
                <td><?php echo $row->uname; ?></td>
                <td><?php echo $row->marks; ?></td>
                <td><?php echo $row->status; ?></td>
                <td><input type="submit" name="rmv" value="REMOVE"></td>
                <input type="hidden" name="txthid" value="<?php echo $row->uid; ?>">
             </tr>
                </form>
                    
            <?php } 
                } ?>
        </table>
	</body>
</html>