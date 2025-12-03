@extends('layout.app')

@section('contenido')

<div class="container mt-4">
    <h2 class="mb-4">Lista de Lugares Turísticos</h2>

    <a href="{{ route('lugares.create') }}" class="btn btn-primary mb-3">Agregar Lugar Turístico</a>
    
    <table id="tablaLugares" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Provincia</th>
                <th>Tipo de Atracción</th>
                <th>Coordenadas</th>
                <th>Descripción</th>
                <th>Año de Creación</th>
                <th>Accesibilidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($lugares as $lugar)
                <tr>
                    <td>{{ $lugar->id_lugar }}</td>
                    <td>{{ $lugar->nombre_lugar }}</td>
                    <td>{{ $lugar->provincia->nombre_provincia }}</td>
                    <td>{{ $lugar->tipoAtraccion->nombre_tipo_atraccion }}</td>
                    <td>{{ $lugar->coordenadas }}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    <td>{{ $lugar->anio_creacion }}</td>
                    <td>{{ $lugar->accesibilidad }}</td>
                    <td>
                        <a href="{{ route('lugares.edit', $lugar->id_lugar) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('lugares.destroy', $lugar->id_lugar) }}" method="POST" style="display:inline-block;" class="formEliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No hay lugares registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#tablaLugares').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json"
        }
    });

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
