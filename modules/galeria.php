<?php

class galeria extends db
{
	private $id;
	function __construct()
	{
		$username=$_SESSION['username'];
		$this->connect();
		$this->id=$_SESSION['id'];
	}
	
	function get_all()
	{
		$id=$this->id;
		$query="SELECT * FROM galeria WHERE id_user='$id'";
		$data=$this->get($query);
		return $data;
	}
	
	function insert($imagem)
	{
		$id=$this->id;
		$query="INSERT INTO galeria VALUES(0,'$imagem','$id')";
		$this->set($query);
	}
	
	function delete($id)
	{
		$query="DELETE FROM galeria WHERE id = '$id'";
		$this->set($query);
	}
}

$gal=new galeria();

$f=$_POST['funcao'];
$i=$_POST['id'];

if($f=='del')
{
	$gal->delete($i);
	
}

$target_path = "galeria/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
{
	//echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded";
	$gal->insert(basename( $_FILES['uploadedfile']['name']));
} 
else
{
	//echo "There was an error uploading the file, please try again!";
}
$data=$gal->get_all();


?>
