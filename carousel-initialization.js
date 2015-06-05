$(document).ready(function () {
    $('.wedding-slick').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        speed: 200,
        responsive: [
          {
              breakpoint: 768,
              settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 3
              }
          },
          {
              breakpoint: 480,
              settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
              }
          }
        ]
    });

});