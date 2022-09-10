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
        <div class="crs-header-container d-flex flex-column justify-content-between p-4">
            <?php include('header.php') ?>
            <div class=" row  text-light mbw-100">
                <div class="col-lg-6 col-sm-12">
                    <h1>CRS BAR</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="container-fluid px-5">
        <div class="row">
            <div class="col-md-6 mt-lg-5 mt-3 lh">
                There are many variations of passages of Lore Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable. If you are going to use a passage of Lorem
                Ipsum, you need to be sure there isn't anything embarrassing
                hidden in the middle of text. All the Lorem Ipsum generators on
                the Internet tend to repeat predefined chunks as necessary,
                making this the first true generator on the Internet. There are
                many variations of passages of Lore Ipsum available, but the
                majority have suffered alteration in some form, by injected
                humor, or randomised words which don't look even slightly
                believable. There are many variations of passages of Lorem
                Ipsum available, but the majority have suffered alteration in
                some form, by injected humour, or randomised words which
                don't look even slightly believable.
            </div>
            <div class="col-md-6  mt-lg-5 mt-3">
                <div class="tmt-bars"></div>
            </div>
        </div>
    </section>
    <section class="container-fluid px-5 orange-gradient mt-lg-5 text-light">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-12 lh">
                <div class="h3">APPLICATION</div>
                <div>
                    <ul>
                        <li>Typically used in construction in coastal areas.</li>
                        <li>Areas with high salinity in air.</li>
                        <li>Industrial areas.</li>
                        <li>Construction of marine structures.</li>
                        <li>In areas with high acid content in air.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 lh py-4">
                <div class="">
                    <img src="./images/sea-pillar.png" alt="" class="sea-pillar">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid px-5">
        <div class="row border border-2 border-danger lh mt-lg-5">
            <div class="h3 col-12 text-center border border-2 border-danger">
                OUR CORROSION RESISTANT STEEL (CRS) BAR(Fe-550D):
            </div>
            <div class="col-12 text-left">
                CRS MT Bar or Corrosion Resistant MT Bars are more advance than normal TMT.
                Their high corrosion resistance features make it a significant product in projects near
                coastal areas and with structures such as bridges and dams. This high-end product
                helps improve the life of the structure significantly. Manufactured by an addition of
                Copper and Chromium to prevent from the rust and corrosion. Copper will plug the
                pores in the rust. By adding Chromium (Cr) into steel, increase the passivity of anions.
                Chromium also increases the passivity and will form an invisible layer.
                Phosphorous acts as inhibitor. This will reduce the anodic reaction. These CRS bars
                are manufactured through the MT procedure in our plant.
                We are in a position to supply 8mm to 32mm dia and these are made to order of at least
                100MT per ce and ac lable in short lead time of 10-12 days from the date of confirm
                order
                DeLL
            </div>
        </div>
    </section>
    <?php include('footer.php') ?>
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