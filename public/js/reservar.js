 // Obtener los elementos de los radio buttons y los formularios
 const tipoReservaRadios = document.querySelectorAll('input[name="tipo_reserva"]');
 const tiendaForm = document.getElementById('tiendaForm');
 const domicilioForm = document.getElementById('domicilioForm');
 const tiendalbl = document.getElementById('tienda_lbl');
 const domlbl = document.getElementById('domicilio_lbl');
 const items = document.getElementById('items');

 function btndirP() {

     let valor = items.getAttribute('data-valor');
     let data = `
     <i class="bx bx-home-alt"></i>
     <div class="ct-txtBtn">
     <strong>Mini Super Aldape</strong>
     <p class="dirP" id="dirP">${valor}</p>
     </div>
     `;

     let btn = document.createElement("button");
     btn.classList.add('btnCreated');
     btn.setAttribute("type", "button");
     btn.innerHTML = data;
     items.appendChild(btn);

 }

 window.addEventListener('load', () => {
     btndirP();
 })

 // Función para mostrar u ocultar el formulario según la opción seleccionada
 function toggleForm() {
     if (this.value === 'tienda') {
         tiendaForm.style.display = 'block';
         domicilioForm.style.display = 'none';
         tiendalbl.classList.add('active')
         domlbl.classList.remove('active')
         items.style.display = 'none'
     } else if (this.value === 'domicilio') {
         tiendaForm.style.display = 'none';
         domicilioForm.style.display = 'block';
         tiendalbl.classList.remove('active')
         domlbl.classList.add('active')
         items.style.display = 'block'
     }
 }

 // Agregar event listener a los radio buttons para llamar a la función toggleForm
 tipoReservaRadios.forEach(radio => {
     radio.addEventListener('change', toggleForm);
 });
