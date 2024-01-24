<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereços</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Me Contrate 360" name="keywords">
    <meta content="Me Contrate 360" name="description">

    <!-- Favicon -->
    <link href="src/img/mecontrate360.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

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
            <h3>CADASTRO DE ENDEREÇOS</h3>
            <div class="container-form">
                <form class="row g-3">
                    <div>
                        <fieldset>
                            <div class="alinhaAoLado">
                                <div class="alinhaAoLado">
                                    <label for="inputCodCli" class="form-label">Cód. Cliente</label>
                                    <input type="text" class="form-control" id="inputCodCli">

                                    <label for="inputCodPro" class="form-label">Cód. Profissional</label>
                                    <input type="text" class="form-control" id="inputCodPro">

                                    <label for="inputTitulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="inputTitulo">
                                </div>
                        </fieldset>

                        <fieldset>
                            <div class="alinhaAoLado">
                                <label for="inputEndereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="inputEndereco" placeholder="">

                                <label for="inputNumero" class="form-label">Numero</label>
                                <input type="text" class="form-control" id="inputNumero" placeholder="">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="alinhaAoLado">
                                <label for="inputComplemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="inputComplemento" placeholder="">

                                <label for="inputReferencia" class="form-label">Referência</label>
                                <input type="text" class="form-control" id="inputReferencia" placeholder="">

                                <label for="inputBairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="inputBairro" placeholder="">

                            </div>
                        </fieldset>
                        <fieldset>
                        <div class="alinhaAoLado">
                            <label for="inputCodMun" class="form-label">Cód. Municipio</label>
                            <input type="text" class="form-control" id="inputCodMun" placeholder="">
                        
                            <label for="inputCidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="inputCidade" placeholder="">
                        
                            <label for="inputUf" class="form-label">UF</label>
                            <select id="inputUf" class="form-select">
                                <option selected>BA</option>
                                <option>PE</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div>
                <button type="button" class="btn btn-success">CADASTRAR</button>
                <button type="button" class="btn btn-light" href="../index.php">CANCELAR</button>
            </div>
            <br>
            
            </form>

        </div>


    </section>
    <?php require_once './footer.php'; ?>
    <!-- JavaScript Libraries -->
    <script src="src/js/jsForm.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="src/lib/easing/easing.min.js"></script>
    <script src="src/lib/waypoints/waypoints.min.js"></script>
    <script src="src/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="src/js/selectImg.js"></script>
    <script src="src/js/main.js"></script>
</body>

</html>