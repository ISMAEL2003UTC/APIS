@extends('layout.app')

@section('contenido')
<div class="container">
    <h1 class="my-4">Agregar Provincia</h1>
    <form id="formProvincia" action="{{ route('provincias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre_provincia" class="form-label">Nombre de la Provincia</label>
            <input type="text" name="nombre_provincia" id="nombre_provincia" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('provincias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
$(document).ready(function () {
    $("#formProvincia").validate({
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
                title: "¿Guardar provincia?",
                text: "Verifica que toda la información sea correcta.",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Guardar",
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
