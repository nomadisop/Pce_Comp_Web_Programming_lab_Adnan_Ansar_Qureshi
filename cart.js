document.addEventListener("DOMContentLoaded",function(){
    const cart_logo = document.querySelector('.cart-logo');
    const cart_container = document.querySelector('.cart-items-container');
    cart_logo.addEventListener('click',function(){
        cart_container.classList.toggle('show');
    })
});
