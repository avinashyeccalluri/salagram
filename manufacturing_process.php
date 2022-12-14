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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body class="">
    <header>
        <div class="production-header-container d-flex flex-column justify-content-between p-4">
            <?php include('header.php') ?>
            <div class="row  text-light mbw-100">
                <div class="col-lg-6 col-sm-12 text-lg-start text-md-start text-center header-text" data-aos="fade-up">
                    MANUFACTURING PROCESS
                </div>
            </div>
        </div>
    </header>
    <section class="my-lg-5 py-3 " data-aos="fade-up">
        <div class="container" data-aos-anchor-placement="center-bottom">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 col-12 d-flex justify-content-center align-items-center">
                    <img src="./images/Thermax_logo.png" class="img-fluid" alt="" srcset="">
                </div>
                <div class="col-lg-7 col-12 fs-4 my-3 vector" style="line-height: 50px;">
                    <div class="text-lg-start text-center">
                        Contrary to popular belief, Lorem Ipsum is not simply random
                        text. It has roots in a piece of classical Latin literature from 45
                        BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden-Sydney College in Virginia, looked up
                        one of the more obscure Latin words, consectetur, from a
                        Lorem Ipsum passage, and going through the cites of the
                        word in classical literature discovered the undoubtable
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" data-aos="fade-up">
        <div class="my-lg-5 container" data-aos-anchor-placement="center-bottom">
            <div class="row" data-aos="zoom-out">
                <div class="gradient1 h1 col-lg-4 col-sm-8 text-light text-lg-start text-center">
                    Production Process
                </div>
            </div>
        </div>
    </section>

    <section class="vector" data-aos="fade-up">
        <div class="container my-5" data-aos-anchor-placement="center-bottom">
            <div class="row">
                <div class="col-12">
                    <img src="./images/6-1.png" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>
    <script src="./js/app.js"></script>
    <script src="app.js"></script>

</html>