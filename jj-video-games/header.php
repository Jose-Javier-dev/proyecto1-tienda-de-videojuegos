<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cada página puede definir $titulo antes del include; si no, usa este -->
    <title><?php echo $titulo ?? "JJ Video Games"; ?></title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">JJ Video Games</a>
        <button class="hamburguesa" id="btnMenu" aria-label="Abrir o cerrar el menú">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
