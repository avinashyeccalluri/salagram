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
        <div class="product-header-container d-flex flex-column justify-content-between p-4">
            <?php include('header.php') ?>
            <div class="row  text-light mbw-100">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 text-lg-start text-md-start text-center header-text">
                            PRODUCT
                            <div>MIX</div>
                        </div>
                        <div class="col-12 hide">
                            <div class="row d-flex justify-content-center align-content-flex-end text-dark h4">
                                <div class="col-2">SQUARE</div>
                                <div class="col-2">ROUND</div>
                                <div class="col-2">ANGLE</div>
                                <div class="col-2">TMT BARS</div>
                                <div class="col-2">SPONGE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container my-5 py-3">
        <div class="row">
            <div class="col-lg-6 col-12 lh fs-3" style="line-height: 75px;">
                <strong>Quality</strong> and <strong>value</strong> are the hallmarks of our Steel Products. Striking a fine <strong>balance between grip and flexibility</strong>,
                these corrosion-resistant bars help in <strong>reducing the chances of corrosion</strong> and make structures <strong>earthquake resistant.</strong>
            </div>
            <div class="col-lg-6 col-12">
                <img src="./images/steel_tmt.png" class="img-fluid" alt="" srcset="">
            </div>
        </div>
    </div>
    <section class="container">
        <div class="row">
            <div class="col-lg-5 col-12 h1 gradient text-light lh">OUR PRODUCTS</div>
        </div>
    </section>
    <section class="container my-5 py-3">
        <img src="./images/products.png" class="img-fluid" alt="">
    </section>
    <?php include('footer.php') ?>
    <script src="./js/app.js"></script>
    <script src="app.js"></script>
</body>

</html>