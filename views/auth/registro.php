<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ;?></h2>
    <p class="auth__texto">Inicia Sesion en DevWebCamp</p>
    <?php

        require_once __DIR__ . '/../templates/alertas.php'

    ?>
    <form action="/registro" class="formulario" method="POST">
            <div class="formulario__campo">
                <label for="email" class="formulario__label">E-mail</label>
                <input value="<?php echo $usuario->email ?>" class="formulario__input" placeholder="Tu E-mail" type="email" name="email" id="email">
            </div>
            <div class="formulario__campo">
                <label for="nombre" class="formulario__label">Nombre</label>
                <input value="<?php echo $usuario->nombre ?>" class="formulario__input" placeholder="Tu Nombre" type="text" name="nombre" id="nombre">
            </div>
            <div class="formulario__campo">
                <label for="apellido" class="formulario__label">Apellido</label>
                <input  value="<?php echo $usuario->apellido ?>" class="formulario__input" placeholder="Tu Apellido" type="text" name="apellido" id="apellido">
            </div>
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Password</label>
                <input  class="formulario__input" placeholder="Tu Password" type="password" name="password" id="password">
            </div>
            <div class="formulario__campo">
                <label for="password2" class="formulario__label">Repetir Password</label>
                <input class="formulario__input" placeholder="Repite el password" type="password" name="password2" id="password2">
            </div>

                <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/login">Inicia Sesion</a>
        <a class="acciones__enlace" href="/olvide">Recupera tu password</a>
    </div>

</main>