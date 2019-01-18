<?php
	class Msg_model extends CI_Model
	{
		public $a;
		function do_message()
		{
			$this->a="CodeIgnitor Framework";
			return $this->a;
		}
	}

?>