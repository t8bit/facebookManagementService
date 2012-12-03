<?php
switch($_GET['route'])
{
	case 'main':
		estou_logado();
		$pagina=home;
		require_once('modules/main.php');
		require_once('templates/admin.index.php');
	break;
	case 'passatempos':
		estou_logado();
		$pagina='passatempos';
		$add='add passatempo';
		require_once('modules/passatempos.php');
		require_once('templates/admin.index.php');
	break;
	case 'galeria':
		estou_logado();
		$pagina=Gallery;
		require_once('modules/galeria.php');
		require_once('templates/admin.index.php');
	break;
	case 'participacoes':
		estou_logado();
		$pagina='participacoes';
		require_once('modules/participacoes.php');
		require_once('templates/admin.index.php');
	break;
	case 'games':
		estou_logado();
		$pagina='games';
		require_once('templates/admin.index.php');
	break;
	case 'users':
		estou_logado();
		$pagina='Users';
		require_once('modules/users.php');
		require_once('templates/admin.index.php');
	break;
	case 'posts':
		estou_logado();
		$pagina='Posts';
		require_once('modules/posts.php');
		require_once('templates/admin.index.php');
	break;
	case 'widgets':
		estou_logado();
		$add='add widget';
		$pagina='Widgets';
		require_once('modules/widgets.php');
		require_once('templates/admin.index.php');
	break;
	
	case 'settings':
		estou_logado();
		$pagina='Settings';
		require_once('modules/settings.php');
		require_once('templates/admin.index.php');
	break;
	
	case 'logout':
		unset($_SESSION);
		require_once('modules/admins.php');	
		require_once('templates/admin.login.php');
	break;
	default:
		require_once('modules/admins.php');	
		require_once('templates/admin.login.php');
	break;
}
?>
