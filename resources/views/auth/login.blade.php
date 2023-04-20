<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <main>
        <div class="container w-75 mt-5 shadow">
            <div class="row align-items-stretch">
                <!-- Imagen Login -->
                <div class="col bglogin d-none d-lg-block">
                </div>
                <!-- /Imagen Login -->
                <!-- Estructura derecha Login -->
                <div class="col bg-white container-login-derecha p-5">
                    <!-- Logo Login -->
                    <div class="login-logo text-center py-3">
                        <img src="/assets/logo/Logo-plengi.png" alt="Logo Plengi">
                    </div>
                    <!-- /Logo Login -->
                    <h5 class=" text-center py-3">Bienvenido</h5>
                    <!-- Formulario Login -->
                        <form method="POST" action="{{route("guardar_login")}}">
                            @csrf
                            <div class="md-4">
                                <label for="user" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="user_name" name="user_name" >
                            </div>
                            <div class="md-4 pt-3">
                                <label for="password" class="form-label">password</label>
                                <input type="password" class="form-control" id="password" name="password" >
                            </div>
                            <div class="md-4 form-check py-3">
                                <input type="checkbox" name="remember_me" class="form-check-input" id="remember_me" value="1">
                                <label for="remember_me" class="form-check-label">Mantenerme conectado</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                            <div class="my-3">
                                <span>¿No tienes cuenta? <a href="{{route("registro")}}">Regístrate</a></span> <br>
                                <span><a href="#">Recuperar Password</a></span>
                            </div>
                        </form>
                    <!-- /Formulario Login -->
                    <!-- Login con Redes Sociales -->
                        <div class="container w-100 my-5">
                            <div class="row text-center">
                                <div class="col-12">Iniciar Sesión</div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-primary w-100 my-1">
                                        <div class="row align-items-center">
                                            <div class="col-6 login-facebook text-end d-none d-md-block">
                                                <img src="/assets/Redes_sociales/facebook3.png" alt="Facebook">
                                            </div>
                                            <div class="col-12 p-0 col-md-6 text-center text-md-start">
                                                Facebook
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-danger w-100 my-1">
                                        <div class="row align-items-center">
                                            <div class="col-6 login-facebook text-end d-none d-md-block">
                                                <img src="/assets/Redes_sociales/google3.png" alt="Gamil">
                                            </div>
                                            <div class="col-12 p-0 col-md-6 text-center text-md-start">
                                                Google
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <!-- /Login con Redes Sociales -->
                </div>
                <!-- /Estructura derecha Login -->
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
