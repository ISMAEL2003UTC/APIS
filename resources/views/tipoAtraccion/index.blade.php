@extends('layout.app')

@section('contenido')
<div class="container mt-4">
    <h2 class="mb-4">Tipos de Atracción</h2>

    <a href="{{ route('tipoAtraccion.create') }}" class="btn btn-primary mb-3">Agregar Tipo de Atracción</a>

    <table id="tablaAtraccion" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Tipo de Atracción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->id_tipo_atraccion }}</td>
                    <td>{{ $tipo->nombre_tipo_atraccion }}</td>
                    <td>
                        <a href="{{ route('tipoAtraccion.edit', $tipo->id_tipo_atraccion) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('tipoAtraccion.destroy', $tipo->id_tipo_atraccion) }}" method="POST" style="display:inline-block;" class="formEliminar">
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
    // Inicializar DataTables
    $('#tablaAtraccion').DataTable({
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
