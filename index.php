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

        header .left-head:before {
            display: none;
        }

        .col-flex {
            display: flex;
            justify-content: end;
        }

        .copy-right {
            text-align: center;
            margin-top: 20px;
        }

        .classic-btn {
            background-color: #1c3352 !important;
            color: #FFF;
        }

        .classic-btn {
            border: none;
            font-size: 17px;
            font-weight: 700;
            width: 200px;
            padding: 15px 0;
            transition: .5s all ease-in-out;
            margin-top: 20px;
            border-radius: 10px;
        }

        .classic-btn:hover {
            background-color: #000 !important;
        }
    </style>
    <!-- <script>
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
    </script> -->
</head>

<body>


<div class="spinner-wrapper">
    <div class="spinner">
      
    </div>
  </div>

    <!-- Navbar Start -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-light position-relative">
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
                    <div class="col-12 col-lg-9 col-flex">
                        <div class="">

                            <ul class="left-head">
                                <li class="">
                                    <a class="phone" href="tel:<?php echo $phone; ?>"><img src="images/phone.png" alt=""></a>
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
    <!-- Navbar End -->
    <section class="banner-sec about bws">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center align-items-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-5">
                    <div class="ban-txt">
                        <form class="theme banner-form d-flex flex-column position-relative form-get-quote" action="javascript:;" method="POST">
                            <h4 class="text-white">Sign-Up With Us To Avail,
                                <img src="images/form-img.png" class="position-absolute" alt="">
                                <br><span>70% DISCOUNT</span> On All Services.
                            </h4>
                            <input type="text" required="" name="quote[name]" placeholder="Name">
                            <input type="email" required="" name="quote[email]" placeholder="Email">
                            <input type="text" required="" placeholder="Contact Number" name="quote[phone]" minlength="11">
                            <select name="quote[service]" required="" id="">
                                <option value="" selected="" disabled="">Select Your Services</option>
                                <option value="E-book Writing">E-book Writing</option>
                                <option value="Book Editing">Book Editing</option>
                                <option value="Book Formatting">Book Formatting</option>
                                <option value="Proofreading">Proofreading</option>
                                <option value="Book Cover Design">Book Cover Design</option>
                                <option value="Book Marketing">Book Marketing</option>
                                <option value="Book Publishing">Book Publishing</option>
                                <option value="Author Website">Author Website</option>
                                <option value="Audio Books">Audio Books</option>
                                <option value="Book Video Trailer">Book Video Trailer</option>
                            </select>
                            <!-- <select name="quote[budget]" required id="">
                <option value="" selected disabled>Select Your Budget</option>
                <option value="$500 to $1000">$500 to $1000</option>
                <option value="$1500 to $2000">$1500 to $2000</option>
            </select> -->
                            <textarea name="quote[message]" id="" cols="30" rows="4" placeholder="Your Message"></textarea>
                            <button class="btn btn-form">Get A Quote</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-7  d-flex flex-column justify-content-end">
                    <div class="ban-left">
                        <div class="ban-content">
                            <h1>Turn Your Dream Of Becoming A Published Writer With Our Book Writing Services!</h1>
                            <p>Dream to become a published book writer? Then what are you waiting for? Avail our
                                professional book writing services and manifest your dreams into reality. Talk to our book
                                writing consultant today, and get it all started.</p>
                        </div>
                        <div class="d-flex gap-3 wcs-btns-2">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="classic-btn">Let's Get Started</button>
                            <button onclick="setButtonURL();" class="classic-btn">Chat With Us</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logos-slider pt-4 pb-4 d-none d-lg-block d-md-block d-sm-none">
        <div class="container">

            <div class="justify-content-center text-center">
                <div class="banner-clients1 pt-2 pb-2 ">
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/many-rains-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/fd-publish.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/avonbooks-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/booknbook-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/austin-macauley-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/hachette-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/macmillan-slider1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/harpercollins-logo1.avif" alt="Bookmarks_publication">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <section class="backgery pt-5 pb-5" id="getaquote">
    <div class="container" id="formsection">
        <div class="section-headers">

            <h1 class="fw-900 font-50 font-50rem text-center text-blue">
                Request A Free Quote
            </h1>
        </div>
        <div class="justify-content-center text-center">
            <form class="cr-form row justify-content-center form-get-quote" action="javascript:;" method="POST">
                <div class="col-12 col-sm-4">
                    <input type="text" id="name" name="quote[name]" placeholder="Name" class="form-control col-md-12 mb-3" required="" >
                </div>
                <div class="col-12 col-sm-4">
                    <input type="email" id="email" name="quote[email]" placeholder="Email" class="form-control col-md-12 mb-3" required="">
                </div>
                <div class="col-12 col-sm-4">
                    <input type="phone" id="phone" name="quote[phone]" placeholder="Phone" minlength="11" maxlength="15" class="form-control col-md-12 mb-3" required="" onkeypress="return /[0-9]/i.test(event.key)">
                </div>

                <div class="col-lg-4 col-md-4 pt-2">
                    <button id="homesave" name="homesave" type="submit" class="btn form-btn3 btn-secondary2 btn-block fw-900 font-30 mb-2">Get a Quote</button>
                </div>
            </form>
        </div>
    </div>
