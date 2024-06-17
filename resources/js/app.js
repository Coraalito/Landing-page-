
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


    //*.................. Swiper slider carousel ..................*//
    // import Swiper JS
    import Swiper from 'swiper/bundle';
    import 'swiper/css/bundle';
    
    
    // Ejemplo de inicialización de Swiper
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 800,
        spaceBetween: 100,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar',
        },

      });

      
