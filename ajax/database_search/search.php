<?php
	$con=mysqli_connect("localhost","root","","dbsearch");
	
	$s=$_POST['n1'];
	
	$q="select * from tab1 where sname like '$s%'";
	
	$query=mysqli_query($con,$q);
	
	if($query)
	{
		while($r=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo $r['sname']."<br>";
		}
	}
	mysqli_close($con);
?>