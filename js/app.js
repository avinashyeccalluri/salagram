document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#card-carousel', {
          perPage    : 3,
          breakpoints: {
              640: {
                  perPage: 1,
              },
          },
    } ).mount();
  } );