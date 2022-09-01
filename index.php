<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="app.js" />
    <link href="dist/hamburgers.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>

    <title>Document</title>
  </head>
  <body>
    <!-- <nav class="navbar">
      <div class="brand-title">
        <img class="logo" src="IMAGES/logo-removebg.png" alt="" />
      </div>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Corporate</a></li>
          <li><a href="">Product</a></li>
          <li><a href="">People</a></li>
          <li><a href="">Buy</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
    </nav> -->
    <section>
      <div>
        <img class="header-image" src="./images/header.jpeg" alt="" srcset="">
      </div>
    </section>
    <section >
      <div class="row d-flex align-items-center m-3 moto-info">
        <div class="col-md-5 white">
          <h1>SMARTER STEEL FOR A BETTER TOMORROW</h1>
        </div>
        <div class="col-md-6 offset-md-2 orange d-flex flex-column justify-content-center align-content-center align-items-center">
          <div class="row d-flex justify-content-center align-content-center align-items-center  ">
            <div class="col-md-4 box m-1 p-2 ">
              <h3 class="text-center">1.2 Lakh</h3>
              Tonnes of steel production
            </div>
            <div class="col-md-4 box m-1 p-2">
              <h3 class="text-center">1K+</h3>
              Employment generated
            </div>
          </div>
          <div class="row d-flex justify-content-center align-content-center align-items-center">
            <div class="col-md-4 box m-1 ">
              <h3 class="text-center">8MWH</h3>
              Captive Power Plant
            </div>
            <div class="col-md-4 box m-1 ">
              <h3 class="text-center">4+</h3>
              Exported to four continents
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row mt-5">
        <div class="col-md-6 m-5 pt-5 fs-3 text">The commitment and innovation of
          Salagram has led to the company
          becoming a competitive and promising
          steel manufacturing company with an
          annual production capacity of 1.2 lakh
          tons. With its flagship brand Salagram
          MT, the company plans to become one
          of the top MT bar manufacturers in
          India. In order to contribute to India's
          economic growth, the company has
          aggressively expanded its footprint
          across the country</div>
        <div class="col-md-6">
        </div>
      </div>
      <button class="m-5 b-about-us">About us</button>
    </section>
    <section class="">
      <div class="d-flex prod-cap flex-column page space-evenly cp">
        <div class="fs-3 text-white w-50">
          Our captive power plant at Burdwan's Dewandighi is producing 8MWH of electricity.
        </div>
          <div class="d-flex space-evenly white border border-4">
            <div class="py-3 fs-4 w-50 text-center">STEEL</div>
            <div class="py-3 fs-4 w-50 bg-white text-center text-dark">POWER</div>
          </div>
      </div>
    </section>
    <section class="d-flex">
      <div class="fs-1 border border-4 border-warning flex-column text-center align-items-center justify-content-center">
        OUR PRODUCTS
      </div>
    </section>
    <section class="d-flex">
      <div class="fs-1 border border-4 border-warning flex-column text-center align-items-center justify-content-center">
        OUR CLIENTS
      </div>
    </section>
    <footer>
      <div class="row">
        <div class="col-md-6">
          LOGO
        </div>
        <div class="col-md-6"> 
          <p class=" text-right">Contact Us</p>
        </div>
      </div>
    </footer>
    <script src="app.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
      var mySwiper = new Swiper(".swiper-container", {
        // Optional parameters
        // direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
          el: ".swiper-scrollbar",
        },
      });
    </script>
  </body>
</html>