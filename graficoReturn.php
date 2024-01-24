<?php
require_once("classes/Selecao.php");

$ams = new Selecao();
$consulta = $ams->consultaDados();

header('Content-Type: application/json');
echo json_encode($consulta);

?>
