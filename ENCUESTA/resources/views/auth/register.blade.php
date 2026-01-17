<!DOCTYPE html>
<html>
<head>
    
    <title>Registro</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }

       /* CONTENEDOR PRINCIPAL */
       .page-layout {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            gap: 40px;
        }

/* IMÁGENES A LOS LADOS */
.side-image {
            
            height: auto;
            object-fit: contain;
        }

        .side-image {
        margin-right: 10px;  /* Imagen izquierda se acerca al formulario */
        }
        .page-layout > div:last-child .side-image {
            width: 450px; /* Ajusta si lo necesitas */
            margin-left: 10px; /* Imagen derecha se acerca al formulario */
        }

  /* CONTENEDOR DEL FORMULARIO */
        .form-container {
            background: white;
            width: 380px;
            margin: 60px auto;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 14px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #4a6cf7;
            color: white;
            border: none;
            border-radius: 6px;
        }

        /* RESPONSIVO */
        @media (max-width: 900px) {
            .page-layout {
                flex-direction: column;
                gap: 10px;
            }

            .side-image {
                width: 150px;
            }
        }

    </style>
</head>


<body>
    <div class="page-layout">

        {{-- Imagen izquierda --}}
        <div>
            <img src="{{ asset('images/escudo1.png') }}" class="side-image">
        </div>

  {{-- FORMULARIO --}}
<div class="form-container">
    <h2 style="text-align:center;">Registro</h2>

    {{-- BLOQUE PARA MOSTRAR ERRORES --}}
    @if ($errors->any())
        <div style="background:#ffe5e5; padding:10px; border:1px solid red; margin-bottom:15px; color:#b10000;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST">
        @csrf

        <label>Nómina (5 dígitos)</label>
        <input type="text" name="nomina" maxlength="5" required>

        <label>Confirmar nómina</label>
        <input type="text" name="nomina_confirmation" maxlength="5" required>

        <label>RFC (12 caracteres)</label>
        <input type="text" name="rfc" maxlength="12" required>

        <label>Confirmar RFC</label>
        <input type="text" name="rfc_confirmation" maxlength="12" required>

        <button type="submit">Registrar</button>
    </form>
</div>

  {{-- Imagen derecha --}}
  <div>
    <img src="{{ asset('images/logo_sspc.png') }}" class="side-image">
</div>

</div>
</body>
</html>
