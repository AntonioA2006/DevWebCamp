<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion del evento</legend>

    <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre Evento</label>
            <input value="<?php echo $evento->nombre;?>" type="text" id="nombre" placeholder="Nombre ponente" name="nombre" class="formulario__input">
    </div>
    <div class="formulario__campo">
            <label for="descripcion" class="formulario__label">Descripcion</label>
           <textarea name="descripcion" id="descripcion" placeholder="Descripcion del evento">
                 <?php echo $evento->descripcion;?>
           </textarea>
    </div>
    <div class="formulario__campo">
            <label for="categoria" class="formulario__label">Categoria o Tipo de evento</label>
            <select class="formulario__select" id="categoria" name="categoria_id">
                <option selected disabled>-- Seleccionar -- </option>
                <?php foreach($categorias as $categoria):?>
                        <option <?php echo ($evento->categoria_id === $categoria->id)? 'selected' :'' ?> value="<?php echo $categoria->id ?>"><?php echo  $categoria->nombre ?></option>
                <?php endforeach; ?>
            </select>
    </div>
    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Selecciona el dia</label>
                        

        <div class="formulario__radio">
                <?php foreach($dias as $dia):?>

                        <div>
                                <label for="<?php echo strtolower($dia->nombre) ?>"><?php echo $dia->nombre ?></label>

                                <input type="radio" name="dia" id="<?php echo strtolower($dia->nombre) ?>" value="<?php echo $dia->id ?>"
                                <?php 
                                echo ($evento->dia_id === $dia->id) ? 'checked' : '';
                                ?>
                                >
                        </div>

                <?php endforeach;?>

        </div>
        <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id ?>">
    </div>

    <div id="horas" class="formulario__campo">
                <label class="formulario__label">Seleccionar Hora</label>

                <ul id="horas" class="horas">
                        <?php foreach($horas as $hora) :?>

                                <li data-hora-id="<?php echo $hora->id ?>" class="horas__hora horas__hora--desabilitada"><?php echo $hora->hora ?></li>

                        <?php endforeach; ?>        

                </ul>
                <input type="hidden" name="hora_id" value="<?php echo $evento->hora_id?>">
    </div>
</fieldset>
<fieldset class="formulario__fieldset">
        <legend class="formulario__legend">Informacio extra</legend>
        
        <div class="formulario__campo">
            <label for="ponentes" class="formulario__label">Ponente</label>
            <input type="text" id="ponentes" placeholder="buscar ponente" class="formulario__input">
         </div>
         <ul id="listado-ponentes" class="listado-ponentes">

         </ul>

         <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id?>">
        <div class="formulario__campo">
            <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
            <input value="<?php echo $evento->disponibles ?>" type="number" min="1" id="disponibles" name="disponibles" placeholder="Ej. 20" class="formulario__input">
         </div>

</fieldset>
