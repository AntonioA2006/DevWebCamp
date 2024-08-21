<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ;?></h2>
    <p class="auth__texto">Restablece tu password</p>

    <?php 
        include_once __DIR__ . '/../templates/alertas.php';


        if($token_valido):
    ?>

    <form class="formulario" method="POST">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Password</label>
                <input class="formulario__input" placeholder="Tu nuevo password" type="password" name="password" id="password">
            </div>
            
                <input type="submit" class="formulario__submit" value="Guardar Cambios">
    </form>
<?php endif; ?>
    <div class="acciones">
        <a class="acciones__enlace" href="/registro">Recupera tu password</a>
        <a class="acciones__enlace" href="/login">Inicia Sesion</a>
    </div>

</main>