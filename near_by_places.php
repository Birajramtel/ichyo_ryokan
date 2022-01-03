<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Ichyo Ryokan</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/About_banner.png" class="d-block w-100" alt=" Hotel Front">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Nearby Places</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="near_by_places.php">Nearby Places</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Explore Shivapuri Content Session Opened -->
    <div class="container mt-5 ">
        <h2 class="Header_2"><strong>Nearby Places</strong></h2>
        <p class="para_align ml-4 mb-2">
            At an elevation of 8963 ft on the Northern side of Kathmandu, Shivapuri is the second largest hill
            surrounding the valley. Only an hour away from Kathmandu, it is a popular destination for hikers,
            mountain bikers, researchers, bird watchers and pilgrims.
        </p>
    </div>
    <div class="container mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="img/near_by_place_3.png" class="card-img-top" alt=" Shiva View">
                    <div class="card-body">
                        <h5 class="card-title"><strong> View from Hotel</strong></h5>
                        <p class="card-text justify_para">The world’s tallest Shiva statue, 144 feet tall Shiva statue, stands jst opposite Ichyo Ryokan. 
                            The extraordinary aura of the place wth beautiful surroundings is an ideal place for spending 
                            family time together. The vibes of the place will certainly attract you if you are a religious person.
                        </p>
                    </div>
                    <a href="contact.php" class="btn btn-primary text-white btn-lg zoom" type="button">Get Direction &nbsp; <i class="fas fa-map-marked-alt"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/near_by_place_2.png" alt=" Shiva View">
                    <div class="card-body">
                        <h5 class="card-title"><strong> View from Hotel</strong></h5>
                        <p class="card-text justify_para">The world’s tallest Shiva statue, 144 feet tall Shiva statue, stands jst opposite Ichyo Ryokan. 
                            The extraordinary aura of the place wth beautiful surroundings is an ideal place for spending 
                            family time together. The vibes of the place will certainly attract you if you are a religious person.
                        </p>    
                    </div>
                    <a href="contact.php" class="btn btn-primary text-white btn-lg zoom" type="button">Get Direction &nbsp; <i class="fas fa-map-marked-alt"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/near_by_places_1.png" alt=" Shiva View">
                    <div class="card-body">
                        <h5 class="card-title"><strong> View from Hotel</strong></h5>
                        <p class="card-text justify_para">The world’s tallest Shiva statue, 144 feet tall Shiva statue, stands jst opposite Ichyo Ryokan. 
                            The extraordinary aura of the place wth beautiful surroundings is an ideal place for spending 
                            family time together. The vibes of the place will certainly attract you if you are a religious person.
                        </p>      
                    </div>
                    <a href="contact.php" class="btn btn-primary text-white btn-lg" type="button">Get Direction &nbsp; <i class="fas fa-map-marked-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Shivapuri Content Session Closed -->


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
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <?php include './include/script.php' ?>
    <?php include './include/carousel_footer_script.php' ?>
</body>

</html>