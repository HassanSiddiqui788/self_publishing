AOS.init({
  once: true
})
$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "index.php"
  }
  $("header .nav-item .nav-link").removeClass("active");
  $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
});
$(window).scroll(function (e) {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
});

// <!-- Apps development services Start -->

$(document).ready(function () {
  var $slider = $('.slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $('.slider__label');

  $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc);

    $progressBarLabel.text(calc + '% completed');
  });

  $slider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    rows: 2,
    speed: 800
  });
});
// <!-- Apps development services End -->



// multiple steps
$(document).ready(function () {
  $(".step .next").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.next().addClass("active_step");
  });
  $(".step .back").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.prev().addClass("active_step");
  });
});




// testimonial slider start
// testimonial slider end

// banner left  slider start **************************************************
$('.ban-left-slider').slick({
  dots: false,
  infinite: true,
  arrows: false,
  speed: 2000,
  slidesToShow: 3,
  
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// banner left  slider end **************************************************
// banner right  slider start **************************************************
$('.project-slider').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 1000,
  speed: 2000,
  centerMode: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1150,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        centerMode: true,
        dots: true,
      }
    }, {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        centerMode: true,

      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// banner left  slider end **************************************************

$('.book-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows: false,
  // centerMode: false,
  autoplaySpeed: 1000,
  speed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


// services slider start **************************************************
$('.serv-slider').slick({
  dots: false,
  infinite: true,
  arrows: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// services slider end **************************************************
// testimonial slider start **************************************************
$('.testi-slider').slick({
  dots: false,
  infinite: true,
  arrows: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$('.owl-testimonial').owlCarousel({
  loop: true,
  nav: false,
  dots: false,
  nav:false,
  responsiveClass: true,
  autoplay: true,
  scrollY:true,
  autoplayTimeout: 3000,
  autoplaySpeed: 3000,
  margin: 5,
  responsive: {
    0: {
      items: 1,
      nav: false
    },
    600: {
      items: 3,
      nav: false
    },
    1000: {
      items: 3,
      nav: false,
      loop: true
    }

  }
});


$(".banner-clients1").slick({
  dots: 1,
  infinite: !0,
  speed: 200,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: 1,
  autoplaySpeed: 2e3,
  arrows: 1,
  prevArrow: $(".prev"),
  nextArrow: $(".next"),
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: !0,
      dots: 1,
      arrows: 1
    }
  }, {
    breakpoint: 600,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: 1,
      dots: 1,
      arrows: 1
    }
  }, {
    breakpoint: 480,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: 1,
      dots: 1,
      arrows: 1
    }
  }, ]
})
// testimonial slider end **************************************************


$('.abr-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  arrows: true,
  dots: true
});


function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


let spinnerWrapper = document.querySelector('.spinner-wrapper');

window.addEventListener('load', function(){
  setTimeout(function() {
    spinnerWrapper.style.display = 'none';
  }, 2000);
});