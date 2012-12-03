<?php
class manage_pages extends db
{
	function __construct()
	{
		$this->connect();
	}
	
	function reset()
	{
		$id_user=$_SESSION['id'];
		$query="DELETE FROM pages WHERE id_user = '$id'";
		$this->set($query);
	}
	
	function insert($name,$acess_token,$category,$id_page)
	{
		$id_user=$_SESSION['id'];
		$query="SELECT id_page FROM pages WHERE id_page='$id_page'";
		$resultado=$this->get($query);
		if(empty($resultado))
		{
			$query="INSERT INTO pages VALUES(0,'$name','$acess_token','$category','$id_page','$id_user');";
			$this->set($query);
		}
	}
	
	function lista()
	{
		$id_user=$_SESSION['id'];
		$query="SELECT id,id_page,name,access_token FROM pages WHERE id_user='$id_user'";
		$lista=$this->get($query);
		return $lista;
	}
	
	function getPageInfo($id)
	{
		$query="SELECT id,id_page,name,access_token FROM pages WHERE id='$id'";
		$lista=$this->get($query);
		return $lista[0];
	}
	
}
?>
