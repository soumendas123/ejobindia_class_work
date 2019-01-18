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
							
							
							$.get(
								{
										url:"sum4.php",
										data:{"n1":a,"n2":b},
										success:function(d)
												{
													$("#d1").html(d);
												}
								}
							);
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

