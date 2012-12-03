<?php

class admin extends db
{
	private $error;
	
	function __construct()
	{
		$this->error=new error();
		$this->connect();
	}
	
	function get_settings_info()
	{
		$id=$_SESSION['id'];
		$query="SELECT facebook_token,page_id FROM admins WHERE id='$id'";
		$facebook_token=$this->get($query);
		$Ftoken=$facebook_token[0]->facebook_token;
		$page_id=$facebook_token[0]->page_id;
		$query="SELECT name,access_token FROM pages WHERE id='$page_id'";
		$pages_stuff=$this->get($query);
		$page_name=$pages_stuff[0]->name;
		$page_token=$pages_stuff[0]->access_token;
		return array($page_name,$Ftoken,$page_token);
	}
	
	function have_access_token()
	{
		$id=$_SESSION['id'];
		$query="SELECT facebook_token FROM admins WHERE id='$id'";
		$facebook_token=$this->get($query);
		if(empty($facebook_token->facebook_token))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function set_facebook_token($token)
	{
		$id=$_SESSION['id'];
		$query="UPDATE admins SET facebook_token='$token' WHERE id='$id'";
		$this->set($query);	
	}
	
	function setPage($page_id)
	{
		$id=$_SESSION['id'];
		$query="UPDATE admins SET page_id='$page_id' WHERE id='$id'";
		$this->set($query);
	}
	
	function getPage()
	{
		$id=$_SESSION['id'];
		$query="SELECT page_id FROM admins WHERE id='$id'";
		$res=$this->get($query);
		$pageid=$res[0]->page_id;
		return $pageid;
	}
	
	function get_facebook_token()
	{
		$id=$_SESSION['id'];
		$query="SELECT facebook_token FROM admins WHERE id='$id'";
		$token=$this->get($query);
		return $token[0]->facebook_token;	
	}
	
	function reset()
	{
		$id=$_SESSION['id'];
		$query="UPDATE admins SET facebook_token='',page_id='' WHERE id='$id'";
		$this->set($query);
	}
	
	function login($username,$password)
	{
		$password_md5=md5($password);
		$query="SELECT id,username,password,permission from admins WHERE username='$username' AND password='$password_md5'" ;
		$data=$this->get($query);
		if(empty($data))
		{
			$this->error->set_error(error_admin_not_found);
		}
		else
		{
			$token=uniqid();
			$id=$data[0]->id;
			$permissions=$data[0]->permissions;
			$query="UPDATE admins SET token='$token' WHERE id='$id'";
			$data=$this->set($query);
			$_SESSION['id']=$id;
			$_SESSION['username']=$username;
			$_SESSION['token']=$token;
			$_SESSION['permissions']=$permissions;
			header('Location: index.php?route=main') ;
		}
		return $this->error->get_error();
	}
	
}
//initialize classes
$admin=new admin();

//get and filter variables
$var=filter_posts();
 

//functions
switch($var['funcao'])
{
	case 'login':
		$error=$admin->login($var['username'],$var['password']);
	break;
}
?>
