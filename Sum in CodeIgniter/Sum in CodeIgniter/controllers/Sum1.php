<?php
	class Sum1 extends CI_Controller
	{
		function index()
		{
			$this->load->view('Sum_view');
		}
		
		function sum()
		{
			$this->load->model('Sum_model');
			$result['r']=$this->Sum_model->do_sum();
			$this->load->view('Sum_view');
			$this->load->view('Result_view',$result);
		}
	}

?>