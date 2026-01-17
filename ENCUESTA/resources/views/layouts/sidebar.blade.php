<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar con Iconos</title>
    <style>
        /* Estilos para la barra lateral */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            background-color: #333;
            overflow-x: hidden;
            transition: 0.3s;
            padding-top: 60px;
            z-index: 1;
        }

        /* Estilos para los iconos en la barra lateral */
        .sidebar a {
            padding: 10px 25px;
            text-align: right;
            text-decoration: none;
            font-size: 24px;
            color: white;
            display: block;
            transition: 0.2s;
        }

        /* Estilos para los iconos en la barra lateral al pasar el mouse por encima */
        .sidebar a:hover {
            color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="sidebar" id="mySidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><i class="bi bi-shield-fill-check">
        
    </i></a>
    <a href="#"><i class="bi bi-person">
    </i></a>
    <a href="#"><i class="bi bi-gear"></i></a>
</div>



<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "50";
    }
</script>

</body>
</html>