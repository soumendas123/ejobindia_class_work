<?php
	class Login_model extends CI_Model
	{
		private $u="admin";
		private $p="123";
		
		function check()
		{
			if($this->u==$this->input->post('txtuser') && $this->p==$this->input->post('txtpass'))
			{
					$this->load->library('session');
					// session_start();
		$this->session->set_userdata('users',$this->input->post('txtuser'));
			//$_SESSION['users']=$_POST['txtusers']
					return true;
			}
			else
			{
					return false;
			}
		}
		
		function loggedout()
		{
			$this->load->library('session');
			$this->session->unset_userdata("users"); // session_destroy()
			
				return "true";
		
		}
	}

?>