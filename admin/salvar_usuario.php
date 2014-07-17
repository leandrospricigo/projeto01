<?php

$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$tipo = $_REQUEST['tipo'];
$hash = password_hash($senha, PASSWORD_DEFAULT);

include 'conn.php';

$sql = "insert into usuarios(nome,senha,tipo) values('$nome','$hash','$tipo')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Erro ao inserir dados.'));
}
?>