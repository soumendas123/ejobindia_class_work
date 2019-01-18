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








<?php
	$con=mysqli_connect("localhost","root","","emsdb") or die("Connection Failed");
			$q="select * from empdetails where eid!=''";
		
			$query=mysqli_query($con,$q);
	// mysqli_query() used for execute sql statement 
		echo "<table width='500px' border=1>";
			echo "<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Blood Group</th>
			<th>Qualification</th>
			<th>Experience</th>
			<th>upload image</th>
			<th>Action</th>
			</tr>";
			while($r=mysqli_fetch_array($query,MYSQLI_NUM))
			{ // mysqli_fetch_array() used for get records from a table by depending on sql query
				echo "<tr>";
				echo "<form method='post'>";
				echo "<td><input type='hidden' name='txthid' value=".$r[1].">".$r[1]."</td>";
				for($i=2;$i<=10;$i++)
				{
				echo "<td>".$r[$i]."</td>";
				}
				echo "<td><img src=files/".$r[1]." height='20' width='30'></img></td>";
				echo "<td><input type='submit' name='btnedit' value='Edit'>";
				echo "</form>";
				echo "<form method='post' action='del.php' id='frm3' name='frm3'>";
				echo "<input type='hidden' name='txthid' value=".$r[1].">";
				echo "<input type='button' name='btnremove' onclick='conf()' value='Remove'>
					</td>";
				echo "</form>";
				echo "</tr>";
				
			}
	echo "</table>";
	mysqli_close($con);

?>

<?php
	if(isset($_POST["btnupdate"]))
	{
		if(!in_array(null,$_POST))
		{
			extract($_POST);
			$con=mysqli_connect("localhost","root","","emsdb") or die("Connection Failed");
			$q="update empdetails set `ename`='$txtname', `address`='$txtaddr', `gender`='$txtgen', `phone`='$txtphone', `email`='$txtemail', `dob`='$txtdob', `blood`='$txtblood', `qualification`='$txtquali', `experience`='$txtexp'`image`='$txtimg' where eid='$txtid'";
		
			$query=mysqli_query($con,$q);
		
			if($query)
			{
			
			echo "<script> alert('Updated'); </script>";
			header("Location:empregis.php");
			}
			else
			{
			echo "<script> alert('Not Updated'); </script>";
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
