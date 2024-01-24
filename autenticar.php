<?php 
require_once("Classes/Selecao.php");
@session_start();

$email = @$_POST['loginEmail'];
$senha = @$_POST['loginSenha'];

$selecao = new Selecao();

$consulta = $selecao->checkUsuario($email, $senha);

if (count($consulta) > 0) {
    $_SESSION['id'] = $consulta[0]['id'];
    $_SESSION['email'] = $consulta[0]['email'];
    echo "<script language='javascript'>window.location='index.php'</script>";
}
else {
    echo "<script language='javascript'>window.alert('Dados Incorreto')</script>";
    echo "<script language='javascript'>window.location='index.php'</script>";
}


?>
