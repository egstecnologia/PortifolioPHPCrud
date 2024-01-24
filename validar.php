<?php 
@session_start();

//VERIFICAR PERMISSÃO DO USUÁRIO
if(@$_SESSION['email'] == "") {
   echo "<script language='javascript'>window.location='index.php'</script>";
}


?>
