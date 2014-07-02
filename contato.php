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