<?php
include "config.php";

if (isset($_POST["submit"])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Select = $_POST['Select'];
    $Description = $_POST['Description'];
    $ScheduleDate = $_POST['ScheduleDate'];

    $Sql = "INSERT INTO `req`(`name`, `email`, `problem_type`, `describe_problem`, `schedule_date`) 
        VALUES ('$Name', '$Email', '$Select', '$Description', '$ScheduleDate')";

    $Result = mysqli_query($Conn, $Sql);

    if ($Result) {
        header("Location: Requests.php");
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

                        <a href="Home.html" class="logo">
                            <img src="assets/images/Dern-systems-logo2.png" alt="">
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="Home.html">Home</a></li>
                            <li class="scroll-to-section"><a href="F&Q.html">F&Q</a></li>
                            <li class="scroll-to-section"><a href="Requests.php" class="active">Requests</a></li>
                            <li><a href="Login.php">Login<i class="fa-solid fa-arrow-right-to-bracket ms-2"></i></a>
                                <a href="SignUp.php" class="ms-3" style="background-color: orangered;">SignUp<i class="fa-solid fa-user-plus ms-2"></i></a>
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
                        <h2>Requests</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="mt-5">Enter Your problem</h1>
        <form class="mt-3" method="POST" novalidate>
            <div class="mb-3">
                <label class="form-label fw-bold">Name:</label>
                <input type="text" name="Name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" name="Email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="loginType" class="form-label fw-bold">Select type of problem:</label>
                <select class="form-select" name="Select" id="type" required>
                    <option value="Selcted" readonly selected>Select</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Describe a problem</label>
                <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Schedule date:</label>
                <input name="ScheduleDate" type="date" class="form-control">
            </div>

            <button type="submit" class="btn btn-success mt-3" name="submit">Submit</button>
        </form>
    </div>



    <div class="container mt-5">
        <table class="table table-striped mt-4 text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Problem type</th>
                    <th scope="col">Describe problem</th>
                    <th scope="col">Schedule date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";

                $Sql = "SELECT * FROM `req`";
                $Result = mysqli_query($Conn, $Sql);

                while ($row = mysqli_fetch_assoc($Result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["problem_type"] ?></td>
                        <td><?php echo $row["describe_problem"] ?></td>
                        <td><?php echo $row["schedule_date"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
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