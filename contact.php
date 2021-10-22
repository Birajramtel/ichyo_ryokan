<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Hotel</title>
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
            <img src="img/About_banner.png" class="d-block w-100" alt=" Contact us">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Contact</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Contact Contain Session Opened -->
    <div class="container mt-5 mb-5">
        <h2 class="Header_2"><strong><b> Contact us to get <br> free support.</b></strong></h2>
        <form>
            <div class="row">
                <div class="col-md-8 col-sm-12 mb-2 d-none d-md-block">
                    <div class="form-group">
                        <textarea class="form-control" rows="15" id="Description" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group input-group-lg mb-2">
                        <input type="text" class="form-control input-lg" id="inputlg" placeholder="Name">
                    </div>
                    <div class="form-group input-group-lg mb-2">
                        <input type="email" class="form-control input-lg" id="inputlg" placeholder="Email">
                    </div>
                    <div class="form-group input-group-lg mb-2">
                        <input type="text" class="form-control input-lg" id="inputlg" placeholder="Subject">
                    </div>
                    <div class="form-group input-group-lg mb-2 d-sm-block d-md-none">
                        <textarea class="form-control" rows="5" id="Description" placeholder="Description"></textarea>
                    </div>
                    <button style="font-size:18px" class="btn btn-colour-1 btn-sm col-12"> Send <i class="fa fa-send-o"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="container footer-social-icon pb-2">
        <div class="row mt-5 mb-2">
            <div class="col-md-4 col-sm-4 single-cta d-flex justify-content-center">
                <i class="far fa-envelope-open"></i>&nbsp;<span class="pt-2"><strong>minatamanglama@gmail.com</strong></span>
            </div>
            <div class="col-md-4 col-sm-4 single-cta d-flex justify-content-center">
                <i class="fas fa-phone-alt"></i>&nbsp;<span class="pt-2"><a href="tel:011-660864" class="text-dark"><strong>011-660864</strong></a></span>
            </div>
            <div class="col-md-4 col-sm-4 single-cta d-flex justify-content-center">
                <i class="fas fa-map-marker-alt"></i>&nbsp;<span class="pt-2"><strong>Sanga-Ashapuri marg</strong></span>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <img src="img/Contact_banner.png" class="w-100 zoom" alt=" Find our Location">
    </div>

    <!-- Contact Contain Session Closed -->


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