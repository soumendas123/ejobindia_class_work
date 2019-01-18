<html>
	<head>
		<script src="jquery.min.js"></script>
		
		<script>
			$(document).ready(
				function()
				{
					var n;
					$("#txtname").keyup(
						function()
						{
							n=$("#txtname").val();
							if(n!="")
							{
							$.ajax(
								{
										url:"search.php",
										type:"post",
										data:{"n1":n},
										success:function(d)
												{
													$("#d1").html(d);
												}
												,
										error:function(d)
												{
													alert("Server Error");
												}
								}
							);
							}
							else
							{
								$("#d1").html("");
							}
						}
					);
				}
			);
		</script>
	</head>
	<body>
		
			Enter name:
			<input type="text" id="txtname" autocomplete="off">
			
		
		<br>
		
		<div id="d1"></div>
	</body>
</html>