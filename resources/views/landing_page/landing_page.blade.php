<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plengi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/landing_page.css">
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Plen</span>gi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactanos">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- \navbar --}}

    {{-- carrusel --}}
    <section id="home" class="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/home-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>PLENGI</h5>
                        <p>Desarrolla tu presupuesto con nosotros</p>
                        <p><a href="{{route('login')}}" class="btn btn-warning mt3">Get started</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/home-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Nuestros proyectos</h5>
                        <p>Desarrolla tu presupuesto con nosotros</p>
                        <p><a href="{{route('login')}}" class="btn btn-warning mt3">Get started</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/home-3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Tu presupuesto gratis</h5>
                        <p>Desarrolla tu presupuesto con nosotros</p>
                        <p><a href="{{route('login')}}" class="btn btn-warning mt3">Get started</a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- /carrusel --}}


    {{-- seccion nosotros  --}}

    <section id="nosotros" class="nosotros section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="nosotros-img">
                        <img src="/assets/img/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="nosotros-text">
                        <h2>Ofrecemos servicios de <br> la mejor calidad </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Rem eveniet quibusdam ullam voluptate debitis amet deleniti
                            officiis, dolores eum velit modi facilis, quia ex consequuntur,
                            libero in mollitia sed nostrum.</p>
                        <a href="#" class="btn btn-warning">Aprende más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- \seccion nosotros  --}}

    {{-- seccion servicios --}}

    <section id="servicios" class="servicios section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Otros servicios</h2>
                        Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Voluptatem, sequi!
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-subtract"></i>
                            <h3 class="card-tittle">Mejor calidad</h3>
                            <p class="lead">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Aspernatur ullam
                                quia, quaerat aperiam nesciunt saepe illum error
                                dolore eos praesentium ducimus in enim mollitia
                                ipsum fugit commodi dignissimos quam vero!</p>
                            <button class="btn btn-warning text-dark">Leer más</button>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-slack"></i>
                            <h3 class="card-tittle">Sostenibilidad</h3>
                            <p class="lead">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Aspernatur ullam
                                quia, quaerat aperiam nesciunt saepe illum error
                                dolore eos praesentium ducimus in enim mollitia
                                ipsum fugit commodi dignissimos quam vero!</p>
                            <button class="btn btn-warning text-dark">Leer más</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-playstation"></i>
                            <h3 class="card-tittle">Integridad</h3>
                            <p class="lead">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Aspernatur ullam
                                quia, quaerat aperiam nesciunt saepe illum error
                                dolore eos praesentium ducimus in enim mollitia
                                ipsum fugit commodi dignissimos quam vero!</p>
                            <button class="btn btn-warning text-dark">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- \seccion servicios --}}

    {{-- seccion contactos --}}

    <section id="contactanos" class="contactos section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contactanos</h2>

                    </div>
                </div>
            </div>

            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <form action="#" class="bg-light p-4 m-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" required placeholder="Tu Nombre completo">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="email" class="form-control" required placeholder="Tu Correo aquí">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea rows="3" required class="form-control" placeholder="Tu consulta aquí"></textarea>
                                </div>
                            </div>

                            <button class="btn btn-warning btn-lg btn-block mt-3">Enviar ahora</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- \seccion contactos --}}

    {{-- footer --}}

    <footer class="bg-dark p-2 text-center">
        <div class="container">
           <p class="text-white">Todos los derechos reservados @Plengi</p>
        </div>
    </footer>

    {{-- \footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
