<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
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
            <h3>CADASTRO DE PROFISSIONAL</h3>
            <label class="picture" for="pictureInput" tabindex="0">
                <span class="pictureImg"></span>
            </label>
            <input type="file" name="pictureInput" id="pictureInput">
            <!-- <input type="file" name="pictureImg" id="pictureImg"> -->
            <div class="container-form">
                <form class="row g-3" id="formProfissional">
                    <div>
                        <div>
                            <div>
                                <fieldset>
                                    <div class="alinhaAoLado">
                                        <label for="inputCodigo" class="form-label">Cod.</label>
                                        <input type="text" class="form-control" name="inputCodigo" id="inputCodigo">

                                        <label for="inputTipo" class="form-label">Tipo/Pessoa</label>
                                        <select name="inputTipo" id="inputTipo" class="form-select">
                                            <option selected>Física</option>
                                            <option>Jurídica</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <div>
                                    <label for="inputNome" class="form-label">Nome / Razao</label>
                                    <input type="text" class="form-control" name="inputNome" id="inputNome">
                              
                                    <label for="inputFantasia" class="form-label">Apelido /Fantasia</label>
                                    <input type="text" class="form-control" name="inputFantasia" id="inputFantasia" placeholder="">
                                </div>

                                <fieldset>
                                    <div class="alinhaAoLado">
                                        <label for="inputCpfCnpj" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" name="inputCpfCnpj" id="inputCpfCnpj" placeholder="">

                                        <label for="inputNascimento" class="form-label">Data Nascim.</label>
                                        <input type="date" class="form-control" name="inputNascimento" id="inputNascimento">

                                        <label for="inputPlaca" class="form-label">Placa Veicular</label>
                                        <input type="text" class="form-control" name="inputPlaca" id="inputPlaca" placeholder="">

                                    </div>

                                    <div class="alinhaAoLado">
                                        <label for="inputCategoria" class="form-label">Categoria de Serviço</label>
                                        <select name="inputCategoria" id="inputCategoria" class="form-select">
                                            <option selected>Categoria1</option>
                                            <option>Categoria2</option>
                                            <option>Outros</option>
                                        </select>
                                        <label for="inputGenero" class="form-label">Gênero</label>
                                        <select name="inputGenero" id="inputGenero" class="form-select">
                                            <option selected>Masculino</option>
                                            <option>Feminino</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="alinhaAoLado">
                                        <label for="inputLogin" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="inputLogin" id="inputLogin">

                                        <label for="inputSenha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="inputSenha" id="inputSenha">
                                    </div>
                                </fieldset>

                                <div>
                                    <label for="inputDescricao" class="form-label">Descrição do Profissional</label>
                                    <textarea class="form-control" name="inputDescricao" id="inputDescricao" rows="3"></textarea>
                                </div>
                                <fieldset>
                                    <!-- <p>Formas de pagamento:</p> -->
                                    <div>
                                        <label for="inputLogin" class="form-label">Formas de Recebimento:</label>
                                        <input type="checkbox" value="" id="flexDin">
                                        <label for="flexDin">Dinheiro</label>

                                        <input type="checkbox" value="" id="flexPix" checked>
                                        <label for="flexPix">PIX</label>

                                        <input type="checkbox" value="" id="flexCart">
                                        <label for="flexCart">Cartão</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-success" value="CADASTRAR">
                                <a class="btn btn-light" href="index.php" value="CANCELAR">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </section>
    <?php require_once './footer.php'; ?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="src/js/jsForm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="src/lib/easing/easing.min.js"></script>
    <script src="src/lib/waypoints/waypoints.min.js"></script>
    <script src="src/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="src/js/selectImg.js"></script>
    <script src="src/js/main.js"></script>
    <script src="src/js/insereProfessional.js"></script>
    

</body>

</html>