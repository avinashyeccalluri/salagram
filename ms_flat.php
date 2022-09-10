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
            <div class="row  text-light mbw-100">
                <div class="col-lg-6 col-sm-12">
                    <strong>
                        <h1>MS FLAT</h1>
                    </strong>
                </div>
            </div>
        </div>
    </header>
    <section class="container my-lg-5">
        <div class="row">
            <div class="col-12 lh fs-3" style="line-height: 48px;">
                <strong>MS Flat</strong> are used by many engineering industries, including grating manufacturers,
                cable trays, bright bar manufacturers, automobiles, car accessories, truck trailers, tippers,
                railroads, buses, elevators and escalators, scaffold manufacturers, base plates, earthing
                material, shipbuilding, washers, flanges, clamps, and many more.
            </div>
            <div class="col-12"></div>
        </div>
    </section>
    <section class="container">
        <div class="row vh-50">

            <div class="col-md-7">
                <div class="h1 gradient text-light container lh">Application</div>

                <ul class="lh h3" style="line-height: 56px;">
                    <li>Building Construction</li>
                    <li>Automobile Industry</li>
                    <li>Structural Construction</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="./images/metal_pouring.jpeg" class="img-fluid" alt="" style="height: 100%;">
            </div>
        </div>
    </section>

    <section class="container">
        <h1 class="orange-text h1">Product Size Chart</h1>
        <div class="row d-flex justify-content-left align-content-center my-3">
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">19°6F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">20°5F F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">20°6F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">25°5F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">25°6F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">25°8F</div>
        </div>
        <div class="row d-flex justify-content-left align-content-center my-3">
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">30°5F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">30°6F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">32°6F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">32°8F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">35°6F</div>
            <div class="col-2 bg-orange text-center mar-right h-40 w-15 pt-6">40°6F</div>
        </div>
    </section>
    <?php include('footer.php') ?>
    <script src="app.js"></script>

</html>