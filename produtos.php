<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<?php require_once ("conexao.php"); ?>
<?php
$sql = "select * from produtos order by qtd_estoque desc";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$id=5;
$sql_promocao="select descricao,valor_unit from produtos where idprodutos = :id";
$stmt_pro = $conexao->prepare($sql_promocao);
$stmt_pro->bindValue("id",$id);
$stmt_pro->execute();
$promoção = $stmt_pro->fetch(PDO::FETCH_ASSOC);
?>

<h3>Promoção do Dia!!</h3>
<?php
  echo $promoção['descricao']." ->> ".$promoção['valor_unit']."<br>";
?>

<h4>Produtos Disponíveis</h4>
<br>


<?php
echo "<table border='1'>
<tr>
<th>Cod.Produto</th>
<th>Descrição</th>
<th>Unidade</th>
<th>Valor Unit</th>
<th>Qtd Estoque</th>
</tr>";
foreach ($produtos as $produto){
  echo "<tr>";
  echo "<td>" . $produto['idprodutos'] . "</td>";
  echo "<td>" . $produto['descricao'] . "</td>";
  echo "<td>" . $produto['unidade'] . "</td>";
  echo "<td>" . $produto['valor_unit'] . "</td>";
  echo "<td>" . $produto['qtd_estoque'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>

<?php require_once("footer.php"); ?>