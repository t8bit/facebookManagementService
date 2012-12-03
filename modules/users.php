<?php

class users extends db
{
	function __construct()
	{
		$this->connect();
	}
	function get_all()
	{
		$query="SELECT * FROM users2";
		$data=$this->get($query);
		return $data;
	}
}
//initialize classes
$user=new users();

//send to template
$data=$user->get_all();

?>
