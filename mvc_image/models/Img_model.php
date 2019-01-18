<?php
	class Img_model
	{
		public $filename,$path;
		function do_upload($fname,$p)
		{
			$this->filename=$_FILES[$fname]['name'];
			$this->tempname=$_FILES[$fname]['tmp_name'];
			$this->path=$p;
			if(move_uploaded_file($this->tempname,$this->path.$this->filename))
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
		
		function gallery($p)
		{
			$this->path=$p;
			$arr=array_diff(scandir($this->path),['.','..']);
			return $arr;
		}
	}

?>