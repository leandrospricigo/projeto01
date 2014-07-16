<?php require_once ("../conexao.php"); ?>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>

<?php

// session_start inicia a sessão
session_start();


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
#$hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "select * from usuarios where nome = :usuario";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("usuario",$usuario);
$stmt->execute();
$login = $stmt->fetch(PDO::FETCH_ASSOC);        

$verifica = password_verify($senha,$login['senha']);

if ($usuario == $login['nome'] and $verifica==1){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header("Location: ../admin/painel.php");
}else{
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);
    echo "Usuário ou Senha Inválidos!!!";
    echo '<br>';
    echo "<a href='../admin/login.php'>Voltar..</a>"; 
}

?>
