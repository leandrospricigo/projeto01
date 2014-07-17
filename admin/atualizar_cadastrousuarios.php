<?php

$idusuario = intval($_REQUEST['idusuario']);
$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$tipo = $_REQUEST['tipo'];
$hash = password_hash($senha, PASSWORD_DEFAULT);


include 'conn.php';

$sql = "update usuarios set nome='$nome',senha='$hash',tipo='$tipo' where idusuario=$idusuario";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao atualizar dados.'));
}
?>