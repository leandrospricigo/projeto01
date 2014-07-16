<?php

$conn = @mysql_connect('127.0.0.1','root','1234');
if (!$conn) {
	die('Não foi possível Conectar: ' . mysql_error());
}
mysql_select_db('projeto01', $conn);

?>