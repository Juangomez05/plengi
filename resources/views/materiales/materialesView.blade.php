@extends('template.sidebar')

@section('titulo', 'Materiales')
@section('')

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Materiales</th>
        <th scope="col">Und</th>
        <th scope="col" class="d-none d-md-block">Cantidad</th>
        <th scope="col" class="d-md-none">Cant</th>
        <th scope="col">V.Unitario</th>
        <th scope="col"> V.Total</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($allmateriales as $material)
      <tr>
        <td>{{$material->id_orden}}</td>
        <td>{{$material->materiales}}</td>
        <td>{{$material->unidad}}</td>
        <td>{{$material->val_unitario}}</td>
        {{-- <td>{{$material->val_total}}</td> --}}
        <td class="text-end col-4 col-md-auto">
            <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2">↑</button>
            <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2">↓</button>
            <button type="submit" class="btn btn-outline-success py-0 mx-0 px-2">Ed</button>
            <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
        </td>
      </tr>
      @endforeach
     </tbody>
  </table>
 <!--/Matriz Tabla de actividades-->

 <!-- Ingreso de Actividades -->
  <form method="POST" action="{{route("crear_materiales")}}">
    @csrf
    <div class="row">
        <div class="col-6 pe-1">
          <input type="text" id="materiales" name="materiales" class="form-control" placeholder="Ingresar Material" aria-label="Material">
        </div>
        <div class="col-2 px-1">
          <input type="text" id="unidad" name="unidad" class="form-control" placeholder="Unidad" aria-label="Unidad">
        </div>
        <div class="col-2 px-1">
            <input type="number" id="val_unitario" name="val_unitario" class="form-control" placeholder="Valor Unitario" aria-label="Valor Unitario">
        </div>
        <div class="col-2 px-1 text-center">
            <button type="submit" class="btn btn-primary d-none d-md-block">Ingresar</button>
            <button type="submit" class="btn btn-primary d-md-none">+</button>
        </div>
    </div>
</form>
<!-- /Ingreso de Actividades -->

@endsection
