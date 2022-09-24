<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="app.js" />
  <link href="dist/hamburgers.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Document</title>
  <style type="text/css">
    .carousel-inner {
      padding: 1em;
    }

    .card {
      margin: 0 0.5em;
      box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
      border: none;
    }

    .carousel-control-prev,
    .carousel-control-next {
      background-color: #e1e1e1;
      width: 6vh;
      height: 6vh;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
    }

    @media (min-width: 768px) {
      .carousel-item {
        margin-right: 0;
        flex: 0 0 33.333333%;
        display: block;
      }

      .carousel-inner {
        display: flex;
      }
    }

    .card .img-wrapper {
      max-width: 100%;
      height: 13em;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card img {
      max-height: 100%;
    }

    @media (max-width: 767px) {
      .card .img-wrapper {
        height: 17em;
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 8vh;
      height: 8vh;
    }
  </style>
</head>

<body class="">
  <header>
    <div class="header-container d-flex flex-column justify-content-between p-4">
      <?php include('header.php') ?>
      <div class=" row  text-light mbw-100">
        <div class="col-lg-6 col-md-6 col-sm-12 px-lg-5 text-lg-start text-center index-text">
          <strong>SMARTER STEEL FOR A BETTER TOMORROW</strong>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="achievement-status-container">
      <div class="achievement-status  w-35 h-64 align-content-center m-lg-5 dangerRed d-flex flex-column justify-content-center" style="padding: 19px;">
        <div class="row text-center d-flex justify-content-center h-30">
          <div class="col-lg-5 col-5 bg-light m-1 d-flex justify-content-center flex-column align-content-center custom-div text-dark">
            <div class="fs-2"><strong>1.2 Lakh</strong></div>
            <span class="square-span text-center fs-4">Tonnes of steel production</span>
          </div>
          <div class="col-lg-5 col-5 bg-s1 m-1 d-flex justify-content-center flex-column align-content-center custom-div text-light">
            <div class="fs-2"><strong>1k+</strong></div>
            <span class="square-span text-center fs-4">Employment generated</span>
          </div>
        </div>

        <div class="row text-center d-flex justify-content-center h-30 ">
          <div class="col-lg-5 col-5 bg-s2 m-1 d-flex justify-content-center flex-column align-content-center custom-div text-light">
            <div class="fs-2"><strong>8 MWH</strong></div>
            <span class="square-span text-center fs-4">Captive Power Plant</span>
          </div>
          <div class="col-lg-5 col-5 bg-s3 m-1 d-flex justify-content-center flex-column align-content-center custom-div text-light">
            <div class="fs-2"><strong>4+</strong></div>
            <span class="square-span text-center fs-4">Exported to four continents</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid px-5 vector">
    <div class="row d-flex justify-content-center mt-lg-5  mt-md-5 mx-lg-5 pt-lg-5">
      <div class="col-md-12 col-sm-12 col-lg-7 mt-lg-5 mt-3 fs-3 start-container montserrat animate__backInLeft" style="font-weight: lighter;">
        The commitment and innovation of Salagram has led to the company
        becoming a competitive and promising steel manufacturing company with
        an annual production capacity of 1.2 lakh tons. With its flagship
        brand Salagram MT, the company plans to become one of the top MT bar
        manufacturers in India. In order to contribute to India's economic
        growth, the company has aggressively expanded its footprint across the
        country
      </div>
      <div class=" col-md-12 col-sm-12 col-lg-5 align-items-end mt-lg-5 mt-3">
        <div class="">
          <img src="./images/shutterstock_1138752473.png" class="img-fluid" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="row mx-lg-5 ">
      <div class="col-md-12 d-flex justify-content-lg-start justify-content-center align-items-start">
        <button class="my-5 b-about-us text-center">About us</button>
      </div>
    </div>
  </section>
  <section class="" id="steel">
    <div class="container-fluid px-4 d-flex prod-cap flex-column page justify-content-around p-4 ">
      <div class="row">

        <div class="fs-3 text-white col-sm-12 col-lg-6">
          Our captive power plant at Burdwan's Dewandighi is producing 8MWH of
          electricity.
        </div>
      </div>
      <div class="d-flex justify-content-around white border border-4 montserrat">
        <div class="py-2 fs-5 w-50 bg-white text-center text-dark steel-power" type="steel">STEEL</div>
        <div class="py-2 fs-5 w-50 text-center steel-power" type="power">POWER</div>
      </div>
    </div>
  </section>
  <section class="" id="power" style="display: none;">
    <div class="container-fluid px-4 d-flex prod-cap flex-column page justify-content-around p-4 ">
      <div class="row">

        <div class="fs-3 text-white col-sm-12 col-lg-6">
          Our captive power plant at Burdwan's Dewandighi is producing 8MWH of
          electricity. - power
        </div>
      </div>
      <div class="d-flex justify-content-around white border border-4 montserrat">
        <div class="py-2 fs-5 w-50  text-center steel-power" type="steel">STEEL</div>
        <div class="py-2 fs-5 w-50 text-center bg-white text-dark steel-power" type="power">POWER</div>
      </div>
    </div>
  </section>
  <section class="d-flex w-100 align-items-center justify-content-center text-center my-4">
    <div class="fs-1 border-orangered px-4 montserrat"><strong>OUR PRODUCTS</strong></div>
  </section>
  <div id="carouselExampleControls" class="carousel mb-5 pb-5 montserrat" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card">
          <div class="img-wrapper"><img src="./images/tmt-1.png" width="50" class="d-block w-100" alt="..."> </div>
          <div class="card-body text-center bg-dark text-light" style="opacity: 0.7;">
            <h5 class="card-title"><strong>TMT Bars</strong></h5>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/square-1.png" width="50" class="d-block w-100" alt="..."> </div>
          <div class="card-body text-center bg-dark text-light" style="opacity: 0.7;">
            <h5 class="card-title"><strong>Square Bar</strong></h5>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/round (2).png" width="50" class="d-block w-100" alt="..."> </div>
          <div class="card-body text-center bg-dark text-light" style="opacity: 0.7;">
            <h5 class="card-title"><strong>Round Bar</strong></h5>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section class="d-flex w-100 align-items-center justify-content-center text-center my-4">
    <div class="fs-1 border-orangered px-4 montserrat"><strong>OUR CLIENTS</strong></div>
  </section>
  <div id="carouselExampleControls" class="carousel mb-5 pb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card">
          <div class="img-wrapper"><img src="./images/Tata Housing.png" width="50" class="d-block w-100" alt="..."> </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/ps.png" width="50" class="d-block w-100" alt="..."> </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/Bgr.png" width="50" class="d-block w-100" alt="..."> </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/Tata Housing.png" width="50" class="d-block w-100" alt="..."> </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/ps.png" width="50" class="d-block w-100" alt="..."> </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="card">
          <div class="img-wrapper"><img src="./images/Bgr.png" width="50" class="d-block w-100" alt="..."> </div>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <?php include('footer.php') ?>
  <script src="./js/app.js"></script>
  <script type="text/javascript" language="javascript">
    var multipleCardCarousel = document.querySelector(
      "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
      var carousel = new bootstrap.Carousel(multipleCardCarousel, {
        interval: false,
      });
      var carouselWidth = $(".carousel-inner")[0].scrollWidth;
      var cardWidth = $(".carousel-item").width();
      var scrollPosition = 0;
      $("#carouselExampleControls .carousel-control-next").on("click", function() {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
          scrollPosition += cardWidth;
          $("#carouselExampleControls .carousel-inner").animate({
              scrollLeft: scrollPosition
            },
            600
          );
        }
      });
      $("#carouselExampleControls .carousel-control-prev").on("click", function() {
        if (scrollPosition > 0) {
          scrollPosition -= cardWidth;
          $("#carouselExampleControls .carousel-inner").animate({
              scrollLeft: scrollPosition
            },
            600
          );
        }
      });
    } else {
      $(multipleCardCarousel).addClass("slide");
    }
  </script>
</body>

</html>