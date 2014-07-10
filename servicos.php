<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>

<?php require_once ("conexao.php"); ?>
<?php
$sql = "select * from servicos order by descricao desc";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h3>Serviços Oferecidos</h3>
<br>

<?php
echo "<table border='1'>
<tr>
<th>Codigo</th>
<th>Descrição</th>
<th>Valor</th>
</tr>";
foreach ($servicos as $servico){
  echo "<tr>";
  echo "<td>" . $servico['idservicos'] . "</td>";
  echo "<td>" . $servico['descricao'] . "</td>";
  echo "<td>" . $servico['valor'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>
<?php require_once("footer.php"); ?>