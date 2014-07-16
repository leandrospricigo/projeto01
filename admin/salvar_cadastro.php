<?php

$descricao = $_REQUEST['descricao'];
$unidade = $_REQUEST['unidade'];
$valor_unit = $_REQUEST['valor_unit'];
$qtd_estoque = $_REQUEST['qtd_estoque'];

include 'conn.php';

$sql = "insert into produtos(descricao,unidade,valor_unit,qtd_estoque) values('$descricao','$unidade','$valor_unit','$qtd_estoque')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao inserir dados.'));
}
?>