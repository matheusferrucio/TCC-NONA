var swiper = new Swiper(".slide-content", {
    slidesPerView: 3, // determina a quantidade de slides que serão vistos no slider, 3 neste caso
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true', // muda o cursor para uma maozinha quando passamos o mouse por cima
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true, // aplica o efeito dinamico as bolinhas que marcam os slides
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // define quantos slides queremos que apareçam na tela quando a tela chegar a uma determinada largura
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },

  });