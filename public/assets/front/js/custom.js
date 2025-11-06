gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

ScrollSmoother.create({

    smooth: 1,

    effects: true,

});

var swiper = new Swiper(".index_first_slider", {
  slidesPerView: "auto",
  spaceBetween: 20,
  speed: 5000,
  loop: true,
  freeMode: true,
  freeModeMomentum: true,
  allowTouchMove: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: true,
  },
  navigation: { 
      nextEl: ".swiper_button_next",
      prevEl: ".swiper_button_prev", 
  },
  breakpoints: {
    640: {
      slidesPerView: 2.1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3.1,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4.1,
      spaceBetween: 20,
    },
  },
});



 document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const accordionContent = button.nextElementSibling;
        const extraHeight = 10;

        button.classList.toggle('active');

        if (button.classList.contains('active')) {
            accordionContent.style.maxHeight = (accordionContent.scrollHeight + extraHeight) + 'px';
        } else {
            accordionContent.style.maxHeight = 0;
        }

        document.querySelectorAll('.accordion-header').forEach(otherButton => {
            if (otherButton !== button) {
                otherButton.classList.remove('active');
                otherButton.nextElementSibling.style.maxHeight = 0;
            }
        });
    });
});