<?php
	class Db extends CI_Controller
	{
		function index()
		{
			$this->load->view('Insert_view');
		}
		
		function ins()
		{
			$this->load->model('Db_model');
			$f=$this->Db_model->db_add();
			
			if($f==true)
			{
				$msg['p']="Record inserted";
			}
			else
			{
				$msg['p']="Record not inserted";
			}
				$this->load->view('Insert_view');
			$this->load->view('Msg_view',$msg);
		}
		
		function display()
		{
			$this->load->model('Db_model');
			$f['r']=$this->Db_model->db_display();
			$this->load->view('Display_view',$f);
		}
	}
?>