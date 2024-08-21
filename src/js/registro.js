import Swal  from "sweetalert2";

(function(){
    let eventos = [];
    const resumen  = document.querySelector("#registro-resumen");
    if (resumen) {
        
    
        const formularioRegistro = document.querySelector("#registro");
        formularioRegistro.addEventListener('click', submitFormulario)
    const eventosBoton = document.querySelectorAll('.evento__agregar');
    eventosBoton.forEach(boton => boton.addEventListener('click', seleccionarEvento));
    

    function seleccionarEvento(e){
        if (eventos.length < 5) {
            eventos = [...eventos, {
                id:e.target.dataset.id,
                titulo:e.target.parentElement.querySelector('.evento__nombre').textContent.trim()
            }]
            e.target.disabled = true;
         
          mostrarEventos();
        }else{
            Swal.fire({
                title: 'error',
                text: 'Maximo 5 eventos por registro',
                icon: 'error',
                confirmButtonText: 'OK'
              });
        }
    }
    function mostrarEventos(){
        limpiarEventos();      
        if (eventos.length > 0) {
                eventos.forEach(evento => {
                    const eventoDOM = document.createElement('DIV');
                    eventoDOM.classList.add('registro__evento');

                    const titulo = document.createElement('H3');
                    titulo.classList.add('registro__nombre');
                    titulo.textContent = evento.titulo;

                    const botonEliminar = document.createElement('BUTTON');
                    botonEliminar.classList.add('registro__eliminar');
                    botonEliminar.innerHTML = `
                        <i class="fa-solid fa-trash"> </i>
                    `;
                    botonEliminar.onclick = function(){
                        eliminarEvento(evento.id);
                    }

                    eventoDOM.appendChild(titulo);
                    eventoDOM.appendChild(botonEliminar);
                    resumen.appendChild(eventoDOM);

                });
        }
    }
    function eliminarEvento(id){
        eventos = eventos.filter(evento => evento.id !== id);
        const botonAgregar = document.querySelector(`[data-id="${id}"]`);

        botonAgregar.disabled = false;
        mostrarEventos();
    }   
    function limpiarEventos(){
        while(resumen.firstChild){
            resumen.removeChild(resumen.firstChild);
        }
    }
   async function submitFormulario(e){
        e.preventDefault();
        //obtener el regalo

        const regaloId = document.querySelector('#regalo').value;
        const eventosId =  eventos.map(evento => evento.id);
        
        if (eventosId.length == 0 || regaloId == '') {
            Swal.fire({
                title: 'error',
                text: 'debes elegir al menos un evento y un regalo',
                icon: 'error',
                confirmButtonText: 'OK'
              });

              return ;
        }
        const datos  = new FormData();
        datos.append('eventos', eventosId);
        datos.append('regalo_id', regaloId);

        const url = '/finalizar-registro/conferencias';
        const respuesta  = await fetch(url, {
            method: 'POST',
            body: datos
        })
        const resultado  = await respuesta.json();
        console.log(resultado);
        if (resultado.resultado) {
            Swal.fire('Registro exitoso', 'tus conferencias se han almacenado y tu registro fue exitoso te esperamos en DevWebCamp','success')
            .then(()=>{
                location.href = `/boleto?id=${resultado.token}`
            });

        }else{
            Swal.fire({
                title: 'error',
                text: 'Hubo un error al almacenar tus conferencias',
                icon: 'error',
                confirmButtonText: 'OK'
              }).then(()=>{
                   location.reload();
              })
        }
    }
}
})();