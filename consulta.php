<?php

require_once("Classes/Selecao.php");
require_once("validar.php");

$selecao = new Selecao();

$cidade = @$_POST['comboCidade'];
$categoria = @$_POST['inputCategoria'];
$query_array = $selecao->selecionarFuncionarios($cidade, $categoria);

$query_cidade = $selecao->selecionarCidades();
$query_categ = $selecao->selecionarCateg();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Consultar Profissionais</title>
    <title>Me Contrate 360</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Me Contrate 360" name="keywords">
    <meta content="Me Contrate 360" name="description">

    <!-- Favicon -->
    <link href="src/img/mecontrate360.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="src/libowlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="src/css/style.css" rel="stylesheet">
    <!-- CSS Eric -->
    <link href="src/css/estiloHome.css" rel="stylesheet">
    <link href="src/css/styleForm.css" rel="stylesheet">
</head>

<body>
    <?php require_once 'header.php'; ?>
    <section class="sectionFundo">
        <div>
            <div class="container-form">
                <form class="row g-3 mold-1" method="POST" action="consulta.php">

                    <div class="col-md-12 h-mrg" style="text-align: center;">
                        <h4 style="margin-bottom: 2rem;">CONSULTAR PROFISSIONAIS</h4>
                    </div>

                    <div class="container">
                        <div class="col-md-12 al-2">

                            <div class="col-md-4">
                                <label for="inputCidade" class="form-label">Cidade</label>
                                <select style="margin: 0px;" class="form-select form-hgt" id="comboCidade"
                                    name="comboCidade">
                                    <?php if (count($query_cidade) > 0) { ?>
                                        <?php for ($i = 0; $i < count($query_cidade); $i++) { ?>
                                            <option value="<?php echo $query_cidade[$i]['cidade'] ?>" selected>
                                                <?php echo $query_cidade[$i]['cidade'] ?>
                                            </option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="inputCategoria" class="form-label">Categoria</label>
                                <select style="margin-left: 20px;" name="inputCategoria" id="inputCategoria"
                                    class="form-select form-hgt">
                                    <?php if (count($query_categ) > 0) { ?>
                                        <?php for ($i = 0; $i < count($query_categ); $i++) { ?>
                                            <option value="<?php echo $query_categ[$i]['categorias'] ?>" selected>
                                                <?php echo $query_categ[$i]['categorias'] ?>
                                            </option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>



                            <!-- <div class="col-md-0">
                                <label for="inputCategoria" class="form-label"></label>
                            </div> -->

                            <div class="col-md-1">
                                <span class="input-group-btn">
                                    <button style="margin-top: 38px; margin-left: 2rem;" class="btn-img2 form-hgt"
                                        type="submit" id=""><img src="src/img/lupa.png"
                                            style="max-widht:28px; max-height:28px;"></button>
                                </span>
                            </div>



                        </div>
                        </br>
                        </br>
                    </div>
            </div>
            </form>
            <div class="container-form">
                <?php if (count($query_array) > 0) { ?>

                    <div class="row row-cols-3 row-cols-md-4 g-4">
                        <?php for ($i = 0; $i < count($query_array); $i++) { ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="src/img/profissionais/<?php echo $query_array[$i]['foto']; ?>"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $query_array[$i]['nome'] ?>
                                        </h5>
                                        <p class="card-text">
                                            <?php echo $query_array[$i]['descricao_prof'] ?>
                                        </p>
                                        <p class="card-text">
                                            <?php echo $query_array[$i]['email'] ?>
                                        </p>
                                        <button data-bs-toggle="modal" data-bs-target="#modalProf_<?php echo $query_array[$i]['id'] ?>"
                                            class="btn btn-primary">VER NA TELA</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" tabindex="-1" id="modalProf_<?php echo $query_array[$i]['id'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="labelPrinc" class="modal-title">VE PORFISIONAL</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" id="form">
                                            <div class="modal-body">

                                                <div class="col-md-12 mb-1">
                                                    <label for="nome" class="form-label">Nome</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $query_array[$i]['nome']; ?>" id="nome" name="nome"
                                                        required="">
                                                </div>

                                                <div class="col-md-12 mb-1">
                                                    <label for="nome" class="form-label">Endereço</label>
                                                    <input type="text" class="form-control" value="<?php echo $query_array[$i]['endereco'];?>" id="endereco" name="endereco">
                                                </div>

                                                <div class="row mb-1">
                                                    <div class="col-md-6">
                                                        <label for="nome" class="form-label">Cidade</label>
                                                        <input type="text" class="form-control" value="<?php echo $query_array[$i]['cidade'];?>" id="cidade" name="cidade">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="nome" class="form-label">Função</label>
                                                        <input type="text" class="form-control" value="<?php echo $query_array[$i]['categorias'];?>" id="bairro" name="bairro">
                                                    </div>
                                                </div>

                                                <small>
                                                    <div align="center" class="mt-1" id="mensagem"></div>
                                                </small>

                                            </div>
                                            <div class="modal-footer">
                                                <button name="btn-salvar" id="btn-salvar" type="submit"
                                                    class="btn btn-primary">Salvar</button>
                                                <input type="hidden" value="<?php echo $query_array[$i]['id']?>" id="idProf" name="idProf"> <!-- Campo Oculto ID --->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>



                <?php } else { ?>
                <h6>NAO TEM DADO</h6>
                <?php } ?>
            </div>





            <div class="alinharBtn">
                <button class="btn al-btn-3 btn-form-2" onclick="volta()">SAIR</button>
            </div>






        </div>

        </div>

        <?php
        if (@$_GET['funcao'] == "verProf") {
            $consulta = $selecao->selecionarFuncForm($_GET['id']);
            $tipo_p = $consulta[0]['tipo_p'];
            $cpf_cnpj = $consulta[0]['cpf_cnpj'];
            $data_nascimento = $consulta[0]['$data_nascimento'];
            $placa_veicular = $consulta[0]['placa_veicular'];
            $sexo = $consulta[0]['sexo'];
            $email = $consulta[0]['email'];
            $telefone = $consulta[0]['telefone'];
            $descricao_prof = $consulta[0]['descricao_prof'];
        }
        ?>

    </section>

    <script>
        function volta() {
            //console.log('AQUI');
            window.location.href = 'index.php';
        }
    </script>

    <script>
        function showDetails(id) {
            //console.log(id);
            // Obtenha os dados do registro correspondente
            /*var row = $('#data').find('a[data-id="' + id + '"]').closest('tr');
            var id = row.find('td:eq(5)').text();
            var nome = row.find('td:eq(1)').text();
            var endereco = row.find('td:eq(2)').text();
            var cidade = row.find('td:eq(3)').text();
            var bairro = row.find('td:eq(4)').text();
            // Aqui ele preenche o modal
            $('#labelPrinc').text('Editanto Cliente: ' + nome);
            $('#idCliente').val(id);
            $('#nome').val(nome);
            $('#endereco').val(endereco);
            $('#cidade').val(cidade);
            $('#bairro').val(bairro);

            $('#modalCadastrar').modal('show'); // Mostra o modal/*
        }
    </script>

    <?php require_once './footer.php'; ?>
    <!-- JavaScript Libraries -->
    <script src="src/js/jsForm.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="src/lib/easing/easing.min.js"></script>
    <script src="src/lib/waypoints/waypoints.min.js"></script>
    <script src="src/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="src/js/main.js"></script>

</body>

</html>