@extends('layout.app')

@section('contenido')
<div class="container">
    <h1 class="my-4">Editar Provincia</h1>

    <form id="formProvinciaEditar" action="{{ route('provincias.update', $provincia->id_provincia) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_provincia" class="form-label">Nombre de la Provincia</label>
            <input type="text" name="nombre_provincia" id="nombre_provincia" class="form-control" value="{{ $provincia->nombre_provincia }}">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('provincias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
$(document).ready(function () {
    $("#formProvinciaEditar").validate({
        rules: {
            nombre_provincia: {
                required: true,
                minlength: 3,
                pattern: /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/
            }
        },
        messages: {
            nombre_provincia: {
                required: "Ingresa el nombre de la provincia.",
                minlength: "Debe tener al menos 3 caracteres.",
                pattern: "Solo se permiten letras."
            }
        },
        errorClass: "error",
        errorElement: "span",
        submitHandler: function (form) {
            Swal.fire({
                title: "¿Actualizar provincia?",
                text: "Verifica que toda la información sea correcta.",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Actualizar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    });
});
</script>
@endsection
