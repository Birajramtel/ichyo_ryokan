<!doctype html>
<html lang="en">

<head>
    <title>Ichyo Ryokan</title>
    <?php include './include/head.php' ?>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php include './include/header.php' ?>
    <!-- Banner Image  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Sanga.png" class="d-block w-100" alt=" Sanga View from our Hotel">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5"> Your home <br> away from Home.</h2>
                    <p class="para_color">Ichyo Ryokan is a Japanese modeled resort at Sanga that offers you a blend of 
                        Japanese and Nepali culture and cuisine. Our Japanese cuisine in a special cultural 
                        atmosphere shall definitely add excitement and memorable moment to your day-to-day life.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Ichyo.png" class="d-block w-100" alt="Ichyo Ryokan View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5"> Your home <br> away from Home.</h2>
                    <p>Ichyo Ryokan is a Japanese modeled resort at Sanga that offers you a blend of 
                        Japanese and Nepali culture and cuisine. Our Japanese cuisine in a special cultural 
                        atmosphere shall definitely add excitement and memorable moment to your day-to-day life.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Ichyo_view.png" class="d-block w-100" alt="View from our Hotel">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5"> Your home <br> away from Home.</h2>
                    <p class="para_color">Ichyo Ryokan is a Japanese modeled resort at Sanga that offers you a blend of 
                        Japanese and Nepali culture and cuisine. Our Japanese cuisine in a special cultural 
                        atmosphere shall definitely add excitement and memorable moment to your day-to-day life.
                    </p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Header Closed -->

    <!-- Form Opened -->
    <div class="container Form_bg">
        <form class="form_bg p-3 mt-3" action="">
            <div class="room_booking_header">
                <span class="d-flex justify-content-center text-white p-2 ">An inquiry email for room(s) booking for Aug 19 has been sent to ichyo ryokan. We will reach you out shortly</span>
            </div>
            <div class="row">
                <div class="col-md-2 mt-2">
                    <label for="rooms" class="text-white">Rooms</label>
                    <select id="room" name="room">
                        <option value="room_0">Rooms</option>
                        <option value="room_1">B&B</option>
                        <option value="room_2">SMALL</option>
                        <option value="room_3">PREMIUM</option>
                        <option value="room_4">EXPENCIVE</option>
                    </select>
                </div>
                <div class="col-md-3 mt-2">
                    <label for="Check In" class="text-white">Check In</label>
                    <input type="date" class="form-control" placeholder="Check In" aria-label="Check In">
                </div>
                <div class="col-md-3 mt-2">
                    <label for="Check Out" class="text-white">Check Out</label>
                    <input type="date" class="form-control" placeholder="Check Out" aria-label="Check Out">
                </div>
                <div class="col-md-3 mt-2">
                    <label for="Email" class="text-white">Email</label>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="d-flex justify-content-center pt-3">
                    <button type="submit" class="btn button-color text-white p-3">Submit Query &nbsp; <i class="fa fa-send-o"></i></button>
                </div>
            </div>
        </form>
    </div>
    <!-- Form Closed -->

    <!-- Section Opened -->
    <section>
        <!-- About Section Opened -->
        <div class="container mt-3">
            <div class="row pt-5 pb-5 mt-5">
                <div class="col-md-6 col-sm-12">
                    <h6 class="Header_6"> <strong>ABOUT US</strong></h6>
                    <h2 class="Header_2"> <strong><b>A blend of Japanese and Nepali Culture</b></strong></h2>
                    <p class="para_align">
                        <strong>Ichyo Ryokan is a Japanese modeled resort at Sanga that offers you a blend of Japanese and 
                            Nepali culture and cuisine. Our Japanese cuisine in a special cultural atmosphere shall definitely 
                            add excitement and memorable moment to your day to day life.
                        </strong>
                    </p>
                    <p class="para_align">The hospitality from the 24 hour front desk service, kitchen and ground staff makes 
                        it a memorable moment for you. he breakfast, lunch, dinner, and seasoned snacks prepared by the well 
                        trained cook can make your day with the choice of your drink.
                    </p>
                    <a href="about.php">
                        <button class="btn btn-lg btn-colour-1 float-end">Read More</button>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 m-0">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 d-flex justify-content-center">
                            <img src="img/Hotel Location 1.png" class="img-fluid p-1" alt="Sunset View">
                        </div>
                        <div class="col-md-6 col-sm-6 d-flex justify-content-center">
                            <img src="img/Hotel_Location 2.png" class="img-fluid p-1" alt="Mountain's View">
                        </div>
                    </div>
                    <img src="img/Hotel_Location 3.png" class="img-fluid p-1" alt="Our Hotel Banner" width="100%">
                </div>
            </div>
        </div>
        <!-- About Section Closed -->

        <!-- Package Image Opened -->
        <div class="package_session">
            <div class="container mt-5 pb-5">
                <h6 class="Header_6 pt-5"><strong>Rooms</strong></h6>
                <h2 class="Header_2_white"><strong><b>We bring you better among the best.</b></strong></h2>
                <h3 class="text-white pb-3">Special Features of our rooms :</h3>
                <div class="row pb-5">
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Blackout drapes curtains.png" class="text-center" alt=" Blackout drapes Curtains">
                        <figcaption class="text-white">Blackout drapes/ curtains</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Carpeted floor.png" alt="Carpeted floor">
                        <figcaption class="text-white">Carpeted floor</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/fan.png" alt="Fan">
                        <figcaption class="text-white">Fan</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Daily Housekeeping.png" alt="Daily Housekeeping">
                        <figcaption class="text-white">Daily Housekeeping</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Toiletries.png" alt="Toiletries">
                        <figcaption class="text-white">Toiletries</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Slippers.png" alt="Slippers">
                        <figcaption class="text-white">Slippers</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Hot water kettle.png" alt="Hot water kettle">
                        <figcaption class="text-white">Hot water kettle</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/wifi.png" alt="Wifi">
                        <figcaption class="text-white">Wi-Fi</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Balcony.png" alt="Balcony">
                        <figcaption class="text-white">Balcony</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Mountain view.png" alt="Mountain view">
                        <figcaption class="text-white">Mountain view</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Non-smoking.png" alt="Non-smoking">
                        <figcaption class="text-white">Non-smoking</figcaption>
                    </figure>
                    <figure class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="img/icons/Bath shower.png" alt="Bath Shower">
                        <figcaption class="text-white">Bath shower</figcaption>
                    </figure>                          
                </div>
            </div>
        </div>
        <!-- Package Image Closed -->

        <!-- Highlights Session Opened -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xm-8 ">
                    <h6 class="Header_6"><strong>HIGHLIGHTS</strong> </h6>
                    <h2 class="Header_2"> <strong><b>What you get <br>In a nutshell</b> </strong></h2>
                </div>
                <div class="col-md-6 col-sm-12 col-xm-4 mt-auto mb-auto">
                    <a href="explore_shivapuri.php">
                        <button class="btn col-5 btn-colour-1 btn-lg float-md-end mb-2">Explore</button>
                    </a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-6">
                    <div class="card">
                        <img src="img/rooms 1.png" class="card-img-top" alt="Bishnudwaar">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Rooms</h5>
                            <p class="card-text para_align">
                                All our 15 rooms exhibit an exclusive contemporary Japanese living style. 
                                The neat and decent room always awaits you. The decoration and arrangements 
                                are designed for a pleasurable stay. Check in time: 2:00 pm Check out time: 12:00 noon
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="img/mam.png" class="card-img-top" alt="Day Package - Picnic">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Restaurant</h5>
                            <p class="card-text para_align">
                                Ichyo Ryokan has a mini restaurant capable of serving 30 people at a time. 
                                It also has a roof top terrace that makes it possible to dine in the panoramic 
                                setting. The kitchen and the ground staff will cater your every need.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="card">
                        <img src="img/Dining.png" class="card-img-top" alt="Teen Chuli">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Dining Hall </h5>
                            <p class="card-text para_align pb-0">
                            You may require a larger space for a meeting or a seminar where your work is blended 
                            with the pristine surrounding and fine delicacies of foods. Ichyo Ryokan’s conference 
                            hall meets your requirements and is an ideal place for meetings and seminars. The 
                            conference hall has to the capacity to easily adjust thirty people without any cramming.</p>                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="img/view.png" class="card-img-top" alt="Meeting and Seminar">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Nearby Places</h5>
                            <p class="card-text para_align">
                                Kailashnath Mahadev statue &nbsp; Kathmandu Fun Valley <br> 
                                Jungle Hiking &nbsp;Suspension Bridge <br> Aashapuri Temple &nbsp; Panauti  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Highlight session Closed -->


        <!-- Photo Session Opened -->
        <?php include './include/carousel_footer.php' ?>
        <!-- Photo Session Closed -->
    </section>
    
    <!-- Footer Session Opened -->
    <?php include './include/footer.php' ?>
    <!-- Footer Session Closed -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->

    <!--  jQuery 1.7+  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery-1.9.1.min.js"></script>

    <!-- Include js plugin -->
    <script src="./css/owl.carousel.js"></script>

    <!-- include scripts -->
    <?php include './include/script.php' ?>

    <?php include './include/carousel_footer_script.php' ?>

</body>

</html>