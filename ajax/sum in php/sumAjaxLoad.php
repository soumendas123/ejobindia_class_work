<html>
	<head>
		<script src="jquery.min.js"></script>
		
		<script>
			$(document).ready(
				function()
				{
					var a,b;
					$("#btnsum").click(
						function()
						{
							a=$("#txt1").val();
							b=$("#txt2").val();
							
							$("#d1").load("sum2.php",{"n1":a,"n2":b});
						}
					);
				}
			);
		</script>
	</head>
	
	<body>
	
			1st number:
			<input type="text" id="txt1">
			<br>
			2nd number:
			<input type="text" id="txt2">
			<br>
			<input type="button" value="Sum" id="btnsum">
	<br>
	<div id="d1"></div>
	</body>
</html>

