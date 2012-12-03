<!DOCTYPE html>
<html>
<head>

<?php $rand=rand(); ?>

 <?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
 <meta charset="utf-8" />

 <title>{nome do site} | Administração - Login</title>

 <link rel="icon" href="static/img/icon.ico?1" />
 <link rel="shortcut icon" href="static/img/icon.ico?1" />

 <link rel="stylesheet" href="static/css/admin.login.css?<?php echo $rand; ?>" type="text/css" media="screen" />

</head>
<body>

         <div id="center">
          <div class="login-i"></div>
           <div class="padding">
             <div class="text"><?=admin_restricted_area;?></div>

                  <form method="post" action="">
                      <div style="clear:both; height:0px;"></div>

                      <div class="error hidden"><img src="static/img/admin/icn_alert_error.png"><span><?php echo $error; ?></span></div>

                      <div style="clear:both;"></div>
					  <input type='hidden' value='login' name='funcao'>
                      <label><?=Username?></label>
                      <input type="text" name="username" /> 

                      <div style="clear:both; height:20px;"></div>

                      <label><?=Password?></label>
                      <input type="password" name="password" /> 
 
                      <div style="clear:both; height:20px;"></div>

                      <input type="submit" value="<?=LOGIN?>" />
                  </form>
           </div>
         </div>
		<script>
			<?php if(isset($error)): ?>
			document.querySelector('.error').style.display='block';
			<?php endif; ?>
		</script>
</body>
</html>
