@extends('layout.app')

@section('contenido')
<div class="container">
    <h1>Editar Tipo de Atracción</h1>

    <form id="formTipoEditar" action="{{ route('tipoAtraccion.update', $tipoAtraccion->id_tipo_atraccion) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_tipo_atraccion" class="form-label">Nombre del Tipo de Atracción</label>
            <input type="text" name="nombre_tipo_atraccion" id="nombre_tipo_atraccion" class="form-control" value="{{ $tipoAtraccion->nombre_tipo_atraccion }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tipoAtraccion.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
$(document).ready(function () {
    $("#formTipoEditar").validate({
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
                title: "¿Actualizar tipo de atracción?",
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
