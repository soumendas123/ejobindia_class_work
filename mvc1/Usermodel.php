<?php
  class Usermodel
  {
  	 public $u,$p;
  	 function view()
  	 {
  	 $this->u="admin";
  	 $this->p="1234";
  	 if($this->u==$_POST['txtname'] && $this->p==$_POST['txtpass'])
  	 {
  	 	include("Msgprint.php");

  	 }
  	 else
  	 {
  	 	echo "invalid login";
  	 }

  	 	
  	 }
  }


?>