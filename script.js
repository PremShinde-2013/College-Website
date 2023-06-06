/** @format */

// /** @format */

// // scroll
// let nav = document.querySelector('.navbar');
// window.onscroll = function () {
//   if (document.documentElement.scrollTop > 20) {
//     nav.classList.add('header-scrolled');
//   } else {
//     nav.classList.remove('header-scrolled');
//   }
// };

// // tongle
// let navBar = document.querySelectorAll('.nav-link');
// let navCollapse = document.querySelector('.navbar-collapse.collapse');
// navBar.forEach(function (a) {
//   a.addEventListener('click', function () {
//     navCollapse.classList.remove('show');
//   });
// });

// console.log('hii');

const counters = document.querySelectorAll('.value');
const speed = 1000;

counters.forEach((counter) => {
  const animate = () => {
    const value = +counter.getAttribute('akhi');
    const data = +counter.innerText;

    const time = value / speed;
    if (data < value) {
      counter.innerText = Math.ceil(data + time);
      setTimeout(animate, 1);
    } else {
      counter.innerText = value;
    }
  };

  animate();
});

var multipleCardCarousel = document.querySelector('#carouselExampleControls');
if (window.matchMedia('(min-width: 768px)').matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $('.carousel-inner')[0].scrollWidth;
  var cardWidth = $('.carousel-item').width();
  var scrollPosition = 0;
  $('#carouselExampleControls .carousel-control-next').on('click', function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $('#carouselExampleControls .carousel-inner').animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $('#carouselExampleControls .carousel-control-prev').on('click', function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $('#carouselExampleControls .carousel-inner').animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass('slide');
}
