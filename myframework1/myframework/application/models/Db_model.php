<?php
	class Db_model extends CI_Model
	{
		function db_add()
		{
			$this->load->database();
			
			$arr=array("sname"=>$this->input->post('txtname'),
			"addr"=>$this->input->post('txtaddr'));
			
			$this->db->insert('usertable',$arr);
			// $this->db->insert(tablename, records in array)
			// used for insert record to a table within a database.

				return true;
		}
		
		function db_display()
		{
			$this->load->database();
			$q=$this->db->get('usertable');
			// select * from usertable
			
			return $q->result();
		}
	}
?>