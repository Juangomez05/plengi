@extends('template.sidebar')

@section('titulo', 'Editar material A.P.U')
@section('')

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Materiales</th>
            <th scope="col">Cantidad</th>
            <th scope="col" class="d-md-none">Cant</th>
            <th scope="col">%Desperdicio</th>
        </tr>
    </thead>
</table>

<!-- Editar materiales A.P.U-->
<form method="POST" action="{{ route('actualizar_materiales_apu',$material->_id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-4 pe-1">
            <input type="text" id="materiales" name="materiales" class="form-control" placeholder="Ingresar Material"
                aria-label="Material" value="{{$material->materiales}}">
        </div>
        <div class="col-3 px-1">
            <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="cantidad"
                aria-label="cantidad" value="{{$material->cantidad}}">
        </div>
        <div class="col-3 px-1">
            <input type="number" id="desperdicio" name="desperdicio" class="form-control"
                placeholder="%Desperdicio" aria-label="Desperdicio" value="{{$material->desperdicio}}">
        </div>
        <div class="col-2 px-1 text-center">
            <button type="submit" class="btn btn-success d-none d-md-block">Editar</button>
            <button type="submit" class="btn btn-success d-md-none">+</button>
        </div>
    </div>
</form>
<!-- /Editar materiales A.P.U-->

@endsection
