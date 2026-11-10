<?php
$titulo = "Contacto | JJ Video Games";
include "header.php";
?>
    <main>
        <section class="contenedor">
            <h1>Contacto</h1>
            <div class="contacto">
                <!-- novalidate: la validación la hacen main.js (en el navegador) y enviar.php (en el servidor) -->
                <form action="enviar.php" method="POST" class="formulario" novalidate>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">

                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo">

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="5"></textarea>

                    <button type="submit" class="boton">Enviar</button>
                    <!-- aquí main.js escribe los errores -->
                    <p id="mensajes"></p>
                </form>

                <aside class="info">
                    <h2><strong>Visítanos</strong></h2>
                    <p><strong>Horario</strong><br>Lunes a sábado: 10:00 a. m. a 8:00 p. m.</p>
                    <p><strong>Teléfono</strong><br>2222-2222</p>
                    <p><strong>Correo</strong><br>info@jjvideogames.com</p>
                </aside>
            </div>
        </section>
    </main>
<?php include "footer.php"; ?>
