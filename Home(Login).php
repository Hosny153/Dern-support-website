<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Dern support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="Home(Login).php" class="logo">
                            <img src="assets/images/Dern-systems-logo2.png" style="width: 250px;" alt="">
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="Spare parts.php">spare parts</a></li>
                            <li class="scroll-to-section"><a href="F&Q(Log).html">F&Q</a></li>
                            <li class="scroll-to-section"><a href="Requests(Log).php">Requests</a></li>
                            <li><a href="Logout.php" style="background-color: red;">Logout<i class="fa-solid fa-right-from-bracket ms-2"></i></a>
                            <a href="Information.php" class="ms-3" style="background-color: #1f1f1f;">My Account<i class="fa-solid fa-user ms-2"></i></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="swiper-container" id="top">
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(assets/images/slide-01.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-text">
                                <h2>Empowering<em> your tech journey</em> with expert guidance and <br>&amp; seamless <em>technical support solutions.</em></h2>
                                <div class="div-dec"></div>
                                <p>
                                    At our technical support hub, we're here to make your tech life easier. Whether it's fixing software issues, setting up new hardware, or optimizing your digital setup, our experts have got you covered. With fast service and tailored solutions, we're dedicated to helping you navigate technology smoothly. Count on us as your dependable partner for reliable support at every turn.</p>
                                <div class="buttons">
                                    <div class="green-button">
                                        <a href="#">Start</a>
                                    </div>
                                    <div class="orange-button">
                                        <a href="#about">About-us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="margin-bottom: 80px;" class="about-us" id="about">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h1 style="color: orangered; margin-bottom: -50px;" class="fw-bold">About Us</h1>
                    </div>
                </div>
                <div class=" mb-5" style="margin-left: auto; margin-right: auto;">
                    <div class="text-center">
                        <p>Welcome to Dern Support, your dedicated partner in navigating the ever-evolving landscape of technology. At Dern Support, we understand the challenges individuals and businesses face in harnessing the full potential of modern technology. With our expertise and commitment to excellence, we offer tailored solutions to simplify your tech experience. From troubleshooting software issues to optimizing digital setups, our team is here to provide reliable assistance every step of the way.
                            Trust Dern Support to be your reliable ally in achieving your tech goals With a focus on customer satisfaction, transparency, and integrity, we strive to build lasting relationships based on trust and reliability.</p><br>
                        <p>Our seasoned experts are passionate about technology and stay ahead of the curve to anticipate and meet your evolving needs. At Dern Support, we're more than just a service provider – we're your dedicated partner in embracing and maximizing the potential of modern technology. Explore our range of services and let us help you navigate the complexities of the digital world with confidence and ease.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright ©2024 Dern support. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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