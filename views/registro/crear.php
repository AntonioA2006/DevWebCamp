<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>
    
    <div class="paquetes__grid">
            <div class="paquete">
                <h3 class="paquete__nombre">Pase gratis</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">
                        Acceso virtual a DevWebCamp
                    </li>
                    
                </ul>
                <p class="paquete__precio">$0</p>
                <form action="/finalizar-registro/gratis" method="POST">

                    <input type="submit" value="Inscripcion gratis" class="paquetes__submit">

                </form>


            </div> 
            
            <div class="paquete">
                <h3 class="paquete__nombre">Pase Presencial</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">
                        Acceso Presencial a DevWebCamp
                    </li>
                    <li class="paquete__elemento">
                        Pase por 2 dias
                    </li>
                    
                    <li class="paquete__elemento">
                       Acceso a talleres y conferencias
                    </li>
                    <li class="paquete__elemento">
                       Acceso alas grabaciones
                    </li>
                    <li class="paquete__elemento">
                       Camisa del evento
                    </li>
                    <li class="paquete__elemento">
                       Comida y bebida
                    </li>
                    
                </ul>
                <p class="paquete__precio">$199</p>
                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>

            </div> 

            <div class="paquete">
                <h3 class="paquete__nombre">Pase virtual</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">
                        Acceso virtual a DevWebCamp
                    </li>
                    <li class="paquete__elemento">
                        Pase por 2 dias
                    </li>
                    
                    <li class="paquete__elemento">
                       Acceso a talleres y conferencias
                    </li>
                    <li class="paquete__elemento">
                       Acceso alas grabaciones
                    </li>
                    
                </ul>
                <p class="paquete__precio">$49</p>
                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container-virtual"></div>
                    </div>
                </div>
            </div> 
            
    </div>
</main>

<script src="https://www.paypal.com/sdk/js?client-id=ARpO9uHC-wbRXXyaCezw-OMJOmZjB3RaYcaqDcS6lO2Da44gyWGB3Ja8MLHGWragPClHkO-Wg9WOfZ0c&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
 
<script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":199}}]
          });
        },
 
        onApprove:  function(data, actions) {
          return actions.order.capture().then(async function(orderData) {
 
 
            // Show a success message within this page, e.g.
            const datos  = new FormData();

            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            const resultado  = await fetch('/finalizar-registro/pagar',{
                method: "POST",
                body: datos
            });

            const respuesta = await resultado.json();

            if (respuesta.resultado) {
                actions.redirect('http://localhost:8080/finalizar-registro/conferencias');
            }
            
          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
      //pase virtual
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":49}}]
          });
        },
 
        onApprove:  function(data, actions) {
          return actions.order.capture().then(async function(orderData) {
 
 
            // Show a success message within this page, e.g.
            const datos  = new FormData();

            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            const resultado  = await fetch('/finalizar-registro/pagar',{
                method: "POST",
                body: datos
            });

            const respuesta = await resultado.json();

            if (respuesta.resultado) {
                actions.redirect('http://localhost:8080/finalizar-registro/conferencias');
            }
            
          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-virtual');
    }
 
  initPayPalButton();
</script>