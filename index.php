<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
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

    


</head>

<body>

    <?php require_once './header.php'; ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-10 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Serviços de Excelência,</h1>
                    <p class="fs-4 text-dark mb-4">Clientes Satisfeitos</p>
                    <div class="pt-3" style="width: 400rem;">
                        <a href="formularioCliente.php" class="btn btn-warning rounded-pill py-md-3 px-md-5 mx-2">Procuro Serviço</a>
                        <a href="formularioProfissional.php" class="btn btn-warning rounded-pill py-md-3 px-md-5 mx-2">Quero Trabalhar</a>
                        <a href="formularioServico.php" class="btn btn-warning rounded-pill py-md-3 px-md-5 mx-2">Cadastrar Categoria</a>
                        <a href="consulta.php" class="btn btn-warning rounded-pill py-md-3 px-md-5 mx-2">Consultar Profissionais</a>
                        <a href="grafico.php" class="btn btn-warning rounded-pill py-md-3 px-md-5 mx-2">Gráfico</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start bg-primary p-5">
                        <h1 class="display-5 mb-4">Bem-vindo ao nosso portal de serviços!</h1>
                        <p> Estamos aqui para tornar a sua vida mais fácil. Explore nossos serviços e descubra como podemos atender às suas necessidades.
                            Com profissionais dedicados e experientes, estamos prontos para fornecer soluções sob medida para você. Conte conosco para
                            conectar você e excelentes prestadores de serviços que entregarão resultados excepcionais.
                            Seja bem-vindo à nossa comunidade de clientes satisfeitos!</p>
                        <!-- <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a> -->
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="src/img/about-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="src/img/about-2.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end bg-primary p-5">
                        <h1 class="display-5 mb-4">Sobre nós</h1>
                        <p>Acreditamos que a chave para o nosso sucesso está em construir relacionamentos sólidos e de confiança entre prestadores
                            de serviço com o clientes. Estamos aqui para disseminar de um
                            modo facil os prestadores de serviços e obrigado por escolher nossa plataforma para suas necessidades de serviço.
                            Ficamos felizes por você e mostrar como podemos fazer a diferença em sua vida ou negócio! </p>
                        <!-- <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Get A Quote</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Serviços profissionais</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row gy-4 gx-3">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Eletricista</h3>
                        <a class="btn shadow-none text-secondary" href="">Veja mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h3 class="mt-5">Pedreiro</h3>
                        <a class="btn shadow-none text-secondary" href="">Veja mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Encanador</h3>
                        <a class="btn shadow-none text-secondary" href="">Veja mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Developer</h3>
                        <a class="btn shadow-none text-secondary" href="">Veja mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h3 class="mt-5">Marceneiro</h3>
                        <a class="btn shadow-none text-secondary" href="">Veja mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h3 class="mt-5">Pintor</h3>
                        <a class="btn shadow-none text-secondary" href="">Veja mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <div class="modal fade" id="modalAviso" tabindex="-1" role="dialog"
                        aria-labelledby="modalAviso" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class='alert alert-success' role='alert'> A simple success alert—check it out! </div>
                        </div>
                    </div>

    <!-- Quote Start -->
    <div class="container-fluid bg-primary bg-quote py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <div class="bg-white text-center p-5">
                        <h1 class="mb-4">Faça uma pergunta!</h1>
                        <form action="inserePergunta.php" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" id="nome" name="nome" placeholder="Nome" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Email" style="height: 55px;">
                                </div>
                                <div>
                                    <input type="text" class="form-control bg-light border-0" id="titulo" name="titulo" placeholder="Título">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 py-3" rows="2" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar mensagem</button>
                                </div>
                                <?php
                                if (isset($_GET['success']) && $_GET['success'] == 1) {
                                    echo "<script type='text/javascript'>
                                    var myModal = new bootstrap.Modal(document.getElementById('modalAviso'), {backdrop:'static'});
                                    myModal.show();
                                    </script>
                                    ";
                                    //echo "<script type='text/javascript'>Dados inseridos com sucesso!</script>";
                                    //echo "<div class='alert alert-success' role='alert'> A simple success alert—check it out! </div>";
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    

    <?php require_once './footer.php'; ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="src/lib/easing/easing.min.js"></script>
    <script src="src/lib/waypoints/waypoints.min.js"></script>
    <script src="src/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="src/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>