<?php
require_once('facebook/src/facebook.php');
require_once('admins.php');
require_once('settings/managePages.class.php');

class posts extends db
{
	function __construct()
	{
		$this->connect();
	}
	
	function lista()
	{
		$id_user=$_SESSION['id'];
		$query="SELECT * FROM postagens WHERE idU =  '$id_user' LIMIT 0 , 30";
		echo $query;
		//$resultado=$this->get($query);
		//print_r($resultado);
	}
}

//init classes
$admin=new admin();
$manage_pages=new manage_pages();
$posts=new posts();

//get values
//$page=$admin->getPage();
//$page_info=$manage_pages->getPageInfo($page);

//set facebook api
//$facebook = new Facebook(array('appId'  => '207339219402468','secret' => '8de9cd409cb5b186535c10c7088f11fb'));
//$facebook->setAccessToken($page_info->access_token);

//get page_id
//$page_id=$page_info->id_page;

//$user_id = $facebook->getUser();
//$user_profile = $facebook->api('/me');

//get values from post
//$var=filter_posts();
//$valores_facebook=array('message' => $var['texto'],'picture' => $var['img_link'],'link' => $var['link']);

switch($var['funcao'])
{
	case 'post':
		//$ret_obj = $facebook->api('/'.$page_id.'/feed', 'POST',$valores_facebook);
		echo "POSTADO";
	break;
}

//get posts list
$data=$posts->lista();
print_r($data);


