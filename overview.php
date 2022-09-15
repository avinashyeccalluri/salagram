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
        <div class="overview-header-container d-flex flex-column justify-content-between p-4">
            <?php include('header.php') ?>
            <div class=" row  text-light mbw-100">
                <div class="col-lg-6 col-sm-12">
                    <div class="px-5 fs-1 header-text">UNCOMPROMISING VALUES</div>
                    <div class="px-5 fs-1 header-text">UNPARALLELED STRENGTH</div>
                </div>
            </div>
        </div>
    </header>
    <section class="container my-5 py-3">
        <div class="row d-flex justify-content-center align-items-center flex-lg-row flex-column-reverse">
            <div class="col-lg-6 col-12 our-story">Our Story</div>
            <div class="col-lg-6 col-12">
                <div class="my-2">Salagram Steel was founded in 2016 after the demerger of
                    Shyam Metallics, one of the leading steel manufacturers in
                    India. Over the last five years, it has grown to have a
                    geographical presence across India.
                </div>
                <div class="my-2">
                    Salagram Steel has an annual production capacity of 1.2 lakh
                    tons which makes it a competitive steel producer that is
                    committed to manufacturing superior quality products
                    using modern technology.
                </div>
                <div class="my-2">
                    The company has ambitious plans to make its flagship
                    brand Salagram TMT the leader in TMT rebars in India.
                    Salagram Steel is consistently focusing on expanding its
                    presence, firm in its belief that it can contribute positively to
                    the economic growth of India.
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <img src="./images/overview.png" class="img-fluid p-5" alt="" srcset="">
        </div>
    </section>
    <section>
        <div class="">
            <div class="row h1 ">
                <div class="offset-lg-4 col-lg-3 col-6 text-light text-center carrier-bottom-gradient ">
                    <strong>CAPACITY</strong>
                </div>
            </div>

            <div class="row orange-border m-5 d-flex justify-content-center align-items-center py-3">
                <div class="col-lg-6 col-12 py-2">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-3 overview-orange orange-gradient"></div>
                        <div class="col-lg-3 col-6">Thermal</div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 py-2">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-3 overview-orange orange-gradient"></div>
                        <div class="col-lg-3 col-6">8 MWH</div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 py-2">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-3 overview-grey orange-gradient"></div>
                        <div class="col-lg-3 col-6">STEEL</div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 py-2">
                    <div class="row d-flex justify-content-center ">
                        <div class="col-3 overview-grey orange-gradient"></div>
                        <div class="col-lg-3 col-6">1.2 Lakh MTPA</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php') ?>
    <script src="app.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>