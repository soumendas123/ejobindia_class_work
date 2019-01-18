<?php		
		$eid=$_POST['txthid'];
		echo $eid;
		$con=mysqli_connect("localhost","root","","emsdb") or die("Connection Failed");
			$q="delete from empdetails where eid='$eid'";
		
			$query=mysqli_query($con,$q);
			
			if($query)
			{
				header("Location:empregis.php");
			}
			else
			{
				echo "Record not deleted";
			}
		mysqli_close($con);
?>
