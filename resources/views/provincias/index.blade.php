@extends('layout.app')

@section('contenido')
<div class="container">
    <h1 class="my-4">Provincias</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('provincias.create') }}" class="btn btn-primary mb-3">Agregar Provincia</a>

    <table id="tablaProvincias" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la Provincia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($provincias as $provincia)
            <tr>
                <td>{{ $provincia->id_provincia }}</td>
                <td>{{ $provincia->nombre_provincia }}</td>
                <td>
                    <a href="{{ route('provincias.edit', $provincia->id_provincia) }}" class="btn btn-sm btn-warning">Editar</a>

                    <form action="{{ route('provincias.destroy', $provincia->id_provincia) }}" method="POST" style="display:inline-block;" class="formEliminar">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
$(document).ready(function() {

    // DataTables
    $('#tablaProvincias').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json"
        }
    });

    // Confirmación al eliminar
    $('.formEliminar').on('submit', function(e){
        e.preventDefault();
        const form = this;

        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esta acción",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });

    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            confirmButtonText: 'Aceptar'
        });
    @endif

    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'Aceptar'
        });
    @endif
});
</script>

@endsection
