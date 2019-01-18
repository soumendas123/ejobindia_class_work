<?php

include("Usermodel.php");
 
class Signup
{
   function show()
   {

       if(isset($_POST['btn1']))
    {
      

       $model=new Usermodel();
	   $model->view(); 
    }
    else
    {
    	include("login.php");
    	
    }

   }

 }   
?>