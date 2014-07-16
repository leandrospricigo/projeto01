<?php

$idprodutos = intval($_REQUEST['idprodutos']);

include 'conn.php';

$sql = "delete from produtos where idprodutos=$idprodutos";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>