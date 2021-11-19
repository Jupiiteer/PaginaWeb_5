<?php
require 'includes/funciones.php';
incluirTemplate("header");
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoraction de tu hogar</h1>
    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
    <picture>
        <source srcset="build/img/destacada.avif" type="image/avif">
        <source srcset="build/img/destacada.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/destacada.jpg" alt="Imagen destacada">
    </picture>
    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur adipisci neque tempora odit vero
            iste nihil, soluta praesentium eos sequi inventore fugit minima recusandae mollitia illum rerum
            veritatis deleniti accusamus.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur adipisci neque tempora odit vero
            iste nihil,
            soluta praesentium eos sequi inventore fugit minima recusandae mollitia illum rerum veritatis deleniti
            accusamus.
        </p>
    </div>
</main>
<?php
incluirTemplate("footer");
?>