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
                    <h1>CSR</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                <div>We envision a long-term goal of creating
                    a sustainable and self-reliant community.
                    Our projects focus on providing
                    educational and health care facilities,
                    along with promoting sustainable
                    livelihoods and animal welfare.
                </div>
                <div>Additionally, we aim to contrihi*
                    at least
                    1% of its annual income to charitable
                    causes. Furthermore, we emphasize the
                    importance of adopting ethical practices
                    and values in our policies
                </div>
            </div>
            <div class="col-6">
                <img src="./images/customer_support.png" class="img-fluid" alt="" srcset="">
            </div>
        </div>
    </section>
    <section class="container">
        <div class="fs-2">Our Initiatives</div>
    </section>

    <section>
        <div class="row vh-70 poligon-shadow">
            <div class="col-4 poligon bg-danger ">
                <div class="row">
                    <div class="col-12">
                        <div class="poligon-image"></div>
                    </div>
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                        <div class="fs-3 border-bottom pb-3">
                            Education
                        </div>
                        <div>
                            To ensure that children have access to quality education, we have partnered with a number of charitable institutions. Across india, we work with many non-profit organizations.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 poligon bg-danger"></div>
            <div class="col-4 poligon bg-danger"></div>
        </div>
        <div class="row"></div>
    </section>
    <section class="d-flex justify-content-center align-items-center">
        <figure class="snip1533">
            <figcaption>
                <blockquote>
                    <p>"CSR isn't a particular programme, it's what we do every day, maximizing positive impact and minimizing negative impact "</p>
                </blockquote>
            </figcaption>
        </figure>
    </section>
    <?php include('footer.php') ?>
    <script src="app.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>