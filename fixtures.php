<?php

function criardb(){
     $criarbd = shell_exec('mysql -uroot -p1234 projeto01 < projeto01.sql');
}

?>