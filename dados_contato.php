<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>


<h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h4>
<br>
    

Nome -> <?php echo $_POST["nome"]; ?>
<br>
E-mail -> <?php echo $_POST["email"]; ?>
<br>
Assunto -> <?php echo $_POST["assunto"]; ?>
<br>
Mensagem -> <?php echo $_POST["mensagem"]; ?>
<br> 
 
<a href="index.php">Voltar para Home</a>


<?php require_once("footer.php"); ?>