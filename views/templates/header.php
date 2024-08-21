<header class="header">
            
            <div class="header__contenedor">
                <nav class="header__navegacion">
                    <?php if(is_auth()){?>
                        <a class="header__enlace" href="<?php echo is_admin()? '/admin/dashboard':'/finalizar-registro' ?>">Administrar</a>
                     <form action="/logout" method="POST" class="header__form">
                          <input type="submit" value="cerrar sesion" class="header__submit">

                     </form>


                     <?php }else{ ?>
                        <a class="header__enlace" href="/registro">Registrate</a>
                        <a class="header__enlace" href="/login">Inicia Sesion</a>
                       <?php };?> 
                </nav>

                <div class="header__contenido">
                    <a href="/">
                        <h1 class="header__logo">&#60;DevWebCamp/></h1>
                    </a>
                    
                         <p class="header__texto">Octubre 5-6 de 2026 </p>
                         <p class="header__texto header__texto--modalidad">En Linea - Precencial</p>


                         <a class="header__boton" href="/registro">Comprar Pase</a>

                </div>

            </div>
</header>
<div class="barra">
            <div class="barra__contenido">
                <a  href="/"><h2 class="barra__logo">&#60;DevWebCamp/></h2></a>

                <nav class="navegacion">

                    <a href="/devwebcamp" class="navegacion__enlace <?php echo pagina_actual('/devwebcamp')?'navegacion__enlace--actual': '' ?>">Evento</a>
                    <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual('/paquetes')?'navegacion__enlace--actual': '' ?>">Paquetes</a>
                    <a href="/workshops-conferencias" class="navegacion__enlace <?php echo pagina_actual('/workshops-conferencias')?'navegacion__enlace--actual': '' ?>">Workshops / Conferencias</a>
                    <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('/registro')?'navegacion__enlace--actual': '' ?>">Comprar pase</a>

                </nav>


            </div>
            
</div>