<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de Atendimento </title>
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

<body>

    <body>
        <?php require_once 'header.php'; ?>
        <section class="sectionFundo">

            <div class="container-form">
                <form class="row g-3 mold-1">

                    <div class="col-md-12 h-mrg" style="text-align: center;">
                        <h4>DIAS DE ATENDIMENTO</h4>
                    </div>

                    <label class="form-label"></label>
                    <div class="al-1" style="margin-left: 1rem;">
                        <div class="col-md-5">
                            <input type="text" class="form-control form-hgt" id="inputCodProf"
                                placeholder="Digitar código do profisssional">
                        </div>
                        <div>
                            <span class="input-group-btn col-md-2 ">
                            <button class="btn-img2 form-hgt" type="button" id="pesquisaProfissional"><img
                                            src="src/img/lupa.png" style="max-widht:28px; max-height:28px;"></button>
                            </span>

                        </div>
                    </div>



                    <div class="marg-check">
                        <div style="margin: auto; width:45rem" class="al-1">
                            <div class="col-md-2">
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Segunda</label>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Terça</label>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Quarta</label>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Quinta</label>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Sexta</label>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Sábado</label>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Domingo</label>
                            </div>
                        </div>
                    </div>




                    <div class="alinharBtn">

                        <input type="submit" class="btn al-btn-3 btn-form" value="CADASTRAR">
                        <button class="btn al-btn-3 btn-form-2"onclick="window.location.href = 'index.php'">CANCELAR</button>

                    </div>


                </form>
            </div>
        </section>
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
        <script src="src/js/selectImg.js"></script>
        <script src="src/js/main.js"></script>
    </body>

</html>