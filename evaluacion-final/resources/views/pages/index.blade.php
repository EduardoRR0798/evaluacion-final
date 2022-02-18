<x-layout.layout>
    <div class="row mt-5">
        <div class="col-12 col-md-10 offset-md-1 flex justify-content-end">
            <a href="{{ route('create') }}"  class="btn btn-success mb-3">Registrar nuevo</a>
        </div>
        <div class="col-12 col-md-10 offset-md-1">
            @if (isset($estudiantes))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Fecha de nacimiento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->nombres }}</td>
                        <td>{{ $estudiante->apellidos }}</td>
                        <td>{{ $estudiante->fecha_nacimiento }}</td>
                        <td>
                            <a href="{{ route('destroy', $estudiante->id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>No hay estudiantes para mostrar</p>
            @endif

        </div>
    </div>
</x-layout.layout>