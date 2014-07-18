<?php

function arquivo()
{
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = str_replace("/","",$rota['path']);
$paginas = ['home','produtos','servicos','contato','empresa'];

$key = array_search($path, $paginas);

if ($key > 0){
      $pagina = $path.".php";
    
}else{
  $pagina = "home.php";
}
 return $pagina;
}


?>
