<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <form action="Login_controller/logincheck" method="post">
        <p>User Name:<input type="text" name="unametxt"></p>
        <p>Password:<input type="password" name="upasstxt"></p>
        <p>Date:<input type="text" name="txtdt"></p>
        <input type="submit" value="LOGIN" name="loginsubmit">
        <input type="reset" value="REFRESH">
        </form>
        <a href="Login_controller/Newuser_reg">New Registration</a>
        </body>
</html>