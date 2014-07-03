<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>

<h3>Página de contato</h3>

<?php if(!$_REQUEST['submit']):?>
<form action="dados_contato.php" method="post">

    <fieldset>
        <legend>Preencha os dados!</legend>
        <label>Nome: <input type="text" name="nome"></label>
        <label>Email: <input type="text" name="email"></label>
        <label>Assunto: <input type="text" name="assunto"></label>
        <label>Mensagem: <textarea name="mensagem" rows="10"></textarea></label>
                
    </fieldset>    
            <input type="submit" name="submit" value="Enviar">    
  
 </form>
<?php endif;?>

<?php require_once("footer.php"); ?>
