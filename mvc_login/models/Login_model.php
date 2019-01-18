<?php
	class Login_model
	{
		private $u="admin";
		private $p="123";
		function login_check()
		{
			if($this->u==$_POST['txtuser'] && $this->p==$_POST['txtpass'])
			{
				return "true";
			}
			else
			{
				return "false";
			}
		}
	}
?>