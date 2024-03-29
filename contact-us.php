<!DOCTYPE html>
<html lang="en">
​

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
    ​
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        .contact_us_center_div {
            box-shadow: 0 1px 10px 0 rgb(0 0 0 / 14%);
            border-radius: 50px 0px 0px 50px;
            height: fit-content !important
        }

        @media only screen and (max-width: 576px) {
            .contact-us-form {
                border-right: 55px solid orange;
            }
        }
    </style>
</head>
​<?php 
if(isset($_POST['submit'])){
    $to = "yeccaluriavinash@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name .  " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<body class="">
    <header>
        <div class="contact-us-header-container d-flex flex-column justify-content-between p-4">
            <?php include('header.php') ?>
            <div class="row  text-light mbw-100">
                <div class="col-lg-6 col-sm-12 text-lg-start text-md-start text-center header-text">
                </div>
            </div>
        </div>
    </header>
    <section class="container w-70 contact-us-form mt-4 mb-4 contact-us-form"  data-aos="fade-up">
        <div class="row vh-50 d-flex justify-content-start align-items-center contact_us_center_div pb-3" data-aos-duration="3000">
            <div class="col-12">
                <?php if (!empty($statusMsg)) { ?>
                    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 px-5">
                <form action="" method="post">
                    <div class="row d-flex ">
                        <div class="col-12 h3 mt-3"><strong>Contact Us</strong></div>
                        <div class="col-12 h5 text-muted">Feel free to contact us anytime. We will get back to you as soon as possible !</div>
                        <div class="col-12 py-3">
                            <input type="text" name="name" id="" class="input-fields" placeholder="Name">
                        </div>
                        <div class="col-12 py-3">
                            <input type="email" name="email" id="" class="input-fields" placeholder="Email">
                        </div>
                        <div class="col-12 py-3">
                            <input type="textarea" name="message" id="" class="input-fields" placeholder="Message">
                        </div>
                        <div class="col-12 py-3 d-flex justify-content-lg-start justify-content-center align-items-lg-start align-items-center">
                        <input type="text" name="submit" value="Submit" hidden>
                                <button class="btn carrier-bottom-gradient" type="submit"  name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-light info_contact_us p-3">
                <h1>INFO</h1>
                <div class="row ">
                    <div class="col-12"> info@salagram.co.in</div>
                    <div class="col-12">+91 33 40862000</div>
                    <div class="col-12">
                        <div>Salagram Power & Steel LTD</div>
                        <div>Room No. 403, 4th Floor</div>
                        <div>Continental, 83/2/1 Topsia Road(s),</div>
                        <div>Kolkata</div>
                        <div>PIN-700046</div>
                    </div>
                </div>
                ​
            </div>
        </div>
    </section>
    <section class="">
        <div class="row d-flex flex-column justify-content-center align-items-center position-relative">
            <div class="col-12" style="position: relative;top: -99px;">
                <div class="container">​
                    <div class="row d-flex justify-content-start align-items-center ">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <img src="./images/Layer 2.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-12 montserrat">
                                    <div class="row py-3 text-light bold">
                                        <div class="col-12 ">
                                            OFFICE ADDRESS
                                        </div>
                                        <div class="col-12 py-4">
                                            <div>SALAGRAM POWER & STEEL PVT LTD</div>
                                            <div>ROOM NO 403, 4TH FLOOR </div>
                                            <div>CONTINENTAL, 83/2/1 ROAD(S),</div>
                                            <div>KOLKATA, PIN-700046</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <img src="./images/plant 2.jpg" class="img-fluid w-100" alt="" style="height: 362px !important;">
                                </div>
                                <div class="col-12 montserrat">
                                    <div class="row py-3 text-light bold">
                                        <div class="col-12">
                                            PLANT ADDRESS
                                        </div>
                                        <div class="col-12 py-4">
                                            <div>PALITPUR ROAD,</div>
                                            <div>DEWANDIGHI,</div>
                                            <div>BURWAN,</div>
                                            <div>PIN-713102,</div>
                                        </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 position-absolute" style="top: 15rem;z-index: -100;">
                <div class="vh-90 carrier-bottom-gradient -absolute">
                    ​
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="">
        <div class="position-relative">
            <div class="vh-50 carrier-bottom-gradient position-absolute">
​
            </div>
        </div>
    </section> -->
    <?php
    // Form submission script 
    include_once 'submit.php';
    ?>
    <?php include('footer.php') ?>
    <script src="./js/app.js"></script>
    <script src="app.js"></script>
    ​

</html>