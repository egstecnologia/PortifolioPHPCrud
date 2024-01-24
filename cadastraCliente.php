<?php

require_once "Classes/Insercao.php";

$insere = new Insercao();

$nome = $_POST["inputNome"];
$fantasia = $_POST["inputFantasia"];
$tipo = $_POST["inputTipo"];

$cpf_cnpj = $_POST["inputCpfCnpj"];
$dataNasc = $_POST["inputNascimento"];
$genero = $_POST["inputGenero"];
$login = $_POST["inputLogin"];
$senha = $_POST["inputSenha"];
$data_cad = date("Y-m-d");

$insere->inserirCliente(login:$login, senha:$senha, nome:$nome, tipo_p:$tipo, cpf_cnpj:$cpf_cnpj, razao_social:$fantasia, sexo:$genero, foto:"", data_cad:$data_cad, data_nasc:$dataNasc);

?>
