<?php
try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'];

    require_once 'Classes/Insercao.php';

    $insere = new Insercao();


    if ($resultado = $insere->inserirPergunta($nome, $email, $titulo, $mensagem)) {
        header("Location: index.php?success=1");
        exit;
    } else {
        echo "Não Inserido";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
