<?php
include("models/Login_model.php");

class Login_controller 
{
	public $model,$f;
	function show()
	{
		
		if(isset($_POST['btnlogin']))
		{
			$this->model=new Login_model();
			$this->f=$this->model->login_check();
			if($this->f=="true")
			{
				include("views/Dashboard_view.php");
			}
			else
			{
				include("views/Login_view.php");
				include("views/Invalid_view.php");
			}
		}
		else
		{
		include("views/Login_view.php");
		}
	}
}

?>