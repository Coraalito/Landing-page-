    // import Swiper JS
    import Swiper from 'swiper/bundle';
    import 'swiper/css/bundle';
    
    // Configuracion de Swiper
    const swiper = new Swiper('.mySwiper', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
     
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      
      });

    const swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
    // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: swiper,
      },
    });

      