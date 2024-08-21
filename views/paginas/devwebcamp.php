<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de latinoamerica</p>


    <div class="devwebcamp__grid">
        <div data-aos="<?php aos_animacion() ?>" class="devwepcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                
                <img src="build/sobre_devwebcamp.jpg" alt="Imagen sobre nosotros" loading="lazy" width="200" height="300">


            </picture>
        </div>
        <div  class="devwebcamp__contenido">
            <p  data-aos="<?php aos_animacion() ?>" class="devwebcamp__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa expedita dolore eius, delectus laboriosam, tenetur consequatur quibusdam recusandae asperiores at quae omnis nostrum ipsam, soluta impedit inventore doloremque rem.
            </p>
            <p data-aos="<?php aos_animacion() ?>" class="devwebcamp__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa expedita dolore eius, delectus laboriosam, tenetur consequatur quibusdam recusandae asperiores at quae omnis nostrum ipsam, soluta impedit inventore doloremque rem.
            </p>
        </div>
    </div>
</main>