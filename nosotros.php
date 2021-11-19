<?php
require 'includes/funciones.php';
incluirTemplate("header");
?>


<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.avif" type="image/avif">
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto a fugiat accusantium doloribus repellat eaque non, corrupti iste nulla saepe repudiandae similique amet sequi distinctio voluptates dignissimos nisi ut debitis.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto a fugiat accusantium doloribus repellat eaque non, corrupti iste nulla saepe repudiandae similique amet sequi distinctio voluptates dignissimos nisi ut debitis.</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Mas sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni commodi sed totam esse illo quod tenetur
                maiores quo facere nobis, nostrum nisi quos dolores eum aspernatur, dignissimos fugiat. Rem, eveniet!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni commodi sed totam esse illo quod tenetur
                maiores quo facere nobis, nostrum nisi quos dolores eum aspernatur, dignissimos fugiat. Rem, eveniet!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni commodi sed totam esse illo quod tenetur
                maiores quo facere nobis, nostrum nisi quos dolores eum aspernatur, dignissimos fugiat. Rem, eveniet!</p>
        </div>
    </div>
</section>
<?php
incluirTemplate("footer");
?>