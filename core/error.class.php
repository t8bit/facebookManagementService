<?php
//cria o sistema de errros
class error
{
	private $error_msg;
	
	function set_error($error_msg)
	{
		$this->error_msg=$error_msg;
	}
	
	function get_error()
	{
		return $this->error_msg;
	}
}
?>
