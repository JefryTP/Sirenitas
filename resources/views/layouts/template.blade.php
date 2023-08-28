<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Las Sirenitas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!--link href="../../../public/styles.css" rel="stylesheet" /-->
        <link rel="stylesheet" href="{{ asset('styles.css') }}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top menu-bar" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Las Sirenitas</a>
                <button class="navbar-toggler font-weight-bold bg-yellow text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse text-uppercase" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Carta</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Ubicanos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Reserva</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#takeout">Takeout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center fondo" style="background-image: url('{{ asset('assets/img/portada_cevicheria.jpg') }}'); background-size: cover; background-position: center;">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-2" src="{{ asset('assets/img/nuevo_logo.png') }}" alt="..."/>
                
                <!-- Masthead Heading-->
                <h1 class="masthead-heading  mb-0">Las Sirenitas</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light letra">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star" style="color: #a38633;"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0 letra"><b>Restaurante Marino</b></p>
            </div>
            <div class="overlay"></div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio " id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Menú</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/arroz_mariscos.jpg') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/ceviche.jpg') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/cabrilla.png') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/jalea.png') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/leche-tigre.png') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/sopa.png') }}" alt="..." />
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section text-white mb-0 ubicanos" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Ubicanos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 me-auto">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.745168791926!2d-77.06083439304143!3d-11.975838921545439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce4a73a749b5%3A0x6d47d4c9d6f27266!2sLas%20Sirenitas!5e0!3m2!1ses-419!2spe!4v1692480375654!5m2!1ses-419!2spe" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-4 ms-auto"><p class="lead">• CEVICHERIA: <br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;"Las Sirenitas"<br><br>
                      • DIRECCION: <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;Av. Gerardo Unger 5059,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Los Olivos 15311 <br><br>
                      • TELEFONOS: <br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;901-897-430 <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;924-457-654 <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;902-531-332 <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;943-522-944 <br>
                      </p></div>
                </div>
                <!-- About Section Button-->
                <!--div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="#">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </!--div-->
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section contact" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Reserva</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" action="{{ route('reservas.store') }}" method="POST">
                            @csrf
                            <!-- Name input    data-sb-form-api-token="API_TOKEN"     -->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Ingrese su nombre..." data-sb-validations="required" />
                                <label for="name">Nombre</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nombre es requerido.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ape_pat" id="ape_pat" type="text" placeholder="Ingrese su apellido paterno..." data-sb-validations="required" />
                                <label for="ape_pat">Apellido Paterno</label>
                                <div class="invalid-feedback" data-sb-feedback="ape_pat:required">Nombre es requerido.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ape_mat" id="ape_mat" type="text" placeholder="Ingrese su apellido materno..." data-sb-validations="required" />
                                <label for="ape_mat">Apellido Materno</label>
                                <div class="invalid-feedback" data-sb-feedback="ape_mat:required">Nombre es requerido.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo Electronico</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Correo es requerido.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Correo invalido.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control sin-scroll" name="phone" id="phone" type="number" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numero de Telefono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere el numero de telefono es requerido.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="num_persona" id="num_persona" type="number" placeholder="Ingrese el numero de personas..." data-sb-validations="required" />
                                <label for="num_persona">Numero de personas</label>
                                <div class="invalid-feedback" data-sb-feedback="num_persona:required">Se requiere el numero de personas.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Reservación realizada exitosamente.</div>
                                    
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="divider-custom">
            <div class="divider-custom-line2"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line2"></div>
        </div>
        <!-- Takeout Section-->
        <section class="page-section" id="takeout">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">TakeOut</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" action="{{ route('pedidos.store') }}" method="POST">
                            @csrf
                            <!-- Name input    data-sb-form-api-token="API_TOKEN"     -->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Ingrese su nombre..." data-sb-validations="required" />
                                <label for="name">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ape_pat" id="ape_pat" type="text" placeholder="Ingrese su apellido paterno..." data-sb-validations="required" />
                                <label for="ape_pat">Apellido Paterno</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="ape_mat" id="ape_mat" type="text" placeholder="Ingrese su apellido materno..." data-sb-validations="required" />
                                <label for="ape_mat">Apellido Materno</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo Electronico</label>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control sin-scroll" name="phone" id="phone" type="number" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numero de Telefono</label>
                            </div>
                            <!-- Message input-->
                            <div style="margin-top: 40px; margin-bottom:40px">
                                <label for="platillo" style="margin-right: 15px;">Escoge su platillo:</label>
                                    <select id="platillo" name="platillo">
                                        <option value="1" selected>Arroz con mariscos</option>
                                        <option value="2">Cabrilla</option>
                                        <option value="3">Ceviche</option>
                                        <option value="4">Jalea</option>
                                        <option value="5">Leche de Tigre</option>
                                        <option value="6">Parihuela</option>
                                    </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="cantidad" id="cantidad" type="number" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="cantidad">Ingrese cantidad</label>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Reservación realizada exitosamente.</div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 d-flex">
                        <img class="mb-5 logo-inferior" src="{{ asset('assets/img/nuevo_logo.png') }}" alt="..."/>
                        <div class="texto-img">
                            <p>Las Sirenitas.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localizacion</h4>
                        <p class="lead mb-0">
                            Av. Gerardo Unger 5059, 
                            <br />
                            Los Olivos 15311
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Nuestras Redes</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/claudio.ge.52" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter" target="_blank"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://api.whatsapp.com/send?phone=901897430" target="_blank"><i class="fab fa-fw fa-whatsapp" target="_blank"></i></a>
                        <!--a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></!--a>
                        <a-- class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a-->
                    </div>
                    <!-- Footer About Text-->
                    
                </div>
                </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Las Sirenitas 2023</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">arroz con marisco</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid2 rounded mb-3" src="{{ asset('assets/img/portfolio/arroz_mariscos.jpg') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">ARROZ CON MARISCOS <br>
                                        Guiso en el que se utiliza una gran diversidad de productos del mar como camarones, trozos de pescado, pulpo, calamar, almeja, jaiba y cangrejo. <br>
                                        PRECIO S/.30.00</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Ceviche</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid2 rounded mb-3" src="{{ asset('assets/img/portfolio/ceviche.jpg') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">CEVICHE <br>
                                        Platillo preparado con pescado crudo marinado en jugo de limón y condimentado con otros ingredientes que varían según la región. <br>
                                    PRECIO S/.30.00</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Cabrilla frita</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid2 rounded mb-3" src="{{ asset('assets/img/portfolio/cabrilla.png') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">CABRILLA FRITA <br>
                                        Cabrilla entera, sazonado con sal pimienta, ajos. Frito en aceite bien caliente. Servido con yuca frita, arroz y acompañado de salsa chalaca. <br>
                                        PRECIO S/.40.00</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jalea mixta</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid2 rounded mb-3" src="{{ asset('assets/img/portfolio/jalea.png') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">JALEA MIXTA <br>
                                        Este plato es una fritura picante de pescado o marisco, o ambos a la vez, que se acompaña con yucas también fritas o sancochadas y salsa criolla. <br>
                                        PRECIO 45</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Leche de tigre</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid2 rounded mb-3" src="{{ asset('assets/img/portfolio/leche-tigre.png') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">LECHE DE TIGRE <br>
                                        Jugo resultante de la maceración del ceviche. <br>
                                        PRECIO S/.20.00</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">parihuela</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid2 rounded mb-3" src="{{ asset('assets/img/portfolio/sopa.png') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"> PARIHUELA <br>
                                        Preparada a base de pescados y mariscos, Además, muchos la conocen como el famoso “levanta muertos”. Por lo cual a más de uno, estoy casi seguro, ha ayudado a levantarse después de una noche de fiesta. <br>
                                    PRECIO S/.25.00</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('scripts.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>