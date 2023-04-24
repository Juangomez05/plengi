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
                    <th scope="row">{{ $material->id_orden }}</th>
                    <td>{{ $material->materiales }}</td>
                    <td>{{ $material->unidad }}</td>
                    @php $temp_value = "Valor temporal"; @endphp
                    @if ($material->cantidad)
                        @php $temp_value = $material->cantidad; @endphp
                    @endif
                    <td>{{ $temp_value }}</td>
                    <td>${{ $material->valor_unitario }}</td>
                    <td>${{ $material->valor_total }}</td>
                    <td class="text-end col-4 col-md-auto">
                        <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2">↑</button>
                        <button type="submit" class="btn btn-outline-secondary py-0 mx-0 px-2">↓</button>
                        <a href="{{ route('editar_materiales', $material->_id) }}"><button type="submit"
                                class="btn btn-outline-success py-0 mx-0 px-2">Ed</button></a>
                        <form action="{{ route('eliminar_material', $material->_id) }}" method="POST"
                            style="display: inline-block" onsubmit="return confirm('¿Seguro desea eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger py-0 mx-0 px-2">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!--/Matriz Tabla de materiales-->

    <!-- Ingreso de materiales -->
    <form method="POST" action="{{ route('crear_materiales') }}">
        @csrf
        <div class="row">
            <div class="col-6 pe-1">
                <input type="text" id="materiales" name="materiales" class="form-control" placeholder="Ingresar Material"
                    aria-label="Material" value="">
            </div>
            <div class="col-2 px-1">
                <input type="text" id="unidad" name="unidad" class="form-control" placeholder="Unidad"
                    aria-label="Unidad">
            </div>
            <div class="col-2 px-1">
                <input type="number" id="valor_unitario" name="valor_unitario" class="form-control"
                    placeholder="Valor Unitario" aria-label="Valor Unitario">
            </div>
            <div class="col-2 px-1 text-center">
                <button type="submit" class="btn btn-primary d-none d-md-block">Ingresar</button>
                <button type="submit" class="btn btn-primary d-md-none">+</button>
            </div>
        </div>
    </form>
    <!-- /Ingreso de materiales -->

@endsection
