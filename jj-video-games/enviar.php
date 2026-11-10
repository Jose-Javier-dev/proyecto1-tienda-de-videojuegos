<?php
$errores = [];

// Solo se procesa si el formulario llegó por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // trim() quita espacios; ?? "" evita errores si el campo no llega
  $nombre  = trim($_POST["nombre"] ?? "");
  $correo  = trim($_POST["correo"] ?? "");
  $mensaje = trim($_POST["mensaje"] ?? "");

  // Validaciones: si algo falla, se agrega un texto al arreglo $errores
  if ($nombre === "") $errores[] = "El nombre es obligatorio.";
  if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = "Correo inválido.";
  if ($mensaje === "") $errores[] = "El mensaje es obligatorio.";

  // Si no hay errores, se envía el correo y se va a la página de gracias
  if (count($errores) === 0) {
    // el @ evita que XAMPP muestre un aviso si no tiene el correo configurado
    @mail("info@jjvideogames.com", "Mensaje desde el sitio",
         "Nombre: $nombre\nCorreo: $correo\n\n$mensaje",
         "From: no-reply@jjvideogames.com");
    header("Location: gracias.php");
    exit;
  }
}
$titulo = "Revise el formulario | JJ Video Games";
?>
<?php include "header.php"; ?>
<main class="contenedor">
  <h1>Revise el formulario</h1>
  <ul>
    <?php foreach ($errores as $error) { echo "<li>" . htmlspecialchars($error) . "</li>"; } ?>
  </ul>
  <a href="contacto.php" class="boton">Volver al formulario</a>
</main>
<?php include "footer.php"; ?>
