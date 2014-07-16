<?php
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);
    session_destroy(); 


    header("Location: ../admin/login.php");

?>