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
                <div class="col-lg-6 col-sm-12 text-lg-left text-center header-text">
                    STORE LOCATOR
                </div>
            </div>
        </div>
    </header>
    <div class="container my-5">
        <div class="">

            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-sm-12 default-border-color border border-4 price_list_border_radius">
                    <div class="h3 border-bottom border-1 py-2">
                        <strong>Home Owner Zone</strong>
                    </div>
                    <div class="row">
                        <div class="col-12 py-2"><strong>Recommended Consumer Price</strong></div>
                        <div class="col-12 text-light bg-orange py-3" style="border-bottom-left-radius: 27px;border-bottom-right-radius: 27px;"><strong>Dealer Locator</strong></div>
                    </div>
                </div>

                <div class="col-lg-8 col-sm-12 border border-4 price_list_border_radius mt-2 d-flex justify-content-around align-items-center">
                    <div class="row d-flex justify-content-around align-items-center">
                        <div class="col-lg-6 col-sm-12">
                            <strong>Locate our Distributor/Retailer</strong>
                            <div class="row">

                                <div class="orange-text h3 col-lg-12">
                                    <strong>By District</strong>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select State</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select District</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-12 my-3">
                                    <button type="button" class="text-right price_list_border_radius gradient1 h4 price_button">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12 h1 text-lg-start text-center">
                            OR
                        </div>
                        <div class="col-lg-5 col-12 orange-text mt-5">
                            <div>By Location</div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-6">
                                    <div>PIN CODE : </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="col-12 my-3">
                                    <button type="button" class="text-right price_list_border_radius gradient1 h4 price_button">Search</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">

            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <script src="app.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>