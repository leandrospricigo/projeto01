<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<div id="conteudo">
	<?php
	 if(!isset($_GET['page']))
	require_once("home.php");
	else
	require_once($_GET['page'].".php");
	?>
</div>
<?php require_once("footer.php"); ?>