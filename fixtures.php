<?php

#function criardb(){
 #    $criarbd = shell_exec('mysql -uroot -p1234 projeto01 < projeto01.sql');
#}




function incluirdados(){
   $conexaofix = new \PDO("mysql:host=localhost;dbname=projeto01","root","1234");
    
    
   $stmt = $conexaofix->prepare('delete from produtos');
   $stmt->execute();
   $stmt = $conexaofix->prepare('delete from servicos');
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into produtos(descricao,unidade,valor_unit,qtd_estoque) values('Mouse USB','UN','25','10')");
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into produtos(descricao,unidade,valor_unit,qtd_estoque) values('Teclado USB','UN','20','15')");
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into produtos(descricao,unidade,valor_unit,qtd_estoque) values('Monitor LCD 17','UN','380','5')");
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into produtos(descricao,unidade,valor_unit,qtd_estoque) values('Notebook LG','UN','1500','2')");
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into servicos(descricao,valor) values('Formatacao(sem backup)','80')");
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into servicos(descricao,valor) values('Formatacao(com backup)','120')");
   $stmt->execute();
   $stmt = $conexaofix->prepare("insert into servicos(descricao,valor) values('Limpeza Fisica','50')");
   $stmt->execute();
    
   unset($stmt);
}


?>