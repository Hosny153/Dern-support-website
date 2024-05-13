<?php
include "Config.php";

if (isset($_POST["submit"])) {
    $Name = $_POST['Name'];
    $Count = $_POST['Count'];
    $Price = $_POST['Price'];

    $Sql = "INSERT INTO `spare`(`name`, `count`, `Price`) VALUES ('$Name','$Count','$Price')";

    $Result = mysqli_query($Conn, $Sql);

    if ($Result) {
        header("Location: Spare parts.php");
    } else {
        echo "Failed: " . mysqli_error($Conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Dern support</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">


</head>

<body>


    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="Home(Login).php" class="logo">
                            <img src="assets/images/Dern-systems-logo2.png" alt="">
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="Home(Login).php">Home</a></li>
                            <li class="scroll-to-section"><a href="Spare parts.php" class="active">Spare parts</a></li>
                            <li class="scroll-to-section"><a href="F&Q(Log).html">F&Q</a></li>
                            <li class="scroll-to-section"><a href="Requests(Log).php">Requests</a></li>
                            <li><a href="Logout.php" style="background-color: red;">Logout<i class="fa-solid fa-right-from-bracket ms-2"></i></a>
                                <a href="Information.php" class="ms-3" style="background-color: #1f1f1f;">My Account<i class="fa-solid fa-user ms-2"></i></a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Spare parts</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="mt-5">Add New Item</h2>
        <form method="POST" novalidate>
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="Name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Count:</label>
                <input type="text" name="Count" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Price:</label>
                <input name="Price" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Add Item</button>
            <br>
            <a class="btn btn-secondary mt-3 " href="Spare parts.php" role="button">Back to product list</a>
        </form>
    </div>



    <footer style="margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright ©2024 Dern support. All rights reserved.
                </div>
            </div>
        </div>
    </footer>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var interleaveOffset = 0.5;

        var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                progress: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function(speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                }
            }
        };

        var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>

</body>

</html>