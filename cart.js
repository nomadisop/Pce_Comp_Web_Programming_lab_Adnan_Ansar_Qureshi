document.addEventListener("DOMContentLoaded", function() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartItemsTable = document.getElementById('cart_items');

    cartItems.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.price}</td>
        `;
        cartItemsTable.appendChild(row);
    });
});
