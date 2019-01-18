<?php
	//template name:remove_data
	
	get_header();
	
	global $wpdb;
	
	extract($_POST);
	
$arr2=array("uid"=>$txt1);

$d=$wpdb->delete("usertable",$arr2);

if($d)
{
	echo "Record Removed";
}
else
{
	echo "Record not removed";
}
	
get_footer();
?>