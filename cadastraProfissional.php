<?php

require_once "Classes/Insercao.php";

$insere = new Insercao();

$nome = $_POST["inputNome"];
$fantasia = $_POST["inputFantasia"];
$tipo = $_POST["inputTipo"];

$cpf_cnpj = $_POST["inputCpfCnpj"];
$dataNasc = $_POST["inputNascimento"];
$placa = $_POST["inputNascimento"];
$categoria = $_POST["inputCategoria"];
$genero = $_POST["inputGenero"];
$login = $_POST["inputLogin"];
$senha = $_POST["inputSenha"];
$descricao = $_POST["inputDescricao"];
$categoria = $_POST["inputCategoria"];
$telefone = $_POST["inputTelefone"];
$endereco = $_POST["inputEndereco"];
$cidade = $_POST["inputCidade"];
$data_cad = date("Y-m-d");
$nome_arquivo = null;

// Recupera o arquivo
$arquivo = $_FILES["pictureInput"];

//exit;
$error = [];

// Se o arquivo estiver sido selecionado
if (!empty($arquivo["name"])) {

  // Tamanho máximo do arquivo em bytes
  $tamanho = 25000000;
  
  // Verifica se o tamanho do arquivo é maior que o tamanho permitido
  if($arquivo["size"] > $tamanho) {
    $error[4] = "O arquivo deve ter no máximo ".$tamanho." bytes";
  }
  
  // Se não houver nenhum erro
  if (count($error) == 0) {
  
    // Pega extensão do arquivo
    preg_match("/\.(jpg|jpeg|png|jfif){1}$/i", $arquivo["name"], $ext);
    
    if($ext[1] == "jpg" || $ext[1] == "jpeg" || $ext[1] == "png" || $ext[1] == "jfif"){
    
      // Gera um nome único para o arquivo
      $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
      
      // Caminho de onde ficará o arquivo
      $caminho_arquivo = "src/img/profissionais/" . $nome_arquivo;
      
      // Faz o upload do arquivo para seu respectivo caminho
      move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);
    } else {
      echo "O arquivo precisa estar no formato '.jpg', 'jpeg' ou '.rar'e ter no máximo 25Mb."; 
      echo "<a href='index.php'>VOLTAR</a>";
      exit;
    }
  }
}

$retorno = $insere->inserirProfissional(login:$login, senha:$senha, nome:$nome, tipo_p:$tipo, cpf_cnpj:$cpf_cnpj, cnae:0, razao_social:$fantasia, data_nascimento:$dataNasc, sexo:$genero, placa_veicular:$placa, descricao_prof:$descricao, foto:$nome_arquivo, categoria:$categoria, telefone:$telefone, endereco:$telefone, cidade:$cidade, data_cad:$data_cad);

?>