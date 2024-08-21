<main class="auth">
<h2 class="auth__heading"><?php echo $titulo ;?></h2>
    <p class="auth__texto">Tu Cuente DevWebCamp</p>

<?php

require_once __DIR__ . '/../templates/alertas.php';
    if(isset($alertas['exito'])):
?>  

<div class="acciones--centrar">
    
        <a class="acciones__enlace" href="/login">Inicia Sesion</a>
    </div>
<?php endif; ?>

</main>