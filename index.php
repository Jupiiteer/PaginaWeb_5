<?php
    require 'includes/funciones.php';
    incluirTemplate("header", $inicio = true);
?>

<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni commodi sed totam esse illo quod tenetur maiores quo facere nobis, nostrum nisi quos dolores eum aspernatur, dignissimos fugiat. Rem, eveniet!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni commodi sed totam esse illo quod tenetur maiores quo facere nobis, nostrum nisi quos dolores eum aspernatur, dignissimos fugiat. Rem, eveniet!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni commodi sed totam esse illo quod tenetur maiores quo facere nobis, nostrum nisi quos dolores eum aspernatur, dignissimos fugiat. Rem, eveniet!</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Depas en Ventas</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--Anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa Termindos de Lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--Anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa con Alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                <p class="precio">$3.000.000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--.contenido-anuncio-->
        </div>
        <!--Anuncio-->
    </div>
    <!--.contenedor-Anuncios-->
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit maiores eum animi voluptatum. Tempore magnam ipsa modi quae eveniet quos, architecto cum culpa qui, harum, pariatur est aliquam sequi consequatur!</p>
    <a href="contacto.php" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>28/10/2021</span> por: <span></span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>

    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Kevin Agustin Ruiz -</p>
        </div>
    </section>
</div>

<?php
    incluirTemplate("footer");
?>
