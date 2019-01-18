<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#qdt" ).datepicker();
            });
        </script>
        <script>
            function fun(acton){
                var frm=document.getElementById('#frm');
                frm.action=acton;
                frm.submit();
            }
        </script>
	</head>

	<body>
        <table border="2">
        <form  method="post" id="frm">
            <tr><th>QID</th><th>QUESTION</th><th>OPTION 1</th><th>OPTION 2</th><th>CORRECT OPTION</th><th>QUESTION DAY</th><th>OPERATION</th>
            </tr>
            <?php
            foreach($q as $row){
            ?>
            <tr><td><?php echo $row->qid ?></td>
                <td><?php echo $row->question ?></td>
                <td><?php echo $row->optns1 ?></td>
                <td><?php echo $row->optns2 ?></td>
                <td><?php echo $row->crrct_ans ?></td>
                <td><?php echo $row->q_date ?></td>
                <td><input type="button" value="REMOVE" name="qrmv" onclick="fun('<?php echo base_url(); ?>Admin/q_remove')"></td>
                <input type="hidden" name="txthid" value="<?php echo $row->qid; ?>">
           </tr>
            </form>
            
            <?php } ?>
        </table>
<!--        <form action="Admin/q_insert" method="post">-->
            <p>Q_id:<input type="text" name="qid"></p>
            <p>Question:<textarea rows="7" name="q_txtarea"></textarea></p>
            <p>Option 1:<input type="text" name="opt1"></p>
            <p>Option 2:<input type="text" name="opt2"></p>
            <p>Correct Ans:<select name="crct_ans">
                <option value="option1">opt1</option>
                <option value="option2">opt2</option>
                </select></p>
            <p>Question date:<input type="text" name="q_dt" id="qdt"></p>
            <input type="button" name="q_submit" value="INSERT" onclick="fun('<?php echo base_url(); ?>Admin/q_insert')">
            <p><input type="reset" value="REFRESH"></p>
            

        </form>
	</body>
</html>