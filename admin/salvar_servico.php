<?php

$descricao = $_REQUEST['descricao'];
$valor = $_REQUEST['valor'];

include 'conn.php';

$sql = "insert into servicos(descricao,valor) values('$descricao','$valor')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao inserir dados.'));
}
?>