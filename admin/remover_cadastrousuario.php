<?php

$idusuario = intval($_REQUEST['idusuario']);

include 'conn.php';

$sql = "delete from usuarios where idusuario=$idusuario";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>