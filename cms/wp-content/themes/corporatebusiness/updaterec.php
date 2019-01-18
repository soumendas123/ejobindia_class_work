<?php
	//template name:update
	
	get_header();

	global $wpdb;
	
	extract($_POST);
	
	$arr1=array("uname"=>$txt2,"upass"=>$txt3);
	// modification data
	$arr2=array("uid"=>$txt1);
	// search data
	
	$u=$wpdb->update("usertable",$arr1,$arr2);
	
	// update(table name, modification records, search records)
	
	if($u)
	{
		echo "Record Updated";
	}
	else
	{
		echo "Record Not Updated";
	}

get_footer();	
?>