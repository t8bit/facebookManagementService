<?php
class participacoes extends db
{
	function __construct()
	{
		$this->connect();
	}
	
	function get_all($id)
	{
		$query="SELECT perfil,nome,email,localidade,data_nascimento,resposta,data_participacao,ip,votos,vencedor,publico from participacoes WHERE id_passatempo='$id'";
		$data=$this->get($query);
		return $data;
	}
	
	function get_one($id)
	{
		$query="SELECT * FROM participacoes WHERE id_passatempo='$id'";
		$data=$this->get($query);
		return $data;
	}
	
	function search($search_word)
	{
		$query="SELECT * FROM `participacoes` WHERE nome LIKE '%".$search_word."%' OR resposta LIKE '%".$search_word."%' OR email LIKE '%".$search_word."%'";
		$data=$this->get($query);
		return $data;
	}
}
$participacoes=new participacoes();
$data=$participacoes->get_all($_GET['id']);
?>
