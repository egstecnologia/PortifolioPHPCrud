<!-- Topbar Start -->
<div class="container-fluid bg-primary d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark py-2 pe-3 border-end border-white" href=""><i
                            class="bi bi-telephone text-secondary me-2"></i>+55 (75) 9 9999-8888</a>
                    <a class="text-dark py-2 px-3" href=""><i
                            class="bi bi-envelope text-secondary me-2"></i>contato@mecontrate360.com.br</a>
                </div>

            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center ">
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-facebook-f text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-twitter text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-linkedin-in text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="">
                        <i class="fab fa-instagram text-secondary"></i>
                    </a>
                    <a class="text-body py-2 ps-3" href="">
                        <i class="fab fa-youtube text-secondary"></i>
                    </a>

                    <!-- Botão para acionar modal -->
                    <button type="button" style="border: 30px;" class="btn btn-primary ms-5 btn-warning"
                        data-toggle="modal" data-target="#modalExemplo">Login</button>

                    <!-- Modal LOGIN -->
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="POST" action="autenticar.php">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Login</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="al-1" style="margin: 7px;">

                                            <label style="font-size: 20px; width: 100px;" for="">E-mail</label>
                                            <input type="email" class="form-control bg-light border-0" 
                                            placeholder="Informe E-mail" style="height: 35px;" id="loginEmail" name="loginEmail">


                                        </div>
                                        <div class="al-1" style="margin: 7px;">
                                            <label style=" font-size: 20px; width: 100px;" for=""> Senha </label>
                                            <input type="password" class="form-control bg-light border-0"
                                                placeholder="Senha" style="height: 35px;" id="loginSenha" name="loginSenha">
                                        </div>

                                    </div>
                                    <div id="mensagemLogin"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Fechar</button>
                                        <button class="btn btn-primary">Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <!-- Acrescentei a div para arrumar a logo no padão do nosso css -->
    <div class="logo">
        <a href="index.php" class="navbar-brand p-0">
            <img src="src/img/mecontrate360.png" alt="Logo">
            <h1 class="m-0 text-uppercase text-primary menu">Me Contrate 360</h1>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="#" class="nav-item nav-link active">Como Funciona</a>
            <a href="formularioCliente.php" class="nav-item nav-link">Procuro Serviço</a>
            <a href="formularioProfissional.php" class="nav-item nav-link">Quero Trabalhar</a>
            <a href="formularioServico.php" class="nav-item nav-link">Cadastrar Categoria</a>
            <a href="consulta.php" class="nav-item nav-link">Consultar Profissionais</a>
            <a href="grafico.php" class="nav-item nav-link">Gráfico</a>

            <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
        </div>
        <div class="d-none d-lg-flex align-items-center ps-4">
            <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
            <div>
                <h5 class="text-primary mb-1"><small>Suporte</small></h5>
                <h6 class="text-light m-0">+55 (75) 9 9999-8888</h6>
            </div>
        </div>
    </div>
</nav>