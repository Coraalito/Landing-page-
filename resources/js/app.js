
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
   
   /* closeCartModal.addEventListener('click', () => {
        cartModal.classList.add('hidden');
    }); */
