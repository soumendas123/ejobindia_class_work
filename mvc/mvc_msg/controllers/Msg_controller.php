<?php
	include("models/Msg_model.php");
	
	class Msg_controller
	{
		function show()
		{
			if(isset($_POST['btn1']))
			{
				$model=new Msg_model();
				$model->viewmessage();
			}
			else
			{
				include("views/Button_view.php");
			}
			
		}
	}

?>