</section> -->
    <section class="our-project about ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12">

                    <div class="op-head section-headers">
                        <h1 class="">Our Book Writing Projects</h1>
                        <p>Let Our Book Writing Team Help You.</p>
                    </div>
                    <div class="book-slider">
                        <div width="443" height="584" class=" d-flex justify-content-center"><img class="img-fluid" src="images/book-slide1.avif" alt=""></div>
                        <div width="443" height="584" class=" d-flex justify-content-center "><img class="img-fluid" src="images/book-slide2.avif" alt=""></div>
                        <div width="443" height="584" class=" d-flex justify-content-center "><img class="img-fluid" src="images/book-slide3.avif" alt=""></div>
                        <div width="443" height="584" class=" d-flex justify-content-center "><img class="img-fluid" src="images/book-slide4.avif" alt=""></div>
                        <div width="443" height="584" class="d-flex justify-content-center   "><img class="img-fluid" src="images/book-slide5.avif" alt=""></div>
                        <div width="443" height="584" class=" d-flex justify-content-center "><img class="img-fluid" src="images/book-slide1.avif" alt=""></div>
                        <div width="443" height="584" class="d-flex justify-content-center   "><img class="img-fluid" src="images/book-slide2.avif" alt=""></div>
                        <div width="443" height="584" class=" d-flex justify-content-center "><img class="img-fluid" src="images/book-slide3.avif" alt=""></div>
                        <div width="443" height="584" class=" d-flex justify-content-center "><img class="img-fluid" src="images/book-slide4.avif" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our pakages start -->

    <section class="eight-wrap">
        <div class="container">

            <div class="col-md-12">
                <div class="pricing-header-top section-headers">
                    <h1> Avail <span>75% OFF</span> On All Packages </h1>

                </div>
            </div>
            <div class="pricing-body-main">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="package-inner">
                            <div class="package-header">
                                <div class="package-price">
                                    <h6>SILVER</h6>
                                </div>
                            </div>

                            <ul class="package-body">
                                <div class="include-plans">
                                    <p>EDITING, FORMATTING, SPELL CHECK &amp; TYPESETTING ACCORDING TO INTERNATIONAL BOOK
                                        PUBLISHING STANDARDS </p>
                                </div>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Publishing on Amazon </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> eBook, paperback and hardcover </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Proofreading</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Adjusting the typesetting and layout
                                    according to publishing standards</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Formatting</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Authors and books profile</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Finalized digital files </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Book cover design </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Amazon optimization </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Dedicated Project Manager </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights </li>

                            </ul>
                            <div class="package-btns">
                                <a class="start-now-btn popbtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now
                                </a>
                            </div>
                            <div class="package-footer">
                                <a href="tel:<?php echo $phone; ?>">CALL US <?php echo $phone; ?> </a>
                                <a href="javascript:;" onclick="setButtonURL();">Live Chat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="package-inner best-seller-main-wrap">
                            <div class="best-seller-img">
                                <img src="images/best-seller-img.png" alt="best-seller-img">
                            </div>
                            <div class="package-header">
                                <div class="package-price">
                                    <h6>GOLD </h6>
                                </div>

                            </div>

                            <ul class="package-body">
                                <div class="include-plans">
                                    <p>EDITING, FORMATTING, SPELL CHECK &amp; TYPESETTING ACCORDING TO INTERNATIONAL BOOK
                                        PUBLISHING STANDARDS. </p>
                                </div>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Publishing on the top 5 platforms </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> eBook, paperback and hardcover </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Proofreading</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Adjusting the typesetting and layout
                                    according to publishing standards </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Formatting</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Authors and books profile </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Finalized digital files </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Book cover design</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Platform optimization </li>


                                <li><i class="fa fa-check" aria-hidden="true"></i> Dedicated Project Manager </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guaranteed </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>No Hidden Charges </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>



                            </ul>

                            <div class="package-btns">
                                <a class="start-now-btn popbtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now </a>
                            </div>
                            <div class="package-footer">
                                <a href="tel:<?php echo $phone; ?>">CALL US <?php echo $phone; ?> </a>
                                <a href="javascript:;" onclick="setButtonURL();">Live Chat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 ">
                        <div class="package-inner">
                            <div class="package-header">
                                <div class="package-price">
                                    <h6>PLATINUM </h6>
                                </div>
                            </div>

                            <ul class="package-body">
                                <div class="include-plans">
                                    <p>EDITING, FORMATTING, SPELL CHECK &amp; TYPESETTING ACCORDING TO INTERNATIONAL BOOK
                                        PUBLISHING STANDARDS </p>
                                </div>
                                <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $name; ?> on 20+ platforms</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> eBook, paperback and hardcover </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Proofreading</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Adjusting the typesetting and layout
                                    according to publishing standards </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Formatting</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Authors and books profile </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Finalized digital files </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Book cover design </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Platform optimization </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> 100% Ownership Rights </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Dedicated Project Manager </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guaranteed </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> No Hidden Charges </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Money-Back Guarantee </li>
                            </ul>
                            <div class="package-btns">
                                <a class="start-now-btn popbtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now
                                </a>
                            </div>
                            <div class="package-footer">
                                <a href="tel:<?php echo $phone; ?>">CALL US <?php echo $phone; ?> </a>
                                <a href="javascript:;" onclick="setButtonURL();">Live Chat</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="question-banner cover pb-5 pt-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 section-headers">
                    <h1 class="font-secondary text-center text-blue font-50 font-50rem fw-900 pb-2 pt-3">Why Book Publishing?
                    </h1>
                    <p class="text-black pb-5">
                        Oftentimes, we find ourselves indulging in thoughts that others might fascinating. Most of them remain limited to the abyss inside our heads. However, some ideas/stories and visions are meant for the world to read and study. The ideas develop once you write, but the important aspect is to let the world to see your work and change mindsets!
                    </p>
                </div>
            </div>
            <div class="row justfy-content-center pt-5 pl-3 pr-3">
                <div class="col-md-6 d-flex align-items-stretch mb-4">
                    <div class="d-flex">
                        <div class="cardimg">
                            <img loading="lazy" width="50" height="20" class="img-fluid" alt="Bookmarks_publication" src="images/quote02.avif">
                        </div>
                        <div class="cardcontent pl-3  text-white">
                            <h5 class="card-title fw-800 text-black">
                                How can I publish my book?</h5>
                            <p class="card-text pb-4 text-black">The first thing you need to do after making up your mind about publishing a book is to find a publishing house. There are several types of publications including online publication, paperback or hardcopy publishing as well as self Publication. You need to select the kind of publication you want and then work with the publisher company to assist you with the process.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mb-4">
                    <div class="d-flex">
                        <div class="cardimg">
                            <img loading="lazy" width="50" height="20" class="img-fluid" alt="Bookmarks_publication" src="images/quote02.avif">
                        </div>
                        <div class="cardcontent pl-3  text-black">
                            <h5 class="card-title fw-800 text-black">
                                What’s different about Self Publishing?
                            </h5>
                            <p class="card-text pb-4 text-black">By self publishing a book, you get full authority of your work including the management and other processes of publishing like editing, cover design and even marketing strategies. You have to pay a certain amount as fee and you get to call the shots! At Bookmarks Publication, different teams designated for different kinds of publications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justfy-content-center pt-5 pl-3 pr-3">
                <div class="col-md-6 d-flex align-items-stretch mb-4">
                    <div class="d-flex">
                        <div class="cardimg">
                            <img loading="lazy" width="50" height="20" class="img-fluid" alt="Bookmarks_publication" src="images/quote02.avif">
                        </div>
                        <div class="cardcontent pl-3 text-black">
                            <h5 class="card-title fw-800 text-black">How much does it cost to have a book published?</h5>
                            <p class="card-text pb-4 text-black">If you’re worried about the initial investment you have to put in order to get your book published, don’t fret too much! There are various packages available from which you can select the one that works for you. We work with every kind of budget to give your clients the best experience and help them publish their work for the world to read!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mb-4">
                    <div class="d-flex">
                        <div class="cardimg">
                            <img loading="lazy" width="50" height="20" class="img-fluid" alt="Bookmarks_publication" src="images/quote02.avif">
                        </div>
                        <div class="cardcontent pl-3  text-black">
                            <h5 class="card-title fw-800 ">Can I publish on different publishing platforms?
                            </h5>
                            <p class="card-text pb-4">Yes, you can. The Bookmarks Publication team will assist you in choosing the platform i.e.,Bookmarks Publication that you want to publish on. They will also assist you in making sure your manuscript is in the correct format as per the prescribed guidelines of the platform you have chosen for publication and point you in the right direction!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="faq wms bps ">
            <div class="container">
                <div class="py-head section-headers">
                    <h1 class="text-uppercase">Why Choose Our Self Publishing Services?</h1>
                </div>
                <div class="row align-items-center ">
                    <div class="col-lg-6">
                        <div class="wms-left">
                            <h2>How Do "I Publish My Book?"</h2>
                            <br>
                            <p>Our experience enables us to craft captivating stories. Short or long – your manuscript gets
                                the attention it deserves! Every word we polish is prepared for the impact on the readers
                                and infused with care. From beginning to end, our book publishers and book editing experts
                                take on every project, because no task is too big or difficult when you have people like us
                                working together as part of such a one-stop solution.
                                <br><br>
                                We ensure everything from page-turners to nail-biting finishes feels masterfully controlled
                                so each reader can find a perfect read. Our book editing team eagerly waits for their next
                                project to be proofread and edited.
                            </p>
                            <br><br>
                            <div class="d-flex gap-3 wcs-btns-2">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="classic-btn">Let's Get Started</button>
                                <button onclick="setButtonURL();" class="classic-btn">Chat With Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img height="650" width="650" class="img-fluid" src="images/bms-sec1.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="faq wms bps ">
            <div class="container">
                <div class="row align-items-center justfy-content-center">
                    <div class="col-lg-7">
                        <div class="wms-left">
                            <h2>Book Writing Can Be A Nightmare If You Are Not As Fluent With Your Words As You Are With
                                Your Thoughts"</h2>
                            <br>
                            <p>When you think about writing a book, know that it doesn't have to be complicated. As absurd
                                as it may sound, thoughts or ideas may already exist within your head as seed or germinating
                                premises of stories that still need development before they can blossom into anything
                                concrete and comprehensive for readers around the world. Luckily, you have our professional
                                book writers who can help turn those thoughts from just an idea into something worth sharing
                                with friends, family members & strangers alike. Let us help you get rid of writer's block
                                and take that burden off your shoulders.
                            </p>
                            <br>
                            <div class="d-flex gap-3 wcs-btns-2">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="classic-btn">Let's Get Started</button>
                                <button onclick="setButtonURL();" class="classic-btn">Chat With Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img height="650" width="650" class="img-fluid" src="images/pws-bwc1.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logos-slider pt-4 pb-4 d-none d-lg-block d-md-block d-sm-none">
        <div class="container">

            <div class="justify-content-center text-center">
                <div class="banner-clients1 pt-2 pb-2 ">
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/many-rains-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/fd-publish.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/avonbooks-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/booknbook-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/austin-macauley-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/hachette-logo1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/macmillan-slider1.avif" alt="Bookmarks_publication">
                    </div>
                    <div>
                        <img loading="lazy" width="154" height="46" class="img-fluid" src="images/harpercollins-logo1.avif" alt="Bookmarks_publication">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="services bes bws">
        <div class="container">
            <div class="row justify-content-center text-center pt-4 pb-4">
                <div class="col-md-12 section-headers">
                    <h1 class="font-50 font-50rem txt-grey fw-900 text-center text-blue">Fine-toothed book writing to give
                        your readers a truly immersive experience with the help of our team of professional eBook writers!
                    </h1>
                    <p class="font-16 fw-600 text-center mp"><?php echo $name; ?> is a portal to bring your thoughts, ideas, or
                        dreams to paper for your readers.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Customized Book Writing Packages</h5>
                            <p class="card-text">We offer our clients a customized book writing process that starts with
                                clear communication before initiating the project <span id="dots">...</span>
                                <span id="more">
                                    Our professional book writing experts
                                    inquire and probe to clarify the requirements, so there is no hurdle. Every stage of the
                                    process is customizable according to your preferences. We promise you we have the best ebook
                                    writers for hire!
                                </span>
                            </p>
                            <button id="myBtn" class="btn" onclick="myFunction()">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All-in-One Book Writing Approach</h5>
                            <p class="card-text">We provide a range of services to authors who need book writing services.
                                These include the initial idea draft up to the final proofreading. Before publishing it, we
                                ensure that each work holds its essence according to the idea and does not deviate.</p>
                            <a href="#" class="btn">LET'S DISCUSS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Specialist Services</h5>
                            <p class="card-text">We collaborate with the industry’s best bookwriting experts and eBook
                                Writers to give you a piece a that stands out among all the rest. Our value-added services
                                allow us to design your cover and market your publication to reach maximum readers. We won’t
                                abandon you, and as professional book writing services we ensure that our teams of book
                                writer help you reach that bestseller status!</p>
                            <a href="#" class="btn ">LET'S DISCUSS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wiob bes pt-0 pb-2 pt-4 d-none d-lg-block d-md-block d-sm-none">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-10 section-headers">
                    <h1 class="font-50 text-blue font-50rem fw-900">What Is Our Book Writing Process?</h1>
                    <p>Our professional book writing services is a collaborative process between our client and our team
                        that has the following steps:</p>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-xl-12 col-sm-12">
                    <img loading="lazy" src="images/bws-book.avif" class="img-fluid big-book" alt="Bookmarks_publication">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="faq wms bps wb">
            <div class="container">
                <div class="row align-items-center justfy-content-center">
                    <div class="col-lg-7">
                        <div class="wms-left">
                            <h2>Allow us to dominate all the bookshelves and digital libraries, entrust our professional
                                book writers with your book today!</h2>
                            <br>
                            <p>Pick up the phone or email us, and book our book consultancy services today! The only thing
                                standing in your way of being a best-selling author is not signing up for our professional
                                book writing services! Allow us to assist you in getting there and getting the best and the
                                most affordable book writers for hire today!
                            </p>
                            <br>
                            <div class="d-flex gap-3 wcs-btns-2">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="classic-btn">Let's Get Started</button>
                                <button onclick="setButtonURL();" class="classic-btn">Chat With Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-10 col-12">
                        <div class="ban-txt">
                            <form class="banner-form d-flex flex-column position-relative form-get-quote" action="javascript:;" method="POST">
                                <h4 class="text-white">Get A Free Quote
                                    <img src="images/form-img.png" class="position-absolute" alt="">
                                </h4>
                                <input type="text" required="" name="quote[name]" placeholder="Full Name *">
                                <input type="text" required="" name="quote[email]" placeholder="Email Address *">
                                <input type="text" required="" name="quote[phone]" placeholder="Phone *" minlength="11">
                                <textarea rows="3" required="" name="quote[message]" placeholder="message *"></textarea>

                                <button class="btn btn-form">Lets Start</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 py-3">
                    <div class="foot-logo">
                        <a class="footer-logo" href="https://bookmarkspublication.com/">
                            <img class="img-fluid" src="images/footer_logo.png" alt="">
                            <!-- <h1>LOGO HERE</h1> -->

                        </a>
                        <p class="mt-4">Turn your story into a masterpiece with <?php echo $name; ?>! Our team of expert
                            writers will help transform your book idea into an unforgettable reading experience. Let's begin
                            your journey to literary success together.
                        </p>
                        <br>
                        <br>


                        <br>

                    </div>
                </div>
                <div class="col-xl-1 "></div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 py-3">
                    <div class="foot-cont">
                        <h2>CONTACT US</h2>
                        <ul>
                            <li><i class="fa-solid fa-phone-volume"></i><a href="tel:+ <?php echo $phone; ?>">
                                    <?php echo $phone; ?> </a></li>
                            <li><i class="fa-regular fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                            <li><i class="fa-solid fa-location-dot"></i><a href="#!"><?php echo $address; ?></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 py-3">
                    <div class="foot-cont">
                        <h2>SOCIAL LINKS</h2>
                        <div class="d-flex foot-social-links">
                            <a href="javscript:;">
                                <li><i class="fa-brands fa-facebook-f"></i></li>
                            </a>
                            <a href="javscript:;">
                                <li><i class="fa-brands fa-youtube"></i></li>
                            </a>
                            <a href="javscript:;">
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </a>
                            <a href="javscript:;">
                                <li><i class="fa-brands fa-linkedin-in"></i></li>
                            </a>
                        </div>
                        <ul class="mt-2 mt-lg-2 mt-xl-5">

                            <div class="payment-txt">
                                <h4>PAYMENT METHODS</h4>
                                <img src="images/payment-methods.png" alt="methods">
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">

            <h6>Copy right © 2023-2024 BooksMarksPublication. All Rights Reserved.</h6>
        </div>
    </footer>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ban-txt">
                <form class="banner-form d-flex flex-column position-relative form-get-quote" action="javascript:;" method="POST">
                    <h4 class="text-white">Get A Free Quote
                        <img src="images/form-img.png" class="position-absolute" alt="">
                    </h4>
                    <input type="text" required="" name="quote[name]" placeholder="Full Name *">
                    <input type="email" required="" name="quote[email]" placeholder="Email Address *">
                    <input type="text" required="" name="quote[phone]" placeholder="Phone *" minlength="11">
                    <textarea rows="3" required="" name="quote[message]" placeholder="message *"></textarea>

                    <button class="btn btn-form">Lets Start</button>
                </form>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script src="js/custom.js"></script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    <!--<script>-->
    <!--    window.__lc = window.__lc || {};-->
    <!--    window.__lc.license = 17184951;-->
    <!--    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))-->
    <!--</script>-->
    <!--<noscript><a href="https://www.livechat.com/chat-with/17184951/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>-->
    <!-- End of LiveChat code -->
    <!-- Start of ghostwritingterminal Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=3919115b-c1e7-4ca6-9495-59fc69c15674"> </script>
    <!-- End of ghostwritingterminal Zendesk Widget script -->

    <script>
        zE(function() {
            $zopim.livechat.setOnUnreadMsgs(function(numUnread) {
                console.log(0);
                if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                    $zopim.livechat.window.show();
                }
            })
        });

        function setButtonURL() {
            javascript: $zopim.livechat.window.show();
        }
    </script>
    <script>
        $('.form-get-quote').on('submit', function(e) {
            //$('.btn-quote').on('click' , function(e){        
            var obj = $(this);
            e.preventDefault();
            var data = $(obj).serialize();
            jQuery.ajax({
                url: window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1) +
                    "sendmail.php",
                type: "POST",
                data: data,
                async: false, // Has to be false to be able to return response
                dataType: "json", // Has to be false to be able to return response
                success: function(response) {
                    if (response.status == 1) {
                        window.location = "/thankyou.php";
                        obj.trigger("reset");
                    } else {
                        return false;
                    }
                },
                beforeSend: function() {}
            });
            return false;
        });
    </script>
</body>

</html>