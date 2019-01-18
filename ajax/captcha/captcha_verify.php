<html>
	<head>
		<script src="jquery.min.js"></script>
		
		<script>
			$(document).ready(
				function()
				{
					$("#d1").load("captcha_code.php");
					
					$("#btn").click(
						function()
						{
							$("#d1").load("captcha_code.php");	
						}
					);
				}
			);
		</script>
	</head>
	<body>
		Enter name:
		<input type="text">
		<br>
		<div id="d1"></div>
		<input type="button" id="btn" value="Refresh">
	</body>
</html>