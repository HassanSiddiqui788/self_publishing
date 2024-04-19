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
                    <ul>
                        <li><i class="fa-solid fa-phone-volume"></i><a href="tel:+ <?php echo $phone; ?>">
                        <?php echo $phone; ?>                   </a></li>
                        <li><i class="fa-regular fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </li>
                        <li><i class="fa-solid fa-location-dot"></i><a href="#!"><?php echo $address; ?></a></li>
                    </ul>

                    <br>
                    <div class="d-flex foot-social-links">
                        <a href="javscript:;" >
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                        </a>
                        <a href="javscript:;" >
                            <li><i class="fa-brands fa-youtube"></i></li>
                        </a>
                        <a href="javscript:;" >
                            <li><i class="fa-brands fa-instagram"></i></li>
                        </a>
                        <a href="javscript:;" >
                            <li><i class="fa-brands fa-linkedin-in"></i></li>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 "></div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 py-3">
                <div class="foot-cont">
                    <h2>QUICK LINKS</h2>
                    <ul class="mt-2 mt-lg-2 mt-xl-5">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <br>
                        <br>
                        <div class="payment-txt">
                            <h4>PAYMENT METHODS</h4>
                            <img src="images/payment-methods.png" alt="methods">
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 py-3">
                <div class="foot-cont">
                    <h2>SERVICES</h2>
                    <ul class="mt-2 mt-lg-2 mt-xl-5">
                        <li>
                            <a class=" dropdown-item" href="book-publishing-services.php">
                                Book
                                Publishing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="book-promotion-services.php">Book
                                Promotion
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="book-writing-services.php">Book
                                Writing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="book-editing-services.php">Book
                                Editing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="book-marketing-services.php">Book
                                Marketing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="profreading-services.php">Proofreading
                                Services</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="ghost-writing-services.php">Ghostwriting</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="article-writing-services.php">Article
                                Writing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="blog-writing-services.php">Blog
                                Writing
                            </a>
                        </li>

                    </ul>
                    <!-- <ul>
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
                                Plan Writing</a>
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
                            <a href="children-book-illustration-services.php">Children's
                                Book
                                Illustrations
                            </a>
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
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="copy-right">
        <div class="social-links">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <h6>Copy right © 2023-2023 MDB. All Rights Reserved.</h6>
    </div> -->
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
    function setButtonURL(){
     javascript:$zopim.livechat.window.show();
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
            beforeSend: function() {
            }
        });
        return false;
    });
</script>
</body>

</html>