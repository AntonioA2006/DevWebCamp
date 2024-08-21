<div class="evento swiper-slide">
                            <p class="evento__hora"><?php echo  $evento->hora->hora; ?></p>

                            <div class="evento__informacion">
                                <h4 class="evento__nombre"><?php echo $evento->nombre ?></h4>
                            
                                    <p class="evento__introduccion"><?php echo $evento->descripcion ?></p>
                            
                                <div class="evento__autor-info">
                                <picture>
                                    <source srcset="<?php echo $_ENV['HOST'].'/img/speaker/' . $evento->ponente->imagen ?>.webp" type="Image/webp">
                                    <source srcset="<?php echo $_ENV['HOST'].'/img/speaker/' . $evento->ponente->imagen ?>.png" type="Image/png">

                                    <img class="evento__imagen-autor" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'].'/img/speaker/' . $evento->ponente->imagen ?>.png" alt="Imagen Evento">
                                </picture>
                                    <p class="evento__autor-nombre">
                                        <?php echo $evento->ponente->nombre . ' ' . $evento->ponente->apellido ?>
                                    </p>
                                </div>
                            </div>

</div>