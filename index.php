<?php require_once ("funcoes.php"); ?>
<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<?php require_once("fixtures.php"); ?>
<?php 
if (file_exists($path)) {
echo 'existe'; 
}
?>

<?php
#criardb();
incluirdados();
?>
<div id="conteudo">
	<?php require_once(arquivo()); ?>
</div>
<?php require_once("footer.php"); ?>