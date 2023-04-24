@extends('template.sidebar')

@section('titulo', 'Editar Matriz')
@section('')

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Actividad</th>
                <th scope="col">Und</th>
                <th scope="col" class="d-none d-md-block">Cantidad</th>
                <th scope="col" class="d-md-none">Cant</th>
            </tr>
        </thead>
    </table>

    <!-- Editar Matriz -->
    <form method="POST" action="{{ route('actualizar_matriz', $matriz->_id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6 pe-1">
                <input type="text" id="actividad" name="actividad" class="form-control" placeholder="Ingresar actividad"
                    aria-label="Actividad" value="{{$matriz->actividad}}">
            </div>
            <div class="col-2 px-1">
                <input type="text" id="unidad" name="unidad" class="form-control" placeholder="Unidad"
                    aria-label="Unidad" value="{{$matriz->unidad}}">
            </div>
            <div class="col-2 px-1">
                <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad"
                    aria-label="Cantidad" value="{{$matriz->cantidad}}">
            </div>
            <div class="col-2 px-1 text-center">
                <button type="submit" class="btn btn-success d-none d-md-block">Editar</button>
                <button type="submit" class="btn btn-success d-md-none">+</button>
            </div>
        </div>
    </form>
    <!-- /Editar Matriz -->

@endsection
