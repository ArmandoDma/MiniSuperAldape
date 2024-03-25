document.querySelectorAll('input[name="unit"]').forEach((item) => {
    item.addEventListener("change", (event) => {
        if (event.target.value === "pieces") {
            console.log('amor')
        } else {
            console.log('hola')
        }
    });
});

function increment() {
    document.querySelectorAll('.inc').forEach((item) => {
        item.addEventListener('click', (event) => {
            // Encuentra el contenedor del botón de incremento
            let container = event.target.closest('.card-body');
            // Encuentra el input asociado al botón clickeado
            let input = container.querySelector('.quantityInput');
            // Incrementa el valor del input
            input.value = parseInt(input.value) + 1;
            // Encuentra el precio del producto en el mismo contenedor
            let price = parseInt(container.querySelector('.dfltP').innerHTML).toFixed(2);
            // Calcula el nuevo precio total y actualiza el elemento correspondiente
            container.querySelector('.totalPrice').innerHTML = '$'+price * input.value;
            console.log(input.value);

            recalculateTotals();
        });
    });
}

increment()

function decrement() {
    document.querySelectorAll('.dec').forEach((item) => {
        item.addEventListener('click', (event) => {
            // Encuentra el contenedor del botón de decremento
            let container = event.target.closest('.card-body');
            // Encuentra el input asociado al botón clickeado
            let input = container.querySelector('.quantityInput');
            // Disminuye el valor del input si es mayor que 1
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
                // Encuentra el precio del producto en el mismo contenedor
                let price = parseInt(container.querySelector('.dfltP').innerHTML).toFixed(2);
                // Calcula el nuevo precio total y actualiza el elemento correspondiente
                container.querySelector('.totalPrice').innerHTML = '$'+price * input.value;
                console.log(input.value);
                recalculateTotals()
            }
        });
    });
}
decrement()

function recalculateTotals(){
    let subtotal = 0;
    document.querySelectorAll('.totalPrice').forEach((totalPriceElement) => {
        subtotal += parseFloat(totalPriceElement.innerHTML.replace('$', ''));
    });

    // Calcular total aplicando el IVA
    let iva = subtotal * 0.16; // Calcula el IVA (16%)
    let total = subtotal + iva; // Suma el subtotal y el IVA

    // Actualizar subtotal
    document.getElementById('subtotal').textContent = `Subtotal: $${subtotal.toFixed(2)}`;

    // Actualizar total
    document.getElementById('total').textContent = `Total: $${total.toFixed(2)}`;
}

function deleteItem(product_Id) {
    // Implementa la lógica para eliminar el elemento con el ID proporcionado
    let url = 'cart'+product_Id
    window.location.href = url;
    console.log('Eliminar elemento con ID:', url);
}
