<?php

$idservicos = intval($_REQUEST['idservicos']);

include 'conn.php';

$sql = "delete from servicos where idservicos=$idservicos";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>