document.addEventListener("DOMContentLoaded", function(){

    const quantities = document.querySelectorAll('.quantity');
    const containerLast = document.querySelector('.containerLast');
    updateTotalPrice();

    quantities.forEach(function(quantityInput) {
        quantityInput.addEventListener('input', function() {
            const row = quantityInput.parentElement.parentElement;
            const amountElement = row.querySelector('.amount'); 
            const subtotalElement = row.querySelector('.subtotal'); 
            const pricePerItem = parseFloat(amountElement.textContent.replace('$', ''));
            const quantity = parseInt(quantityInput.value);
            const subtotal = pricePerItem * quantity;
            subtotalElement.textContent = '$' + subtotal.toFixed(2);

            updateTotalPrice(); 
        });
    });

    function updateTotalPrice() {
        let totalPrice = 0;
        document.querySelectorAll('.subtotal').forEach(function(subtotalElement) {
            totalPrice += parseFloat(subtotalElement.textContent.replace('$',''));
        });
        containerLast.textContent = '$' + totalPrice.toFixed(2);
    }

    
    const cart_logo = document.querySelector('.cart-logo');
    const cart_container = document.querySelector('.cart-items-container');
    cart_logo.addEventListener('click',function(){
        cart_container.classList.toggle('show');
    });
});
