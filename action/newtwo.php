<html>
	<head>
		<style>
			input[type=text],textarea
			{
				border-radius:5px;
				width:150px;
			}
			
			input[type=text]:focus
			{
				background:#ead323;
			}
			
			textarea:focus
			{
				background:#ead323;
			}
		</style>
		<script>
			var ch;
			function conf()
			{
				ch=confirm("Are you want to continue?");
				
				if(ch==true)
				{
										
					document.getElementById('frm3').submit();
								
				}
	
			}
		</script>
	</head>
	<body>


<?php
	if(isset($_POST['btnedit']))
	{
	
		$eid=$_POST['txthid'];
		echo $eid;
		$con=mysqli_connect("localhost","root","","emsdb") or die("Connection Failed");
			$q="select * from empdetails where eid='$eid'";
	
			$query=mysqli_query($con,$q);
			while($r=mysqli_fetch_array($query,MYSQLI_NUM))
			{
		$status="edit";
include("insertform.php");		
			}
			mysqli_close($con);
	}	
	else
	{
		$status="add";
		include("insertform.php");	
	}
	
?>
		
	
<?php
	if(isset($_POST["btnregis"]))
	{
		if(!in_array(null,$_POST))
		{
			
			$temp=$_FILES['txtimg']['tmp_name'];
			move_uploaded_file($temp, "files/".$_POST['txtid']);
			extract($_POST);

			$con=mysqli_connect("localhost","root","","emsdb") or die("Connection Failed");
			$q="INSERT INTO `empdetails`(`eid`, `ename`, `address`, `gender`, `phone`, `email`, `dob`, `blood`, `qualification`, `experience`) 
			VALUES('$txtid','$txtname','$txtaddr','$txtgen','$txtphone','$txtemail','$txtdob','$txtblood','$txtquali','$txtexp')";
		
			$query=mysqli_query($con,$q);
		
			if($query)
			{
			
			echo "Registered";
			}
			else
			{
			echo "Registration failed";
			}
		mysqli_close($con);
		}
		else
		{
			echo "All textboxes should be fillup";
		}
	}

?>
	
	</body>
</html>
