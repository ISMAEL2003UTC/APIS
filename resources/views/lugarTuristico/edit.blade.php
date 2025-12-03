@extends('layout.app')

@section('contenido')
<div class="container">
    <h2>Editar Lugar Turístico</h2>

    <form id="formEditarLugar" action="{{ route('lugares.update', $lugarTuristico->id_lugar) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre_lugar" class="form-label">Nombre del Lugar</label>
            <input type="text" name="nombre_lugar" id="nombre_lugar" class="form-control" value="{{ $lugarTuristico->nombre_lugar }}">
        </div>

        <div class="mb-3">
            <label for="id_provincia" class="form-label">Provincia</label>
            <select name="id_provincia" id="id_provincia" class="form-select">
                <option value="">-- Seleccionar Provincia --</option>
                @foreach($provincias as $provincia)
                    <option value="{{ $provincia->id_provincia }}" 
                        {{ $lugarTuristico->id_provincia == $provincia->id_provincia ? 'selected' : '' }}>
                        {{ $provincia->nombre_provincia }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_tipo_atraccion" class="form-label">Tipo de Atracción</label>
            <select name="id_tipo_atraccion" id="id_tipo_atraccion" class="form-select">
                <option value="">-- Seleccionar Tipo --</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id_tipo_atraccion }}" 
                        {{ $lugarTuristico->id_tipo_atraccion == $tipo->id_tipo_atraccion ? 'selected' : '' }}>
                        {{ $tipo->nombre_tipo_atraccion }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="coordenadas" class="form-label">Coordenadas (Lat,Lng)</label>
            <input type="text" name="coordenadas" id="coordenadas" class="form-control" value="{{ $lugarTuristico->coordenadas }}">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3" class="form-control">{{ $lugarTuristico->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="anio_creacion" class="form-label">Año de Creación</label>
            <input type="text" name="anio_creacion" id="anio_creacion" class="form-control" value="{{ $lugarTuristico->anio_creacion }}">
        </div>

        <div class="mb-3">
            <label for="accesibilidad" class="form-label">Accesibilidad</label>
            <input type="text" name="accesibilidad" id="accesibilidad" class="form-control" value="{{ $lugarTuristico->accesibilidad }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Lugar</button>
        <a href="{{ route('lugares.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
$(document).ready(function () {
    let anioActual = new Date().getFullYear();

    $("#formEditarLugar").validate({
        rules: {
            nombre_lugar: {
                required: true,
                minlength: 3,
                pattern: /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/
            },
            id_provincia: {
                required: true
            },
            id_tipo_atraccion: {
                required: true
            },
            coordenadas: {
                pattern: /^-?\d{1,3}\.\d+,\s?-?\d{1,3}\.\d+$/
            },
            descripcion: {
                required: true,
                minlength: 10
            },
            anio_creacion: {
                required: true,
                digits: true,
                minlength: 4,
                maxlength: 4,
                min: 1900,
                max: anioActual
            },
            accesibilidad: {
                required: true,
                minlength: 5,
                pattern: /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/
            }
        },

        messages: {
            nombre_lugar: {
                required: "Ingresa el nombre del lugar.",
                minlength: "Debe tener al menos 3 caracteres.",
                pattern: "Solo se permiten letras."
            },
            id_provincia: {
                required: "Selecciona una provincia."
            },
            id_tipo_atraccion: {
                required: "Selecciona un tipo de atracción."
            },
            coordenadas: {
                pattern: "Formato inválido. Ejemplo: -0.1234, -78.5678"
            },
            descripcion: {
                required: "Ingresa una descripción.",
                minlength: "Debe contener al menos 10 caracteres."
            },
            anio_creacion: {
                required: "Ingresa el año de creación.",
                digits: "Solo se permiten números.",
                minlength: "Debe tener 4 dígitos.",
                maxlength: "Debe tener 4 dígitos.",
                min: "El año no puede ser menor que 1900.",
                max: "El año no puede ser mayor al actual."
            },
            accesibilidad: {
                required: "Describe la accesibilidad.",
                minlength: "Debe tener al menos 5 caracteres.",
                pattern: "Solo se permiten letras."
            }
        },

        errorClass: "error",
        errorElement: "span",

        submitHandler: function (form) {
            Swal.fire({
                title: "¿Actualizar lugar turístico?",
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
