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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Document</title>
</head>

<body class="">
  <header>
    <div class="carrier-header-container d-flex flex-column justify-content-between p-4">
      <?php include('header.php') ?>
      <div class="row text-light mbw-100">
        <div class="col-lg-6 col-sm-12 text-lg-start text-md-start text-center header-text text-light">
        Career
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-lg-8 col-sm-12 container">
        <div class="row d-flex justify-content-between align-items-center container px-5">
          <div class="col-12">
            <div class="fs-1 orange-text">
              <strong>Our
                <div>Culture</div>
              </strong>
            </div>
          </div>
          <div class="col-12 orange-text fs-3">
            Creating an inclusive culture is our shared mission with senior
            leaders,Human resource and Business Relations.
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <img src="./images/customer_support.png" alt="" class="img-fluid" />
      </div>
    </div>
  </section>
  <section>
    <div class="row d-flex justify-content-between align-items-center flex-lg-row flex-column-reverse orange-background">
      <div class="col-lg-4 col-sm-12">
        <img src="./images/hand_shake.png" alt="" class="img-fluid" />
      </div>
      <div class="col-8 ">
        <div class="row d-flex justify-content-between align-items-center text-light">
          <div class="col-12">
            <div class="fs-1">
              <strong>Career
                <div>Growth</div>
              </strong>
            </div>
          </div>
          <div class="col-12 fs-3">
            It is crucial that employees are empowered to achieve their
            professional goals in order to ensure sustainable growth in the
            organization.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container my-5">
    <div class="row d-flex align-items-center orange-text">
      <div class="col-lg-4 col-6 ">
        <img src="./images/customer_support.png" alt="" class="img-fluid" />
      </div>
      <div class="col-lg-8 col-6">
        <h3>Employee Speak</h3>
        <div>
          Employee-1 Career growth for employees has been a key focus at
          salagram. Everyday day brings new challenges and new possibilities
          that make learning and growing possible. I am greatly for the
          opportunity to serve in such an amazing organization.
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="row d-flex">
      <div class="col-lg-3 col-12">
        <select class="form-select" aria-label="Default select example">
          <option selected>Current Opening</option>
          <option value="1">Engineer</option>
          <option value="2">Junior Engineer</option>
          <option value="3">Assistant Engineer</option>
        </select>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 text-muted">PERSONAL DETAILS</div>
      <div class="col-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
      <div class="col-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
      <div class="col-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Qualification" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
      <div class="col-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
      <div class="col-4">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Contact Number" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="d-flex align-items-center flex-column justify-content-center">
      <div class="row">
        <div class="col-12">
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" />
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
        </div>
      </div>
    </div>

    <div class="row d-flex text-center justify-content-center my-3">
      <div class="col-lg-4 col-8 price pt-1">SUBMIT APPLICATION</div>
    </div>

    <div class="row text-center justify-content-center my-3">
      <div class="col-lg-2 col-6 price pt-1 carrier-bottom-gradient">JOIN US</div>
    </div>
  </section>
  <?php include('footer.php') ?>
  
  <script src="./js/app.js"></script>
    <script src="app.js"></script>
</body>

</html>