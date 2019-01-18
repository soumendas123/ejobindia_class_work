<?php
$this->load->library('session');
echo "WELCOME ".$this->session->userdata('uname')."<br>";
foreach($r as $row)
{
?> 
    <html>
        <body>
            <form action="anscheck" method="post">
            <span style="color:red">Question of the Day***</span><br>
                <span>Qid: <?php echo $row->qid.") ".$row->question ?></span><br>
                <select name="q_slct">
                    <option value="<?php echo $row->optns1 ?>"><?php echo $row->optns1 ?></option>
                    <option value="<?php echo $row->optns2 ?>"><?php echo $row->optns2 ?></option>
                </select>
                <input type="submit" name="ans_sbmt" value="CLICK">
           </form>
                <a href="logout" style="text-decoration:none">LOG OUT</a>
        </body>
    </html>
<?php
}
?>