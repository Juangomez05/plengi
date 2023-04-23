@extends('template.sidebar')

@section('titulo', 'Editar Materiales')
@section('')

<table class="table table-striped table-hover">
    <thead>
        <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Materiales</th>
            <th scope="col">Und</th>
            {{-- <th scope="col" class="d-none d-md-block">Cantidad</th> --}}
            <th scope="col" class="d-md-none">Cant</th>
            <th scope="col">V.Unitario</th>
            {{-- <th scope="col"> V.Total</th> --}}
            <th scope="col"></th>
        </tr>
    </thead>
</table>

<!-- Editar materiales -->
<form method="POST" action="{{ route('actualizar_materiales',$material->_id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-4 pe-1">
            <input type="text" id="materiales" name="materiales" class="form-control" placeholder="Ingresar Material"
                aria-label="Material" value="{{$material->materiales}}">
        </div>
        <div class="col-3 px-1">
            <input type="text" id="unidad" name="unidad" class="form-control" placeholder="Unidad"
                aria-label="Unidad" value="{{$material->unidad}}">
        </div>
        <div class="col-3 px-1">
            <input type="number" id="valor_unitario" name="valor_unitario" class="form-control"
                placeholder="Valor Unitario" aria-label="Valor Unitario" value="{{$material->valor_unitario}}">
        </div>
        <div class="col-2 px-1 text-center">
            <button type="submit" class="btn btn-success d-none d-md-block">Editar</button>
            <button type="submit" class="btn btn-success d-md-none">+</button>
        </div>
    </div>
</form>
<!-- /Editar materiales -->

@endsection
