
    // Mobile menu toggle
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Cart modal toggle
    const cartButton = document.getElementById('cartButton');
    const cartModal = document.getElementById('cartModal');
    const closeCartModal = document.getElementById('closeCartModal');
    cartButton.addEventListener('click', () => {
        cartModal.classList.toggle('hidden');
    });
   
    //...............................cart ......................................

    document.addEventListener('DOMContentLoaded', () => {
        const counterElement = document.getElementById('counter');
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');
        
        let count = 0;
        
        incrementButton.addEventListener('click', () => {
            count++;
            counterElement.textContent = count;
        });
    
        decrementButton.addEventListener('click', () => {
            if (count > 0) {
                count--;
                counterElement.textContent = count;
            }
        });
    });
