<?php
require_once('facebook/src/facebook.php');
require_once('admins.php');
require_once('settings/managePages.class.php');

$manage_pages=new manage_pages();

$facebook = new Facebook(array('appId'  => '207339219402468','secret' => '8de9cd409cb5b186535c10c7088f11fb'));
$user = $facebook->getUser();
$admin=new admin();
if(!$user)
{

	if($admin->have_access_token())
	{
		$facebook->setAccessToken($admin->get_facebook_token());
	}
	else
	{
		$loginUrl = $facebook->getLoginUrl(array('scope' => 'manage_pages,publish_stream'));
		header("Location: ".$loginUrl);
	}
}
else
{
	//mete o token no sition
	$admin->set_facebook_token($facebook->getAccessToken());
	//pede valores da api
	try 
	{
		$user_profile = $facebook->api('/me');
		$pages=$facebook->api('/me/accounts');
	} 
	catch (FacebookApiException $e) 
	{
		error_log($e);
		$user = null;
	}
}

//enfia pages na db
foreach($pages['data'] as $page)
{
	if($page['perms'][0]=="ADMINISTER")
	{
		$manage_pages->insert($page['name'],$page['access_token'],$page['category'],$page['id']);
	}
	
}

//rita.pires@avareswww.com

//salva a pagina
$var=filter_posts();
if($var['paginas']!='')
{
	$admin->setPage($var['paginas']);
}

if($var['funcao']=='reset')
{
	$admin->reset();
	$manage_pages->reset();
	header("Location: index.php?route=logout");
}

//manda valores para a template
$listaPages=$manage_pages->lista();
$dropDownPages=dropdown($listaPages,'paginas','id','name');
$info=$admin->get_settings_info();
?>
