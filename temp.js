document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('.add_to_cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    function addToCart(event) {
        const button = event.target;
        const productItem = button.parentElement.parentElement;
        const productName = productItem.querySelector('.product_name').textContent;
        const productPrice = productItem.querySelector('.product_price').textContent;
        
        // Retrieve existing cart items from localStorage or create an empty array
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        
        // Add new item to cart
        cartItems.push({ name: productName, price: productPrice });
        
        // Save updated cart items back to localStorage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }
});
