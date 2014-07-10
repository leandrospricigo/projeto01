<?php

try
{
    $conexao = new \PDO("mysql:host=localhost;dbname=projeto01","root","1234");
} catch (\PDOException $e) {
  die("Erro código: ".$e->getCode().": ".$e->getMessage());
}

?>