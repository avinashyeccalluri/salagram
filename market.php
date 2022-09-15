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
        <div class="market-header-container d-flex flex-column justify-content-flex-start  p-4">
            <?php include('header.php') ?>
            <div class="container my-5 py-3">
                <div class="row text-center">
                    <div class="col-6 h3 orange-background bottom-gradient text-white">
                        Domestic Market
                    </div>
                    <div class="col-6 orange-text h3">
                        International Market
                    </div>
                    <div class="col-12">
                       <img src="./images/india.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6 h3 orange-text ">
                        Domestic Market
                    </div>
                    <div class="col-6 h3 orange-background bottom-gradient text-white">
                        International Market
                    </div>
                    <div class="col-12">
                       <img src="./images/international.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php include('footer.php') ?>
    <script src="./js/app.js"></script>
    <script src="app.js"></script>

</html>