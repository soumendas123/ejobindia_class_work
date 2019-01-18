<?php
	class Abc extends CI_Controller
	{
		function index()
		{
			echo "Abc controller called";
		}
		
		function xyz()
		{
			echo "xyz function within Abc Controller";
			$this->load->view("Mypage_view");
			// view() used for call the view page
		}
		
		function aaa()
		{
			echo "aaa function within Abc controller";
		}
	}

?>