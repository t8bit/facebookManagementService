<!DOCTYPE html>
<html>
<head>

<?php $rand=rand(); ?>
<meta charset="utf-8" />
<title>FMS | Administração</title>

<link rel="icon" href="static/img/icon.ico?1" />
<link rel="shortcut icon" href="static/img/icon.ico?1" />

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<link rel="stylesheet" href="static/css/admin.style.css?<?php echo $rand; ?>" type="text/css" media="screen" />

<script type="text/javascript" src="static/js/jquery-1.8.2.min.js?<?php echo $rand; ?>"></script>
<script type="text/javascript" src="static/js/jquery.equalHeight.js"></script>
<script type="text/javascript" src="static/js/jquery.tablesorter.min.js?<?php echo $rand; ?>"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="static/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="static/js/time.js"></script>
<script type="text/javascript">
$(document).ready(function()  
{ 
	$(".table").tablesorter(); 
}
  );
</script>

</head>
<body>

<header id="header">
	<hgroup>
		<h1 class="site_title"><a href="/"><img src='images/logo.png' alt='logo' style='padding-top:4px;'/></a></h1>
        <h2 class="section_title"></h2>
        <div class="btn_view_site"></div>
	</hgroup>
</header>

<section id="secondary_bar">
        <div class="user">
                <p><?=Welcome ?> <u><?=$_SESSION['username']?></u></p>
        </div>

        <div class="breadcrumbs_container">
         <article class="breadcrumbs">
                 <a href="/"><?=home?></a> 
                 <div class="breadcrumb_divider"></div> 
                 <a class="current">{current page} (ex: index)</a>
         </article>
        </div>
</section>

<div class="clear"><!--//--></div>

<section id="left">
        <aside id="sidebar" class="column">
                <div style="height:25px;"></div>
		<ul>
	        <li onclick="location.href='index.php?route=main'" class="icn_folder"><a><?=home?></a></li>
	        <li onclick="location.href='index.php?route=passatempos'" class="icn_view_users"><a><?=Passatempos?></a></li>
	        <li onclick="location.href='index.php?route=galeria'" class="icn_view_users"><a><?=Gallery?></a></li>
			<li onclick="location.href='index.php?route=games'" class="icn_audio"><a><?=Games?></a></li>
			<li onclick="location.href='index.php?route=users'" class="icn_profile"><a><?=Users?></a></li>
			<li onclick="location.href='index.php?route=posts'" class="icn_tags"><a><?=Posts?></a></li>
			<li onclick="location.href='index.php?route=widgets'" class="icn_settings"><a><?=Widgets?></a></li>
			<li onclick="location.href='index.php?route=settings'" class="icn_settings"><a><?=Settings?></a></li>
            <li onclick="location.href='index.php?route=logout'" class="icn_jump_back"><a><?=Logout?></a></li>
		</ul>
        </aside>
<div style="height:0; clear:both;"></div>
</section>

 <section id="right">
<?php if($error):?><h4 class="alert_error"><?=$error;?></h4><?php endif;?>	
<?php if($sucess):?><h4 class="alert_success"><?=$sucess;?></h4><?php endif;?>


         <article class="module width_full">
			
          <header><h3>Home Page</h3></header>
				
           <div class="module_content">
				<div style="clear:both;height:20px;"></div>
                <header style="width:100%!important; border-radius:30px!important; margin:0 auto; margin-bottom:15px;">
					<h3><?=$pagina?></h3>
					<?php if(isset($add) && !isset($_GET['add']) && !isset($_GET['id'])): ?><div class="btn_view_site" ><a style='top: 7px;left:-48px;height: 22px;' href="index.php?route=<?=$_GET['route']?>&add" class="button" id="gray"><?=$add?></a></div><?php endif; ?>
                </header>
                <?php
                switch($pagina)
                {
					case 'passatempos':
						if(isset($_GET['id']) || isset($_GET['add']))
						{
							require_once('content/passatempos.edit.php');
						}
						else
						{
							require_once('content/passatempos.content.php');
						}
					break;
					
					case 'Gallery':
						require_once('content/galeria.content.php');
					break;
					case 'participacoes':
						require_once('content/participacoes.content.php');
					break;
					case 'Users':
						require_once('content/users.content.php');
					break;
					case 'Settings':
						require_once('content/settings.content.php');
					break;
					case 'games':
						require_once('404.php');
					break;
					case 'Posts':
						require_once('content/posts.content.php');
					break;
					case 'Widgets':
						if(isset($_GET['add']))
						{
							require_once('content/widgets.edit.php');
						}
						else
						{
							require_once('content/widgets.content.php');
						}
					break;
				}
                ?>
           </div>
         </article>

<div style="clear:both;height:20px;"></div>
</section>
<div style="clear:both; height:50px;"></div>

</body>
</html>
