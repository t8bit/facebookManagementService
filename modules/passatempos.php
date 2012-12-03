<?php

class passatempos extends db
{
	private $id;
	
	function __construct()
	{
		$this->connect();
		$this->id=$_SESSION['id'];
		
	}
	
	function get_all()
	{
		$user=$this->id;
		$query="SELECT id,activo,titulo,link,estado,data_final,participacoes,imagem,data_inicial FROM passatempos WHERE username='$user' ORDER BY id DESC";
		$data=$this->get($query);
		return $data;	
	}
	
	function get_one($id)
	{
		$query="SELECT * FROM passatempos WHERE id='$id'";
		$data=$this->get($query);
		return $data;
	}
	
	function insert($id,$activo,$titulo,$resumo,$data_inicial,$data_final,$param1,$param2,$param3,$param4,$mec,$descricao,$tipo,$desafio,$minimo,$max_participacoes,$regulamento,$agradecimentos,$vencedores,$inicio,$mostrar_imagem,$imagem,$participacoes,$estado,$link,$accoes,$r1,$r2,$r3,$r4,$r5,$r6,$viral,$fraseViral)
	{
		$user=$this->id;
		$query="INSERT INTO passatempos VALUES('$id','$activo','$titulo','$resumo','$data_inicial','$data_final','$param1','$param2','$param3','$param4','$mec','$descricao','$tipo','$desafio','$minimo','$max_participacoes','$regulamento','$agradecimentos','$vencedores','$inicio','$mostrar_imagem','$imagem','$participacoes','$estado','$link','$accoes','$user','$r1','$r2','$r3','$r4','$r5','$r6','$viral','$fraseViral')";
		$data=$this->set($query);
		return $data;
	}
	
	function update($id,$activo,$titulo,$resumo,$data_inicial,$data_final,$param1,$param2,$param3,$param4,$mec,$descricao,$tipo,$desafio,$minimo,$max_participacoes,$regulamento,$agradecimentos,$vencedores,$inicio,$mostrar_imagem,$imagem,$participacoes,$estado,$link,$accoes,$r1,$r2,$r3,$r4,$r5,$r6,$viral,$fraseViral) 
	{
		$query="UPDATE passatempos SET activo='$activo',titulo='$titulo',resumo='$resumo',data_inicial='$data_inicial',data_final='$data_final',param1='$param1',param2='$param2',mostrar_imagem='$mostrar_imagem',param3='$param3',param4='$param4',mec='$mec',descricao='$descricao',tipo='$tipo',desafio='$desafio',minimo='$minimo',max_participacoes='$max_participacoes',regulamento='$regulamento',agradecimentos='$agradecimentos',vencedores='$vencedores',inicio='$inicio',imagem='$imagem',participacoes='$participacoes',estado='$estado',link='$link',accoes='$accoes',viral='$viral',fraseViral='$fraseViral',r1='$r1',r2='$r2',r3='$r3',r4='$r4',r5='$r5',r6='$r6' WHERE id='$id'";
		$data=$this->set($query);
		return $data;
	}	
}

//initialize classes
$passatempos=new passatempos();

//filter variables
$var=filter_posts();

//auxiliar variables
$var['data_inicial']=strtotime($var['data_inicial']);
$var['data_final']=strtotime($var['data_final']);
$var['inicio']=strtotime($var['inicio']);
$var['estado']=find_estado($var['activo'],$var['data_inicial'],$var['data_final']);


//execute functions
switch($var['funcao'])
{
	case 'insert':
		$sucess=$passatempos->insert(0,$var['activo'],$var['titulo'],$var['resumo'],$var['data_inicial'],$var['data_final'],$var['param1'],$var['param2'],$var['param3'],$var['param4'],$var['mec'],$var['descricao'],$var['tipo'],$var['desafio'],$var['minimo'],$var['max_participacoes'],$var['regulamento'],$var['agradecimento'],$var['vencedores'],$var['inicio'],$var['mostrar_imagem'],$var['imagem'],'0',$var['estado'],'0','0',$var['r1'],$var['r2'],$var['r3'],$var['r4'],$var['r5'],$va['r6'],$var['viral'],$var['fraseViral']);
	break;
	
	case 'update':
		$sucess=$passatempos->update($var['id'],$var['activo'],$var['titulo'],$var['resumo'],$var['data_inicial'],$var['data_final'],$var['param1'],$var['param2'],$var['param3'],$var['param4'],$var['mec'],$var['descricao'],$var['tipo'],$var['desafio'],$var['minimo'],$var['max_participacoes'],$var['regulamento'],$var['agradecimento'],$var['vencedores'],$var['inicio'],$var['mostrar_imagem'],$var['imagem'],'0',$var['estado'],'0','0',$var['r1'],$var['r2'],$var['r3'],$var['r4'],$var['r5'],$var['r6'],$var['viral'],$var['fraseViral']);
	break;
}
//send variables to template
if(!isset($_GET['id']))
{
	$passatempos=$passatempos->get_all();
}
else
{
	$passatempos=$passatempos->get_one($_GET['id']);
	$passa=$passatempos[0];
}
?>
