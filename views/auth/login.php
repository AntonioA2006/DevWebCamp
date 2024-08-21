<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ;?></h2>
    <p class="auth__texto">Inicia Sesion en DevWebCamp</p>
    <?php
        require_once __DIR__ . "/../templates/alertas.php";
    ?>
    <form action="/login" class="formulario" method="POST">
            <div class="formulario__campo">
                <label for="email" class="formulario__label">E-mail</label>
                <input class="formulario__input" placeholder="Tu E-mail" type="email" name="email" id="email">
            </div>
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Password</label>
                <input class="formulario__input" placeholder="Tu Password" type="password" name="password" id="password">
            </div>

                <input type="submit" class="formulario__submit" value="Iniciar Sesion">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/registro">Registrate en DevWebCamp</a>
        <a class="acciones__enlace" href="/olvide">Recupera tu password</a>
    </div>

</main>