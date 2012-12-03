<?php
//inicia sessao
session_start();
date_default_timezone_set ("Europe/Lisbon");

//variaveis de sessao
$_SESSION['lang']='en';

//carregar settings
require_once('settings.php');

//carregar lingua
require_once('languages/'.$_SESSION['lang'].'.lang.php');

//carregar files do core
require_once('core/functions.php');
require_once('core/db.class.php');
require_once('core/error.class.php');



//carrega modulo e tempate consoante route
require_once('router.php');

?>
