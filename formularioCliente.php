<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Cadastro de Cliente</title>
    <title>Me Contrate 360</title>
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
        <div class="">

            <div class="container-form">
                <form class="row g-3 mold-1" id="formCliente">

                    <div class="alinhaTitulo">
                        <div class="col-md-2">
                            <label class="picture" for="pictureInput" tabindex="0">
                                <span class="pictureImg"></span>
                            </label>
                            <input type="file" name="pictureInput" id="pictureInput">
                            <!-- <input type="file" name="pictureImg" id="pictureImg"> -->
                        </div>
                        <div class="col-md-9" style="text-align: center;">
                            <h4>CADASTRO DE CLIENTE</h4>
                        </div>
                    </div>

                    <div>
                        <div>                            
                                <div class="alinhaAoLado">
                                    <div class="col-md-2">
                                        <label for="inputCodigo" class="form-label">Código</label>
                                        <input style="width: 9rem;" type="text" class="form-control" id="inputCodigo">
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputNome" class="form-label">Nome/Razao</label>
                                        <input type="text" class="form-control" id="inputNome" name="inputNome">
                                    </div>
                                </div>
                                <div class="alinhaAoLado">
                                    <div class="col-md-12">
                                        <label for="inputFantasia" class="form-label">Apelido /Fantasia</label>
                                        <input type="text" class="form-control" id="inputFantasia" name="inputFantasia" placeholder="">
                                    </div>
                                </div>

                                <div class="alinhaAoLado">
                                    <div class="col-md-3">
                                        <label for="inputTipo" class="form-label">Tipo/Pessoa</label>
                                        <select id="inputTipo" class="form-select" name="inputTipo">
                                            <option selected>Física</option>
                                            <option>Jurídica</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCpfCnpj" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="inputCpfCnpj" name="inputCpfCnpj" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputNascimento" class="form-label">Data Nascim.</label>
                                        <input type="date" class="form-control" id="inputNascimento" name="inputNascimento">
                                    </div>
                                </div>                          

                            
                                <div class="alinhaAoLado">
                                    <div class="col-md-3">
                                        <label for="inputGenero" class="form-label">Gênero</label>
                                        <select id="inputGenero" class="form-select" name="inputGenero">
                                            <option selected>Masculino</option>
                                            <option>Feminino</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputLogin" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="inputLogin" name="inputLogin">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="iinputSenha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="inputSenha" name="inputSenha">
                                    </div>
                                </div>
                            
                        </div>
                        <div class="alinharBtn">

                            <input type="submit" class="btn al-btn btn-form" value="CADASTRAR">
                            <button class="btn al-btn btn-form-2" onclick="window.location.href = 'index.php'">CANCELAR</button>

                        </div>
                    </div>
            </div>
        </div>
        </form>
        </div>
    </section>
    <?php require_once './footer.php'; ?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="src/js/jsForm.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

    <script src="src/js/insereCliente.js"></script>

</body>

</html>