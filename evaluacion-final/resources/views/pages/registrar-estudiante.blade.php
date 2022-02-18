<x-layout.layout>
    <div class="row mt-5">
        <form action="{{ request()->routeIs('create') ? route('store') : '' }}" class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="nombres" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control col-6" name="nombres" >
            </div>
            <div class="row mb-3">
                <label for="apellidos" class="form-label">Apellido(s)</label>
                <input type="text" class="form-control col-6" name="apellidos" >
            </div>
            <div class="row mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control col-6" name="fecha_nacimiento" >
            </div>
            <div class="row">
                <button class="btn btn-outline-primary">Registrar</button>
            </div>
        </form>
    </div>
</x-layout.layout>