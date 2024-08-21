
const obtenerPonentes = (function(){
    return async()=>{
        
        const url =  "/api/ponentes";
        
        const resultado = await fetch(url);
        const ponentes = await resultado.json();
        
       App.formatearPonentes(ponentes)
        
    }
})();
const obtenerPonente = (function(){
    return async(id)=>{
        
        const url =  `/api/ponente?id=${id}`;
        
        const resultado = await fetch(url);
        const ponente = await resultado.json();
        
       return ponente;
        
    }
})();
const App = (function(){
    const listado_ponentes = document.querySelector('#listado-ponentes');
    const ponenteHidden = document.querySelector('[name="ponente_id"]');

    const ponentesInput  = document.querySelector("#ponentes");
    let ponentes = [];
    let ponentesFiltrados = [];
    if (ponentesInput) {
            ponentesInput.addEventListener('input',BuscarPonentes);
            obtenerPonentes();

            if (ponenteHidden.value) {
                (async() =>{
                    const ponente = await obtenerPonente(ponenteHidden.value);
                    const ponenteDOm = document.createElement('LI');
                    ponenteDOm.classList.add('listado-ponentes__ponente','listado-ponentes__ponente--seleccionado');
                    ponenteDOm.textContent = ponente.nombre + ' ' + ponente.apellido;


                    listado_ponentes.appendChild(ponenteDOm);
                })()
            }
    }
    function BuscarPonentes(e){
        
        const busqueda = e.target.value;

        
        if (busqueda.length > 3) {
            const expresion = new RegExp(busqueda,'i');
            ponentesFiltrados = ponentes.filter(ponente => {
                if (ponente.nombre.toLowerCase().search(expresion) != -1) {
                    return ponente;
                }
            }); 
        }else{
            ponentesFiltrados = [];
        }
        
        mostrarPonentes();
        
    }
    function mostrarPonentes(){

        while (listado_ponentes.firstChild) {
            listado_ponentes.removeChild(listado_ponentes.firstChild);
        }
        if (ponentesFiltrados.length > 0) {
                
            ponentesFiltrados.forEach(ponente =>{
                const ponenteHTML = document.createElement('LI');
                ponenteHTML.classList.add('listado-ponentes__ponente'); 
                ponenteHTML.textContent = ponente.nombre;
                ponenteHTML.dataset.ponenteId = ponente.id;
                ponenteHTML.onclick = seleccionarPonente;
                listado_ponentes.appendChild(ponenteHTML);
            }); 
        }else{
           const noResultados = document.createElement('P');
            noResultados.classList.add('listado-ponentes__no-resultado');
            noResultados.textContent = 'no hay resultados en tu busqueda';

            listado_ponentes.appendChild(noResultados);

        }

    }
    function seleccionarPonente(e){
        //remover la seleccion previa
        const ponentePrevio = document.querySelector('.listado-ponentes__ponente--seleccionado');
        if (ponentePrevio) {
            ponentePrevio.classList.remove('listado-ponentes__ponente--seleccionado');
        }


        const ponente = e.target;
        ponente.classList.add('listado-ponentes__ponente--seleccionado');
        ponenteHidden.value = ponente.dataset.ponenteId;
    }
    return{
        formatearPonentes:function(Arrayponentes = []){
            ponentes = Arrayponentes.map(ponente => {
                return {
                    nombre: `${(ponente.nombre).trim()} ${(ponente.apellido).trim()}`,
                    id: ponente.id
                };
                
            });
        }
    }
  
})();   