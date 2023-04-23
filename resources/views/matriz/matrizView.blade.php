@extends('template.sidebar')

@section('titulo','Presupuesto')
@section('')

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Actividad</th>
        <th scope="col">Und</th>
        <th scope="col" class="d-none d-md-block">Cantidad</th>
        <th scope="col" class="d-md-none">Cant</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allmatriz as $matriz)
        <tr>
            <td>{{$matriz->id_orden}}</td>
            <td><a href="{{route('')}}">{{$matriz->actividad}}</a></td>
            <td>{{$matriz->unidad}}</td>
            <td>{{$matriz->cantidad}}</td>
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
  <form method="POST" action="{{route('crear_presupuesto')}}">
    @csrf
    <div class="row">
        <div class="col-6 pe-1">
          <input type="text" id="actividad" name="actividad" class="form-control" placeholder="Ingresar actividad" aria-label="Actividad">
        </div>
        <div class="col-2 px-1">
          <input type="text" id="unidad" name="unidad" class="form-control" placeholder="Unidad" aria-label="Unidad">
        </div>
        <div class="col-2 px-1">
            <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
        </div>
        <div class="col-2 px-1 text-center">
            <button type="submit" class="btn btn-primary d-none d-md-block">Ingresar</button>
            <button type="submit" class="btn btn-primary d-md-none">+</button>
        </div>
    </div>
</form>
<!-- /Ingreso de Actividades -->

@endsection
