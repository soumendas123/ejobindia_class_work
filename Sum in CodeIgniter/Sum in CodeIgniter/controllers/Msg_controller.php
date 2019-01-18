<?php
	class Msg_controller extends CI_Controller
	{
		function index()
		{
			$this->load->view("Msg1_view");
		}
		
		function message()
		{
			$this->load->model("Msg_model");
			$m['s']=$this->Msg_model->do_message();
			$this->load->view('Msg1_view');
			$this->load->view('Msg2_view',$m);
		}
	}

?>