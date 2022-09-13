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
        <div class="round-header-container d-flex flex-column justify-content-between p-4">
            <?php include('header.php') ?>
            <div class="row  text-light mbw-100">
                <div class="col-lg-6 col-sm-12">
                    <strong>
                        <h1>MS ROUND</h1>
                    </strong>
                </div>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="row">
            <div class="col-6">
                <div class="row d-flex ">
                    <div class="col-12 h3"><strong>Contact Us</strong></div>
                    <div class="col-12">Feel free to contact us anytime. We will get back to you as soon as possible !</div>
                    <div class="col-12">
                        <input type="text" name="" id="" class="input-fields" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="email" name="" id="" class="input-fields" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="textarea" name="" id="" class="input-fields" placeholder="Message">
                    </div>
                    <div class="col-6">
                        <button class="btn carrier-bottom-gradient">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                    <div class="row bg-danger">
                        <div class="col-12">info@salagram.co.in</div>
                        <div class="col-12">+91 33 40862000</div>
                        <div class="col-12">
                            <div>Salagram Power & Steel LTD</div>
                            <div>Room No. 403, 4th Floor</div>
                            <div>Continental, 83/2/1  Topsia Road(s),</div>
                            <div>Kolkata</div>
                            <div>PIN-700046</div>
                        </div>
                    </div>

            </div>
        </div>

    </section>
    <?php include('footer.php') ?>
    <script src="app.js"></script>

</html>