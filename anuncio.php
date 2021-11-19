<?php
require 'includes/funciones.php';
incluirTemplate("header", $inicio = true);
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta frente al bosque</h1>
    <picture>
        <source srcset="build/img/destacada.avif" type="image/avif">
        <source srcset="build/img/destacada.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/destacada.jpg" alt="Imagen destacada">
    </picture>
    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur adipisci neque tempora odit vero iste nihil, soluta praesentium eos sequi inventore fugit minima recusandae mollitia illum rerum veritatis deleniti accusamus.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur adipisci neque tempora odit vero iste nihil,
            soluta praesentium eos sequi inventore fugit minima recusandae mollitia illum rerum veritatis deleniti accusamus.
        </p>
    </div>
</main>

<?php
incluirTemplate("footer");
?>