@extends('template.sidebar')

@section('titulo', 'A.P.U')
@section('')

    <!--Datos APU-->
    <div class="container-fluid border border-dark rounded-3 p-1 mt-1 bg-datos-proyecto bg-gradient">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <span class="fw-bold">Capítulo 1: </span>
                <span class="fst-italic">Actividades Preliminares</span>
            </div>
            <div class="col-12 col-md-6">
                <span class="fw-bold">Item 1.1: </span>
                <span class="fst-italic">Cerramiento</span>
            </div>
            <div class="col-6">
                <span class="fw-bold"></span>
                <span class="fst-italic"></span>
            </div>
            <div class="col-3 col-lg-2">
                <span class="fw-bold">Cant: </span>
                <span class="fst-italic">20</span>
            </div>
            <div class="col-3 col-lg-4">
                <span class="fw-bold">Und: </span>
                <span class="fst-italic">ML</span>
            </div>
        </div>
    </div>
    <!--/Datos APU-->

    <!--Materiales APU-->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Materiales</th>
                <th scope="col">Und</th>
                <th scope="col">Cant</th>
                <th scope="col">% Desp</th>
                <th scope="col">Cant T.</th>
                <th scope="col">V. Unit</th>
                <th scope="col">V. Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Guadua</td>
                <td>Und</td>
                <td>8</td>
                <td>5</td>
                <td>8.4</td>
                <td>$12.000</td>
                <td>$100.800</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Puntillas de 1y1/2"</td>
                <td>Lb</td>
                <td>2</td>
                <td>-</td>
                <td>2</td>
                <td>$3.500</td>
                <td>$7.000</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Tela Cerramiento</td>
                <td>Ml</td>
                <td>20</td>
                <td>-</td>
                <td>20</td>
                <td>$5.200</td>
                <td>$104.000</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
        </tbody>
    </table>
    <!--/Materiales APU-->
    <!-- Ingreso de Materiales -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <form action="">
                    <div class="row">
                        <div class="col-6 pe-1">
                            <input type="text" class="form-control" placeholder="Ingresar Material"
                                aria-label="Material">
                        </div>
                        <div class="col-2 px-1">
                            <input type="text" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                        </div>
                        <div class="col-2 px-1">
                            <input type="text" class="form-control" placeholder="% Desperdicio" aria-label="Desperdicio">
                        </div>
                        <div class="col-2 px-1 text-center">
                            <button type="submit" class="btn btn-primary">+</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5 text-end">
                <p class="d-inline">Sub Total Materiales: </p>
                <p class="d-inline fw-bold">$211.800</p>
            </div>
        </div>
    </div>
    <!-- /Ingreso de Materiales -->
    <!--Equipos Y Herramientas-->
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Equipo</th>
                <th scope="col">Und</th>
                <th scope="col">Rendi</th>
                <th scope="col">Cant</th>
                <th scope="col">V. Unit</th>
                <th scope="col">V. Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Retroexcavadora</td>
                <td>Hora</td>
                <td>10%</td>
                <td>4</td>
                <td>$130.000</td>
                <td>$520.800</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Volqueta</td>
                <td>Viaje</td>
                <td>5%</td>
                <td>2</td>
                <td>$180.000</td>
                <td>$360.800</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Herramienta menor</td>
                <td>Glb</td>
                <td>1%</td>
                <td>1</td>
                <td>$211.800</td>
                <td>$2.118</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
        </tbody>
    </table>
    <!--/Equipos Y Herramientas-->
    <!-- Ingreso de Equipos Y Herramientas -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <form action="">
                    <div class="row">
                        <div class="col-6 pe-1">
                            <input type="text" class="form-control" placeholder="Ingresar Equipo"
                                aria-label="Equipo">
                        </div>
                        <div class="col-4 px-1">
                            <input type="text" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                        </div>
                        <div class="col-2 px-1 text-center">
                            <button type="submit" class="btn btn-primary">+</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5 text-end">
                <p class="d-inline">Sub Total Equipos: </p>
                <p class="d-inline fw-bold">$883.718</p>
            </div>
        </div>
    </div>
    <!-- /Ingreso de Equipos Y Herramientas -->
    <!--Mano de Obra-->
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mano de Obra</th>
                <th scope="col">Und</th>
                <th scope="col">Rendi</th>
                <th scope="col">Cant</th>
                <th scope="col">V. Unit</th>
                <th scope="col">V. Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cuadrilla 2</td>
                <td>Hora</td>
                <td>10%</td>
                <td>1</td>
                <td>$125.000</td>
                <td>$250.800</td>
                <td class="text-end">
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↑</button>
                    <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2 d-none d-xl-inline">↓</button>
                    <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2 d-none d-lg-inline">Ed</button>
                    <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                </td>
            </tr>
        </tbody>
    </table>
    <!--/Mano de Obra-->
    <!-- Ingreso de Mano de Obra -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <form action="">
                    <div class="row">
                        <div class="col-6 pe-1">
                            <input type="text" class="form-control" placeholder="Ingresar Cuadrilla"
                                aria-label="Cuadrilla">
                        </div>
                        <div class="col-2 px-1">
                            <input type="text" class="form-control" placeholder="Rendimiento"
                                aria-label="Rendimiento">
                        </div>
                        <div class="col-2 px-1">
                            <input type="text" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                        </div>
                        <div class="col-2 px-1 text-center">
                            <button type="submit" class="btn btn-primary">+</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5 text-end">
                <p class="d-inline">Sub Total Mano de Obra: </p>
                <p class="d-inline fw-bold">$250.800</p>
            </div>
        </div>
    </div>
    <!-- /Ingreso de Mano de Obra -->
    <!-- Total APU -->
    <div class="container-fluid bg-datos-proyecto bg-gradient border border-dark rounded-3 p-1 my-3">
        <div class="row">
            <div class="col text-end">
                <p class="d-inline">Valor Total: </p>
                <p class="d-inline fw-bold"> $1'345.513</p>
            </div>
        </div>
    </div>
@endsection
