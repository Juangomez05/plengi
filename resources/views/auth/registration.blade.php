<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <main>
        <div class="container w-75 mt-5 shadow">
            <div class="row align-items-stretch">
                <!-- Imagen Login -->
                <div class="col bgregister d-none d-xl-block">
                </div>
                <!-- /Imagen Login -->
                <!-- Estructura derecha Login -->
                <div class="col bg-white container-login-derecha p-5">
                    <!-- Logo Login -->
                    <div class="login-logo text-center py-3">
                        <img src="/assets/logo/Logo-plengi.png" alt="Logo Plengi">
                    </div>
                    <!-- /Logo Login -->
                    <h5 class=" text-center py-3">Crea una Cuenta</h5>
                    <!-- Formulario Login -->
                        <form method="POST" action="{{route("guardar_registro")}}">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="validationCustomName" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="name" name="name" value="" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="validationCustomUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 pt-1">
                                    <label for="validationCustomEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 pt-1">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                    <div class="col-auto">
                                        <span id="passwordHelpInline" class="form-text">
                                          Must be 8-20 characters long.
                                        </span>
                                      </div>
                                </div>
                                <div class="col-6 pt-1">
                                    <label for="validationCustomUserPassword" class="form-label">Repetir Password</label>
                                    <input type="password" class="form-control" id="user_password" name="user_password" value="" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-3">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                  <label class="form-check-label" for="invalidCheck">
                                    Aceptar Terminos y Condiciones
                                  </label>
                                  <div class="invalid-feedback">
                                    You must agree before submitting.
                                  </div>
                                </div>
                              </div>
                              <div class="d-grid pt-2">
                                <button class="btn btn-primary" type="submit">Regístrate GRATIS</button>
                              </div>

                        </form>
                    <!-- /Formulario Login -->
                    <!-- Login con Redes Sociales -->
                        <div class="container w-100 my-5">
                            <div class="row text-center">
                                <div class="col-12">Regístrate con:</div>
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
