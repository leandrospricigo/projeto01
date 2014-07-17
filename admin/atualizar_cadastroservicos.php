<?php

$idservicos = intval($_REQUEST['idservicos']);
$descricao = $_REQUEST['descricao'];
$valor = $_REQUEST['valor'];

include 'conn.php';

$sql = "update servicos set descricao='$descricao',valor='$valor' where idservicos=$idservicos";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao atualizar dados.'));
}
?>