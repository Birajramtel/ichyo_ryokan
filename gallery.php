<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Hotel</title>
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/About_banner.png" class="d-block w-100" alt=" Banner image for Gallery Page">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Gallery</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Gallery Content Session Opened -->
    <div class="container mt-5 mb-5">
        <h2 class="Header_2"><strong>Gallery</strong></h2>
    </div>
    <div class="photo-gallery">
        <div class="container">
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_1.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_2.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_3.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_4.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_5.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_6.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_7.png"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item zoom"><a href="#" data-lightbox="photos"><img class="img-fluid" src="img/gallery/Gallery_8.png"></a></div>
            </div>
        </div>
    </div>
    <!-- Gallery Content Session Closed -->


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="jquery-1.9.1.min.js"></script>


    <!-- Include js plugin -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <?php include './include/script.php' ?>
    <?php include './include/carousel_footer_script.php' ?>

</body>

</html>