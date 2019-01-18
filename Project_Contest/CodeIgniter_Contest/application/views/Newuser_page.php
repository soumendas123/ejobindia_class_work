<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <form action="newuser" method="post">
            Select UserName:<input type="text" name="uname"><br>
            Select UserPassword:<input type="password" name="upass"><br>
            Phone NO:<input type="text" name="uphn"><br>
            Home Address:<textarea name="uaddr"></textarea><br>
            <input type="reset" value="REFRESH">
            <input type="submit" value="REGISTER">
            <input type="button" value="BACK" id="btn" onclick="fun()" name="btn">
        </form>
        <div id="d1">
            <?php
        if($this->input->get('a'))
            echo $this->input->get('a');
        ?>
        <script>
            function fun(){
                <?php
                    if(isset($_POST['btn'])){
                        $this->load->helper('url');
                        redirect(base_url().'Login_controller');
                    }
                    
                    
                ?>
            }
        </script>
        </div>
	</body>
</html>