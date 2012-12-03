<div style='padding-left:12px'>
<span style='font-size:20px;'><b>Dados:</b></span><br>
<b>Pagina: <?php echo $info[0];?></b><br>
<b>Access Token Pessoal: <?php echo $info[1];?></b><br>
<b>Access Toke Pagina: <?php echo $info[2];?></b><br>
<br>
<span style='font-size:20px;'><b>Config:</b></span><br>
<form method='POST' action=''>
Select Page:<?php echo $dropDownPages; ?><input type='submit' value='Save'/>
</form>
<div style='border:1px dotted red;padding:10px;'>
	<form method='POST' action=''>
		<input type='hidden' value='reset' name='funcao'/>
		<input type='submit' value='Reset'/>
	</form>
</div>
</div>

