<?php
	class Login extends CI_Controller
	{
		function index()
		{
			$this->load->view("Login_view");
		}
		
		function check_login()
		{
			$this->load->model('Login_model');
			$f=$this->Login_model->check();
			
			if($f==true)
			{
				$this->load->view("Dashboard_view");
			}
			else
			{
					$this->load->view("Login_view");
				$this->load->view("Invalid_view");
			}
		}
		
		function logout()
		{
			$this->load->model('Login_model');
			$f=$this->Login_model->loggedout();
			
			if($f=="true")
			{
				$this->load->view("Login_view");
			}
		}
	}
?>