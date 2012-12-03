<?php
//filtra variaveis vindas do post
function filter_posts()
{
	foreach($_POST as $key=>$post)
	{
		$var[$key]=mysql_real_escape_string(htmlentities($post));
	}
	return $var;
}

//faz copy de ficheiros e pastas recursivamente
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir);
}

//encontra o estado do passatempo
function find_estado($activo,$data_inicial,$data_final)
{
	if($activo==0){return "Inactivo";}
	$today=mktime();
	
	if($data_final<$today)
	{
		return 'terminado';
	}
	elseif($data_inicial<$today && $data_final<$today)	
	{
		return 'Por iniciar';
	}
	else
	{
		return 'Em curso';
	}
}

//cria dropdown menu
function dropdown($lista,$name,$v1,$v2)
{
	$dropdown="<select name='".$name."'>";
	foreach($lista as $value)
	{
		$dropdown.="<option value='".$value->$v1."'>".$value->$v2."</option>";
	}
	$dropdown.="</select>";
	return $dropdown;
} 

//verica se estou logado
function estou_logado()
{
	if(!$_SESSION['id'])
		header("Location:index.php");
}
?>
