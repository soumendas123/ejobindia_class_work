<?php
include("models/Img_model.php");

	class Img_controller
	{
		public $model,$flag;
		function __construct()
		{
			$this->model=new Img_model();
			if(isset($_POST['btnupload']))
			{
					$this->flag=$this->model->do_upload("file1","upload/");
					
					if($this->flag==true)
					{
						$msg="File Uploaded";
					
						
					}
					else
					{
						$msg="File Not Uploaded";
					}
						include("views/ImgUpload_view.php");
						include("views/Msg_view.php");
					
			}
			else if(isset($_GET['opt']))
			{
				$r=$this->model->gallery('upload/');
				include('views/Gallery_view.php');
			}
			else
				
			{
				include("views/ImgUpload_view.php");
			}
		}
	}
?>