<?php
class widget extends db
{
	private $user;
	
	function __construct()
	{
		$this->connect();
		$this->user=$_SESSION['id'];
	}
	
	function create($name,$oauth_key,$oauth_secret,$service,$user)
	{
		
		$link="/tabs/".$name;
		$query="INSERT INTO widgets VALUES(0,'$name','$oauth_key','$oauth_secret','$link','$service','$this->user')";
		$this->set($query);
		mkdir('tabs/'.$name);
		recurse_copy('tab_generator','tabs/'.$name);
		$rs=fopen('tabs/'.$name.'/config/fbconfig.php','w');
		$string="<?php\n define('APP_ID', '".$oauth_key."');\n define('APP_SECRET', '".$oauth_secret."');\n ?>";
		fwrite($rs,$string);
		fclose($rs);
		header("Location:index.php?route=widgets");
	}
	function delete($id)
	{
		$query="DELETE FROM widgets WHERE id='$id'";
		$this->set($query);
	}
	function lista()
	{
		$id=$this->user;
		$query="SELECT * FROM widgets WHERE user='$id'";
		//echo $query;
		$data=$this->get($query);
		return $data;
	}
	
}
//initialize classes
$widget=new widget();

//posts
$var=filter_posts();
switch($var['funcao'])
{
	case 'create':
		$widget->create($var['name'],$var['oauth_key'],$var['oauth_secret'],$var['service'],$var['user']);
	break;
	case 'delete':
		$widget->delete($var['id']);
	break;
}

//send to template
$data=$widget->lista();
?>
