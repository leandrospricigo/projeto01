<?php
    session_start(); 
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);
    session_destroy(); 

   # $backupdb = shell_exec('mysqldump -uroot -p1234 projeto01 > ../projeto01.sql');
    header("Location: ../admin/login.php");

?>