<?php
require 'includes/funciones.php';
incluirTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.avif" type="image/avif">
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>
    <h2>Llena el formulario de Contacto</h2>
    <form action="" class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">
            <label for="email">Email</label>
            <input type="email" placeholder="Tu Email" id="email">
            <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu Numero de Teléfono" id="telefono">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre Propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select id="opciones">
                <option disable selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Compra">Vende</option>
            </select>
            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="form-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-email">E-Mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>Si eligió telefono, elija fecha y hora para ser contactado</p>
            <label for="fecha">Fecha</label>
            <input id="fecha" type="date">
            <label for="hora">Hora</label>
            <input id="hora" type="time" min="09:00" max="18:00">

        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde"></input>
    </form>
</main>

<?php
incluirTemplate("footer");
?>