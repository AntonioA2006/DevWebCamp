<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Personal</legend>
    <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" id="nombre" placeholder="Nombre ponente" name="nombre" class="formulario__input" value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>
    <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" id="apellido" placeholder="Apellido ponente" name="apellido" class="formulario__input" value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>
    <div class="formulario__campo">
            <label for="ciudad" class="formulario__label">Ciudad</label>
            <input type="text" id="ciudad" placeholder="Ciudad ponente" name="ciudad" class="formulario__input" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>
    <div class="formulario__campo">
            <label for="pais" class="formulario__label">Pais</label>
            <input type="text" id="pais" placeholder="Pais ponente" name="pais" class="formulario__input" value="<?php echo $ponente->pais ?? ''; ?>">
    </div>
    <div class="formulario__campo">
            <label for="imagen" class="formulario__label">Imagen</label>
            <input type="file" id="pais" placeholder="Imagen del ponente" name="imagen" class="formulario__input formulario__input--file">
    </div>
</fieldset>

<?php if(isset($ponente->imagen_actual)): ?>
                <p class="formulario__texto">Imagen Actual:</p>

        <div class="formulario__imagen">
                <picture>
                        <source srcset="<?php echo $_ENV['HOST'].'/img/speaker/' . $ponente->imagen ?>.webp" type="Image/webp">
                        <source srcset="<?php echo $_ENV['HOST'].'/img/speaker/' . $ponente->imagen ?>.png" type="Image/png">

                        <img src="<?php echo $_ENV['HOST'].'/img/speaker/' . $ponente->imagen ?>.png" alt="Imagen Ponente">
                </picture>
        </div>
<?php endif; ?>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Extra</legend>       
    
    <div class="formulario__campo">
            <label for="tags_input" class="formulario__label">Areas de experiencia (separadas por coma)</label>
            <input type="text" id="tags_input" placeholder="Ej. node.js, PHP, CSS, LARAVEL etc.." class="formulario__input">

                <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">

            <div class="formulario__listado" id="tags"></div>
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>       
  
    <div class="formulario__campo">
                
                <div class="formulario__contenedor-icono">
                          
                        <div class="formulario__icono">
                                <i class="fa-brands fa-facebook"></i>
                        </div>
                <input type="text"  placeholder="Facebook" name="redes[facebook]" class="formulario__input--sociales" value="<?php echo $redes->facebook ?? ''; ?>">
                </div>
    </div>
    <div class="formulario__campo">
                
                <div class="formulario__contenedor-icono">
                          
                        <div class="formulario__icono">
                                <i class="fa-brands fa-x"></i>
                        </div>
                <input type="text"  placeholder="X" name="redes[x]" class="formulario__input--sociales" value="<?php echo $redes->twitter ?? ''; ?>">
                </div>
    </div>
    <div class="formulario__campo">
                
                <div class="formulario__contenedor-icono">
                          
                        <div class="formulario__icono">
                                <i class="fa-brands fa-youtube"></i>
                        </div>
                <input type="text"  placeholder="Youtube" name="redes[youtube]" class="formulario__input--sociales" value="<?php echo $redes->youtube ?? ''; ?>">
                </div>
    </div>
    <div class="formulario__campo">
                
                <div class="formulario__contenedor-icono">
                          
                        <div class="formulario__icono">
                                <i class="fa-brands fa-instagram"></i>
                        </div>
                <input type="text"  placeholder="Instagram" name="redes[instagram]" class="formulario__input--sociales" value="<?php echo $redes->instagram ?? ''; ?>">
                </div>
    </div>
    <div class="formulario__campo">
                
                <div class="formulario__contenedor-icono">
                          
                        <div class="formulario__icono">
                                <i class="fa-brands fa-tiktok"></i>
                        </div>
                <input type="text"  placeholder="Tiktok" name="redes[tiktok]" class="formulario__input--sociales" value="<?php echo $redes->tiktok ?? ''; ?>">
                </div>
    </div>
    <div class="formulario__campo">
                
                <div class="formulario__contenedor-icono">
                          
                        <div class="formulario__icono">
                                <i class="fa-brands fa-github"></i>
                        </div>
                <input type="text"  placeholder="Github" name="redes[github]" class="formulario__input--sociales" value="<?php echo $redes->github ?? ''; ?>">
                </div>
    </div>





</fieldset>