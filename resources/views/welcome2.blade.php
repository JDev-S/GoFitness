<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Consola de administrador Auto Line</title>

    <!-- Fontfaces CSS-->
    <link href="style/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="style/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="/images/logo_skin-default.png" width="270px" height="100px" alt="Autoline" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                       
                                               <li>
                            <a href="/Admin_contacto">
                                <i class="fas fa-chart-bar"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="/Admin_auto">
                                <i class="fas fa-table"></i>Autos</a>
                        </li>
                        <li>
                            <a href="/Admin_especificacion">
                                <i class="far fa-check-square"></i>Especificaciones</a>
                        </li>
                        <li>
                            <a href="/Admin_descripcion_especificacion">
                                <i class="fas fa-calendar-alt"></i>Descripcion en especificaciones</a>
                        </li>
                        <li>
                            <a href="/Admin_fotos_autos">
                                <i class="fas fa-map-marker-alt"></i>Fotos de los autos</a>
                        </li>
                        
                        <li>
                            <a href="/Admin_horario">
                                <i class="fas fa-map-marker-alt"></i>Horario</a>
                        </li>
                        
                         <li>
                            <a href="/cerrar_sesion">
                                <i class="fas fa-map-marker-alt"></i>Cerrar sesión</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/images/logo_skin-default.png" alt="Autoline" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li>
                            <a href="/Admin_contacto">
                                <i class="fas fa-chart-bar"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="/Admin_auto">
                                <i class="fas fa-table"></i>Autos</a>
                        </li>
                        <li>
                            <a href="/Admin_especificacion">
                                <i class="far fa-check-square"></i>Especificaciones</a>
                        </li>
                        <li>
                            <a href="/Admin_descripcion_especificacion">
                                <i class="fas fa-calendar-alt"></i>Descripcion en especificaciones</a>
                        </li>
                        <li>
                            <a href="/Admin_fotos_autos">
                                <i class="fas fa-map-marker-alt"></i>Fotos de los autos</a>
                        </li>
                        
                        <li>
                            <a href="/Admin_horario">
                                <i class="fas fa-map-marker-alt"></i>Horario</a>
                        </li>
                        
                        <li>
                            <a href="/cerrar_sesion">
                                <i class="fas fa-map-marker-alt"></i>Cerrar sesión</a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->

            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



@yield('contenido')
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <?php
                        $fecha = date('Y');
                        echo $fecha;?> AutoLine. Desarrollado por <a href="https://jdevs.com.mx/">JDev-S</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <!--<script src="vendor/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="javas/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
   @yield('scripts')
</body>

</html>
<!-- end document-->
