<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<?php require_once ("conexao.php"); ?>
<?php
$buscar=$_POST['buscar'];

if (empty($buscar)) {
   header("Location: /home.php"); 
}

$stmt_produtos = $conexao->prepare('select * from produtos where descricao like ?');
$stmt_produtos->bindValue(1,"%$buscar%",PDO::PARAM_STR);
$stmt_produtos->execute();
$produtos = $stmt_produtos->fetchAll(PDO::FETCH_ASSOC);

$stmt_servicos = $conexao->prepare('select * from servicos where descricao like ?');
$stmt_servicos->bindValue(1,"%$buscar%",PDO::PARAM_STR);
$stmt_servicos->execute();
$servicos = $stmt_servicos->fetchAll(PDO::FETCH_ASSOC);


if (!empty($produtos)) {
    echo "<a href='produtos.php'>Produtos Encontrados:</a>"; 
    echo ('<br>');   
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

   
}else{
  echo("Nenhum Produto encontrado!") ;
}
    
echo "<br>";

if (!empty($servicos)){
    echo "<a href='servicos.php'>Serviços Encontrados:</a>"; 
    echo ('<br>');  
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
}else{
    echo("Nenhum Serviço encontrado!");
}




?>


<?php require_once("footer.php"); ?>