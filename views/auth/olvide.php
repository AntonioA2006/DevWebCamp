<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ;?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

    <?php 
        include_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form action="/olvide" class="formulario" method="POST">
            <div class="formulario__campo">
                <label for="email" class="formulario__label">E-mail</label>
                <input class="formulario__input" placeholder="Tu E-mail" type="email" name="email" id="email">
            </div>

                <input type="submit" class="formulario__submit" value="Enviar instrucciones">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/registro">Recupera tu password</a>
        <a class="acciones__enlace" href="/login">Inicia Sesion</a>
    </div>

</main>