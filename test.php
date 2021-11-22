<!doctype html>
<html lang="en">

<head>
    <title>Ichyo Ryokan</title>
    <?php include './include/head.php' ?>
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
                <img src="img/Slider_image_1.png" class="d-block w-100" alt=" Hotel View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5"> Your home <br> away from Home.</h2>
                    <p>Naava is an amalgamation of comfort, beauty and adventure: whether you are
                        someone seeking a break from your daily affairs or someone seeking adventure
                        or insight into Nepal’s diverse flora and fauna, Naava is the perfect place for you.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Slider_image_2.png" class="d-block w-100" alt="Hotel View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5"> Your home <br> away from Home.</h2>
                    <p>Naava is an amalgamation of comfort, beauty and adventure: whether you are
                        someone seeking a break from your daily affairs or someone seeking adventure
                        or insight into Nepal’s diverse flora and fauna, Naava is the perfect place for you.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Slider_image_3.png" class="d-block w-100" alt="Hotel View">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="header_1 pb-5"> Your home <br> away from Home.</h2>
                    <p>Naava is an amalgamation of comfort, beauty and adventure: whether you are
                        someone seeking a break from your daily affairs or someone seeking adventure
                        or insight into Nepal’s diverse flora and fauna, Naava is the perfect place for you.
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
    <div class="container d-none d-md-block Form_bg">
        <form class="form_bg p-3 mt-3" action="">
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
                    <button type="submit" class="btn btn-light">Submit</button>
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
                    <h2 class="Header_2"> <strong><b>Best Location for Best Experience </b></strong></h2>
                    <p class="para_align">
                        <strong>Situated a mere 12.5 kilometers away from Kathmandu,Naava offers you a quick escape
                            from the hustle and bustle of the city and allows you to immerse into Shivapuri’s natural beauty.
                        </strong>
                    </p>
                    <p class="para_align">Naava is an amalgamation of comfort, beauty and adventure: whether you are someone
                        seeking a break from your daily affairs or someone seeking adventure or insight into Nepal’s diverse
                        flora and fauna, Naava is the perfect place for you. With friendly and hospitable staff, quality food
                        and spacious, modern architectural rooms, you can experience a new home, away from home. With an eagle
                        eye view of Kathmandu Valley, beautiful Langtan Himalayas, lush rhododendron forests as well as prestigious
                        religious sites like Bagdwar and Bishnudwar, the Shivapuri hike oﬀers you an experience unlike any other.
                    </p>
                    <a href="about.php">
                        <button class="btn btn-lg btn-colour-1 float-end">Read More</button>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 m-0">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 d-flex justify-content-center">
                            <img src="img/Hotel Location 1.png" class="img-fluid p-1" alt="Hotel Location">
                        </div>
                        <div class="col-md-6 col-sm-6 d-flex justify-content-center">
                            <img src="img/Hotel_Location 2.png" class="img-fluid p-1" alt="Hotel Location">
                        </div>
                    </div>
                    <img src="img/Hotel_Location 3.png" class="img-fluid p-1" alt="Hotel Location" width="100%">
                </div>
            </div>
        </div>
        <!-- About Section Closed -->

        <!-- Package Image Opened -->
        <div class="package_session">
            <div class="container mt-5">
                <h6 class="Header_6 pt-5"><strong>Packages</strong></h6>
                <h2 class="Header_2_white"><strong><b>We bring you better<br>among the best.</b></strong></h2>
                <div class="row pb-5">
                    <div class="col-md-3 col-sm-6 mb-2 mt-5">
                        <div class="card" style="width: 23 rem;">
                            <img class="card-img-top" src="img/Seminar Hall from Back.png" alt="Seminar Hall from Back">
                            <div class="card-body">
                                <h5 class="card-title"><strong> B&B </strong></h5>
                                <p class="card-text">This includes accommodation for 2 and served with continental breakfast in the morning.</p>
                                <a href="room.php" class="btn btn-colour-1 float-end">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2 mt-5">
                        <div class="card" style="width: 23 rem;">
                            <img class="card-img-top" src="img/Seminar Hall from Back.png" alt="Seminar Hall from Back">
                            <div class="card-body">
                                <h5 class="card-title"><strong> Full Board </strong></h5>
                                <p class="card-text">This includes accommodation for 2 and served with continental breakfast in the morning.</p>
                                <a href="room.php" class="btn btn-colour-1 float-end">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2 mt-5">
                        <div class="card" style="width: 23 rem;">
                            <img class="card-img-top" src="img/Seminar Hall from Back.png" alt="Seminar Hall from Back">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Full Board Premium</strong></h5>
                                <p class="card-text">This includes accommodation for 2 and served with continental premium breakfast in the morning.</p>
                                <a href="room.php" class="btn btn-colour-1 float-end">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2 mt-5">
                        <div class="card" style="width: 23 rem;">
                            <img class="card-img-top" src="img/Seminar Hall from Back.png" alt="Seminar Hall from Back">
                            <div class="card-body">
                                <h5 class="card-title"><strong> Half Board </strong></h5>
                                <p class="card-text ">This includes accommodation for 2 and served with continental breakfast in the morning.</p>
                                <a href="room.php" class="btn btn-colour-1 float-end">Learn More</a>
                            </div>
                        </div>
                    </div>
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
                        <img src="img/Bishnudwaar.png" class="card-img-top" alt="Bishnudwaar">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Bird Watching</h5>
                            <p class="card-text para_align">
                                Shivapuri has played a vital role in bird conservation and tourism.
                                886 species of birds have been recorded in Nepal, which are about 9% of
                                the total bird species found worldwide. Among them, 42 species are globally
                                threatened and 35 globally near threatened.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="img/Day Package - Picnic.png" class="card-img-top" alt="Day Package - Picnic">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Day Package - Picnic </h5>
                            <p class="card-text para_align">
                                Picnics are perfect means of getaway from the urban hustle and daily grind.
                                At Naava, you can book a picnic spot and spend time with your family. We
                                have the capacity of managing picnic for 100 participants and have variety
                                of menu to offer to our respected guest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="card">
                        <img src="img/Teen Chuli.png" class="card-img-top" alt="Teen Chuli">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Hike and Jungle Safari </h5>
                            <p class="card-text para_align pb-0">
                                Your perfect adventure guide.
                                Available hiking routes:</p>
                            <ul class="pt-0 mt-0">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <li>
                                            Trail Code 101 – Naagi Gumba
                                        </li>
                                        <li>
                                            Trail 2 Code 102 – Bishnudwar
                                        </li>
                                        <li>
                                            Trail Code 103 – Baghdwar
                                        </li>
                                        <li>
                                            Trail Code 104 – Shivapuri Peak
                                        </li>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <li>
                                            Trail Code 105 – Sundarijal
                                        </li>
                                        <li>
                                            Trail Code 106 – Chisapani (Hike)
                                        </li>
                                        <li>
                                            Trail Code 107 – Chisapani (Safari)
                                        </li>
                                    </div>
                                </div>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="img/Meeting and Seminar.png" class="card-img-top" alt="Meeting and Seminar">
                        <div class="card-body">
                            <h5 class="card-title Header_2">Meeting and Semina</h5>
                            <p class="card-text para_align">
                                Imagine holding a most productive workshop or a seminar, or even just
                                a brainstorming session, in a fresh, natural environment that's so
                                conveniently located, you'll appreciate how much time is saved in
                                arranging one, Imagine the unleashing of creativity and the opening
                                of minds, thats ensured by the wonderfully refreshing and cozy ambience.
                                We have capacity of 20 person in a round table layout and 30 in theatre
                                style set up.
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