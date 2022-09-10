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
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <title>Document</title>
</head>

<body class="">
  <header>
    <div class="header-container d-flex flex-column justify-content-between p-4">
      <?php include('header.php') ?>
      <div class=" row  text-light mbw-100">
        <div class="col-lg-6 col-sm-12">
          <h1>SMARTER STEEL FOR A BETTER TOMORROW</h1>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="achievement-status-container">
      <div class="achievement-status  w-35 h-64 align-content-center m-lg-5 dangerRed d-flex flex-column justify-content-center">
        <div class="row text-center d-flex justify-content-center h-30">
          <div class="col-3 bg-light m-1 d-flex justify-content-center flex-column align-content-center custom-div text-dark">
            <div class="fs-3">1.2 Lakh</div>
            <span>Tonnes of steel</span>
          </div>
          <div class="col-3 bg-s1 m-1 d-flex justify-content-center flex-column align-content-center custom-div text-light">
            <div class="fs-3">1.2 Lakh</div>
            <span>Tonnes of steel</span>
          </div>
        </div>

        <div class="row text-center d-flex justify-content-center h-30 ">
          <div class="col-3 bg-s2 m-1 d-flex justify-content-center flex-column align-content-center custom-div text-light">
            <div class="fs-3">1.2 Lakh</div>
            <span>Tonnes of steel</span>
          </div>
          <div class="col-3 bg-s3 m-1 d-flex justify-content-center flex-column align-content-center custom-div text-light">
            <div class="fs-3">1.2 Lakh</div>
            <span>Tonnes of steel</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid px-5">
    <div class="row d-flex justify-content-center mt-lg-5 pt-lg-5">
      <div class="col-md-6 mt-lg-5 mt-3 fs-3 start-container">
        The commitment and innovation of Salagram has led to the company
        becoming a competitive and promising steel manufacturing company with
        an annual production capacity of 1.2 lakh tons. With its flagship
        brand Salagram MT, the company plans to become one of the top MT bar
        manufacturers in India. In order to contribute to India's economic
        growth, the company has aggressively expanded its footprint across the
        country
      </div>
      <div class=" col-md-6 align-items-end mt-lg-5 mt-3">
        <div class="hot-rod"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ">
        <button class="my-5 b-about-us text-center">About us</button>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container-fluid px-4 d-flex prod-cap flex-column page justify-content-around p-4 ">
      <div class="row">

        <div class="fs-3 text-white col-sm-12 col-lg-6">
          Our captive power plant at Burdwan's Dewandighi is producing 8MWH of
          electricity.
        </div>
      </div>
      <div class="d-flex justify-content-around white border border-4">
        <div class="py-2 fs-5 w-50 text-center">STEEL</div>
        <div class="py-2 fs-5 w-50 bg-white text-center text-dark">POWER</div>
      </div>
    </div>
  </section>
  <section class="d-flex w-100 align-items-center justify-content-center text-center my-4">
    <div class="fs-1 border border-4 border-warning px-4">OUR PRODUCTS</div>
  </section>
  <section class="d-flex w-100 align-items-center justify-content-center text-center my-4">
    <div class="fs-1 border border-4 border-warning px-4">OUR CLIENTS</div>
  </section>
  <?php include('footer.php') ?>
  <script src="app.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>