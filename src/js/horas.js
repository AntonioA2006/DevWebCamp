

const buscarEventos = (function(){
    function obtenerHorasDisponibles(eventos){
        const listadoHoras = document.querySelectorAll('#horas li');
        listadoHoras.forEach(li => li.classList.add('horas__hora--desabilitada'))


        const horasTomadas = eventos.map(evento => evento.hora_id);
        const listadoHorasArray = Array.from(listadoHoras);

        const resultado = listadoHorasArray.filter(li => !horasTomadas.includes(li.dataset.horaId));

        resultado.forEach(li => li.classList.remove('horas__hora--desabilitada'));
;
        const horasDisponibles = document.querySelectorAll("#horas li:not(.horas__hora--desabilitada)");
       horasDisponibles.forEach(hora => hora.addEventListener('click', seleccionarHora))
    }
    function seleccionarHora(e){
        const inputHiddenDia = document.querySelector('[name="dia_id"]');
        const horaprevia = document.querySelector(".horas__hora--seleccionada");
        if (horaprevia) {
            horaprevia.classList.remove("horas__hora--seleccionada");
        }

        e.target.classList.add("horas__hora--seleccionada");
        const inputHiddenHora = document.querySelector('[name="hora_id"]');
    
        inputHiddenHora.value = e.target.dataset.horaId;
        inputHiddenDia.value = document.querySelector('[name="dia"]:checked').value;


    }
    return async (busqueda)=>{
        const {categoria_id, dia} = busqueda
        const url =  `/api/eventos-horario?dia_id=${dia}&categoria_id=${categoria_id}`;

        const resultado = await fetch(url);
        const respuesta = await resultado.json();

        obtenerHorasDisponibles(respuesta);
    }
})();
(function(){
    const horas = document.querySelector('#horas');

    if (horas) {
        
            const categoria = document.querySelector('[name="categoria_id"]');
            const dias = document.querySelectorAll('[name="dia"]');
          
            const inputHiddenHora = document.querySelector('[name="hora_id"]');
            categoria.addEventListener('change', terminoBusqueda);
            dias.forEach(dia => dia.addEventListener('change', terminoBusqueda));
            const inputHiddenDia = document.querySelector('[name="dia_id"]');

            let busqueda = {
                categoria_id: +categoria.value || '',
                dia: +inputHiddenDia.value || ''
            };  

            
            if (!Object.values(busqueda).includes('')) {

                (async ()=>{
                    //esta linea se va ejecutar mientras lo dema s sigue
                     await buscarEventos(busqueda);
                    const id = inputHiddenHora.value;
                    const horaSeleccionada = document.querySelector(`[data-hora-id="${id}"]`);
                    horaSeleccionada.classList.remove('horas__hora--desabilitada');
                    horaSeleccionada.classList.add('horas__hora--seleccionada');

                })()
            
              
            }
            
            function terminoBusqueda(e){
               busqueda[e.target.name] = e.target.value;

               inputHiddenHora.value = '';
               inputHiddenDia.value = '';
               const horaprevia = document.querySelector(".horas__hora--seleccionada");
               if (horaprevia) {
                   horaprevia.classList.remove("horas__hora--seleccionada");
               }


                if (Object.values(busqueda).includes('')) {
                    return;
                }
               
               buscarEventos(busqueda);

               
            }
           
    }


    
})();