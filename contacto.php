<?php include('headerAIM3.php') ?>
<section class="listacontacto">
    <div class="enc1">
        <h2>FORMAS DE CONTACTO</h2>
    </div>
    <div>
        <ul class="contacto">
            <li><img src="./img/fb_icon_325x325.png" alt="ImagenIlustrativa"><a href="#">Facebook</a></li>
            <li><img src="./img/Logo_of_Twitter.png" alt="ImagenIlustrativa"><a href="#">Twitter</a></li>
            <li><img src="./img/Instagram_logo_2022.png" alt="ImagenIlustrativa"><a href="#">Instagram</a></li>
            <li>Email: tech@store.com</li>
            <li>Celular / Telefono: 15 3892-2934 / 2348-4933</li>
        </ul>
    </div>
    <div>
        <h3 class="enc_form">
            También podes contactarnos a través de este formulario
        </h3>
        <form action="enviar_consulta.php" method="post">
            <label for="nombre" class="contacto_label">NOMBRE</label>
            <input type="text" name="nombre" class="contacto_input">

            <label for="apellido" class="contacto_label">APELLIDO</label>
            <input type="text" name="apellido" class="contacto_input">

            <label for="correo" class="contacto_label">CORREO</label>
            <input type="text" name="correo" class="contacto_input">

            <label for="mensaje" class="contacto_label">MENSAJE</label>
            <textarea name="mensaje" id="" cols="30" rows="10" class="contacto_input"></textarea>

            <input type="submit" value="Enviar Consulta" class="envio_boton">

            <?php if (isset($_GET['ok']))
                echo "<h3> Mensaje enviado a Tech Store</h3>";
            ?>
        </form>
    </div>
</section>
<?php include('footerAIM3.php') ?>
</body>

</html>