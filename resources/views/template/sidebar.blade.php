<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plengi - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav ps-2">
                <div>
                    <a href="#" class="nav_logo border-bottom">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <h4 class="nav_logo-name">PLENGI</h4>
                    </a>
                    <div class="nav_list">
                        <a href="#" class="nav_link">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Proyectos</span>
                        </a> <a href="#" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Users</span>
                        </a>
                        <a href="{{route('presupuesto')}}" class="nav_link border-top m-0 py-4 active">
                            <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Presupuesto</span>
                        </a>
                        <a href="{{route('apu')}}" class="nav_link" >
                            <i class='bx bx-folder nav_icon'></i>
                            <span class="nav_name">APU</span>
                        </a>
                        <a href="{{route('materiales')}}" class="nav_link">
                            <i class='bx bx-bookmark nav_icon'></i>
                            <span class="nav_name">Insumos</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                            <span class="nav_name">Stats</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="nav_link border-top">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
        <!--Matriz Tabla de actividades-->
    <main class="tablas-presupuesto">
        <div class="height-100 bg-light">
            <!--Datos del proyecto-->
            <div class="container-fluid border border-dark rounded-3 p-1 bg-datos-proyecto bg-gradient">
                <div class="row align-items-center">
                    <div class="col-3 logo-constructora">
                        <img class="" src="assets/logo/CONSTRUCCIONES TIMANCO.png" alt="Logo constructora">
                    </div>
                    <div class="col-6 text-center">
                        <span class="fst-italic">NOMBRE DEL PROYECTO</span>
                    </div>
                    <div class="col-3 text-center zise-datos-ubicación">
                        <span class="">COLOMBIA</span>
                        <span class="d-md-none">CAUCA</span>
                        <span class="d-none d-md-block">DEPARTAMENTO DEL CAUCA</span>
                        <span class="d-md-none">POPAYÁN</span>
                        <span class="d-none d-md-block">MUNICIPIO DE POPAYÁN</span>
                    </div>
                </div>
            </div>
            <!--/Datos del proyecto-->

            <!-- template -->

            @section('')
            @show

            <!-- /template -->

        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="/js/sidebar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
