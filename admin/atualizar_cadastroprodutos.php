<?php

$idprodutos = intval($_REQUEST['idprodutos']);
$descricao = $_REQUEST['descricao'];
$unidade = $_REQUEST['unidade'];
$valor_unit = $_REQUEST['valor_unit'];
$qtd_estoque = $_REQUEST['qtd_estoque'];

include 'conn.php';

$sql = "update produtos set descricao='$descricao',unidade='$unidade',valor_unit='$valor_unit',qtd_estoque='$qtd_estoque' where idprodutos=$idprodutos";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao atualizar dados.'));
}
?>