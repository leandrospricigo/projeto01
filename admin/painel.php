 <?php 
             session_start(); 
             if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) 
                 { 
                    unset($_SESSION['usuario']); 
                    unset($_SESSION['senha']); 
                    header('location:../admin/login.php'); 
                    
                 }
                    $logado = $_SESSION['usuario']; 
?>

<?php require_once("../admin/cabecalho.php"); ?>
  <tr>
        <td height="90" colspan="2" bgcolor="#CCCCCC">
            PAINEL DE CONTROLE
       </td>
      </tr>
    <tr>
<?php require_once("../admin/menu.php"); ?>
        <td width="546">
            CONTEUDO
        </td>
    </tr>
<?php require_once("../admin/rodape.php"); ?>



