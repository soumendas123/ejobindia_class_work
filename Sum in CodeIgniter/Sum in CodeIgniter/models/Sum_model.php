<?php
	class Sum_model extends CI_Model
	{
		public $c;
		function do_sum()
		{
			$this->c=$this->input->post('txt1')+$this->input->post('txt2');
			return $this->c;
		}
	}
?>