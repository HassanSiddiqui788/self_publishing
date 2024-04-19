<!DOCTYPE html>
<html>

<head>
    <?php include "includes/number.php" ?>
    <title>
        <?php echo $name; ?> | Professional Book Writing Services </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="desired" tag="">
    <meta name="description" content="Discover the world of <?php echo $name; ?>. Explore our creative & professional ghostwriting & publishing services, for your literary success!">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <style>
        h2.logotext {
            color: #000;
            font-size: 20px;
            line-height: 25px;
            font-weight: 600;
        }
    </style>
    <script>
        (function(w, d, t, r, u) {
            var f, n, i;
            w[u] = w[u] || [], f = function() {
                var o = {
                    ti: "26354421",
                    enableAutoSpaTracking: true
                };
                o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
                var s = this.readyState;
                s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
            }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
        })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    </script>
</head>

<body>

   

    <!-- Navbar Start -->
    <header>
        <div class="top-head">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="top-menu d-flex align-items-center justify-content-between">
                            <div class="social-links">
                                <ul>
                                    <a href="javascript:;">
                                        <li><i class="fab fa-facebook-f"></i></li>
                                    </a>
                                    <a href="javascript:;">
                                        <li><i class="fab fa-instagram"></i></li>
                                    </a>
                                    <a href="javascript:;">
                                        <li><i class="fab fa-twitter"></i></li>
                                    </a>
                                    <a href="javascript:;">
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                    </a>
                                </ul>
                            </div>
                            <div class="search-box">
                                <input type="text" placeholder="Search">
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <!-- <div class="col-12 col-lg-6 col-sm-12 col-md-4 "> -->
                            <div class="contact-headers">
                                <ul class="top-right d-flex align-items-center gap-3">
                                    <li class="d-flex gap-2">
                                        <a href="tel:<?php echo $phone; ?>" class="d-flex align-items-center gap-2"><i style="rotate: -29deg;" class="fa-solid fa-phone-volume"></i>
                                            <?php echo $phone; ?> </a>
                                    </li>
                                    <li class="">
                                        <a href="mailto:<?php echo $email; ?>" class="d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-envelope"></i><?php echo $email; ?>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class=" fa-solid fa-location-dot text-black"></i>
                                        <a href="javascript:;">
                                            <?php echo $address; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light position-relative">
            <!-- <div class="border-center"
                style="height: 100%;width: 1px; background: #21477f; position: absolute; right: 450px;}"></div> -->
            <div class="container d-block">
                <div class="row">
                    <div class="col-12 col-lg-2 col-xl-3 col-sm-12 col-md-12 d-flex justify-content-between align-items-center">
                        <a class="navbar-brand" href="https://bookmarkspublication.com/" style="font-size: 44px; font-weight: 600;">
                            <img class="img-fluid" src="images/main-logo.png" alt="">

                            <!-- LOGO HERE -->
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="main-header">
                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a class="nav-link " href="https://bookmarkspublication.com/">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">ABOUT US </a>
                                    </li>
                                    <li class="nav-item my-dropdown">
                                        <!-- <a class="nav-link" href="testimonial.php"></a> -->
                                        <div class="dropdown">
                                            <a style="" class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                SERVICES
                                            </a>
                                            <ul class="dropdown-menu my-drop-menu">
                                                <ul style="">
                                                    <li>
                                                        <a class="dropdown-item" href="amazon-services.php">
                                                            Amazon Services</a>
                                                    </li>
                                                    <li>
                                                        <a class=" dropdown-item" href="book-publishing-services.php">
                                                            Book Publishing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-writing-services.php">Book Writing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-marketing-services.php">Book Marketing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="profreading-services.php">Proofreading Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-editing-services.php">Book Editing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-promotion-services.php">Book Promotion</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="ghost-writing-services.php">Ghostwriting</a>
                                                    </li>

                                                </ul>
                                                <ul style="">
                                                    <li>
                                                        <a class="dropdown-item" href="article-writing-services.php">Article
                                                            Writing & Publishing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="blog-writing-services.php">Blog
                                                            Writing
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-cover-design-services.php">Book
                                                            Cover Design
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-trailer-services.php">Book
                                                            Trailer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="bussiness-plan-services.php">Business
                                                            Proposal Writing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="children-book-publication-services.php">Children
                                                            Book Publication
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="author-marketing-services.php">Author
                                                            Marketing</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="book-printing.php">
                                                            Book Printing</a>
                                                    </li>
                                                </ul>
                                                <ul class="last-li">

                                                    <li>
                                                        <a href="children-book-illustration-services.php">Children's Book Illustrations</a>
                                                    </li>
                                                    <li>
                                                        <a href="digital-marketing-services.php">Digital
                                                            Marketing
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="ebook-writing-services.php">Ebook
                                                            Writing</a>
                                                    </li>
                                                    <li>
                                                        <a href="book-formatting-services.php">Formatting
                                                            Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="audio-book-recording.php">Audio
                                                            Book Recording</a>
                                                    </li>
                                                    <li>
                                                        <a href="webcontent-writing-services.php">Web
                                                            Content Writing</a>
                                                    </li>
                                                    <li>
                                                        <a href="author-website-design-services.php">Author
                                                            Website Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="childrens-book-writing.php">Children Book Writing</a>
                                                    </li>
                                                    <!--<li>-->
                                                    <!--    <a href="wikipedia-services.php">wikipedia Service</a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="portfolio.php">PORTFOLIO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="left-head">
                                <li class="">
                                    <a class="phone" href="tel:<?php echo $phone; ?>"><img src="images/phone.png" alt=""></a>
                                    <!-- <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div> -->
                                </li>
                                <li class="">
                                    <a class="req-quote theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void()">Request A Quote</a>
                                </li>
                                <li class="">
                                    <a class="imp-noti theme-btn" href="javascript:void()">Important Notice</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </nav>
    </header>
    <!-- Navbar End -->