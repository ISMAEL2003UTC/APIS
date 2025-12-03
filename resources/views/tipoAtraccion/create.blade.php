@extends('layout.app')

@section('contenido')
<div class="container">
    <h1>Agregar Nuevo Tipo de Atracción</h1>

    <form id="formTipoAgregar" action="{{ route('tipoAtraccion.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre_tipo_atraccion" class="form-label">Nombre del Tipo de Atracción</label>
            <input type="text" name="nombre_tipo_atraccion" id="nombre_tipo_atraccion" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('tipoAtraccion.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
$(document).ready(function () {
    $("#formTipoAgregar").validate({
        rules: {
            nombre_tipo_atraccion: {
                required: true,
                minlength: 3,
                pattern: /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/
            }
        },
        messages: {
            nombre_tipo_atraccion: {
                required: "Ingresa el nombre del tipo de atracción.",
                minlength: "Debe tener al menos 3 caracteres.",
                pattern: "Solo se permiten letras."
            }
        },
        errorClass: "error",
        errorElement: "span",
        submitHandler: function (form) {
            Swal.fire({
                title: "¿Guardar tipo de atracción?",
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
