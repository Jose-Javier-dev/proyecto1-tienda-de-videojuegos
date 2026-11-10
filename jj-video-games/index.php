<?php
$titulo = "JJ Video Games | Tienda de videojuegos";
include "header.php";
?>
    <main>
        <section class="portada">
            <div class="contenedor">
                <h1>JJ Video Games</h1>
                <p>Consolas, juegos y accesorios para todo tipo de jugador.</p>
                <a href="servicios.php" class="boton">Ver servicios</a>
            </div>
        </section>

        <section class="servicios contenedor">
            <h2>Servicios</h2>
            <!-- las tarjetas las crea main.js desde el arreglo "servicios" -->
            <div class="cards" id="cards"></div>
        </section>

        <section class="preguntas contenedor">
            <h2>Preguntas frecuentes</h2>
            <div class="accordion">
                <div class="item">
                    <button class="titulo">¿Los juegos usados tienen garantía?</button>
                    <div class="contenido"><p>Sí. Todos los juegos usados tienen 30 días de garantía.</p></div>
                </div>
                <div class="item">
                    <button class="titulo">¿Hacen envíos?</button>
                    <div class="contenido"><p>Sí, enviamos a todo el país. El costo depende de la zona.</p></div>
                </div>
                <div class="item">
                    <button class="titulo">¿Cómo funciona el canje de juegos?</button>
                    <div class="contenido"><p>Traes tus juegos, los valoramos y te damos crédito para la tienda.</p></div>
                </div>
                <div class="item">
                    <button class="titulo">¿Puedo apartar un juego?</button>
                    <div class="contenido"><p>Sí. Escríbenos desde Contacto y deja un adelanto para guardarlo.</p></div>
                </div>
            </div>
        </section>

<?php include "galeria.php"; ?>
    </main>

<?php include "footer.php"; ?>
