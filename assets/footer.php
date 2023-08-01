<!-- footer start -->

<section class="nwsltr">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 m-auto">
                <div class="row r-inr-nws">
                    <div class="col-lg-6 nw-1">
                        <div class="nwstxt">
                            <h3>Subscribe To Us</h3>
                            <p>Let’s stay in touch!</p>
                        </div>
                    </div>
                    <div class="col-lg-6 nw-2">
                        <div class="nwsbtn">
                            <form action="#">
                                <input type="email" class="emlnws form-control" placeholder="Enter your Email"
                                    id="email">
                                <button type="submit" class="btnnws">Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer>
    <section class="footer pt-5 pb-5">
        <div class="container">
            <div class="row r-foot">
                <div class="col-lg-4">
                    <div class="footdesc">
                        <a href="index"><img src="images/logo.svg" alt="footlogo.png" class="img-fluid"></a>
                        <p>
                            Meliora Kidney Institute & Research Centre’s commitment to delivering unparalleled
                            excellence is backed by cutting-edge technology and super specialist doctors.
                        </p>
                        <div class="soc-icns">
                            <a href="https://www.facebook.com/priydarshiranjan" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/drp.ranjan/?igshid=YmMyMTA2M2Y%3D" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.youtube.com/@kidneytransplantindia4648" target="_blank">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="linksfoot">
                                <h3>
                                    Useful Links
                                </h3>
                                <a href="index">
                                    Home
                                </a>
                                <a href="about">
                                    About Us
                                </a>
                                <a href="services">
                                    Services
                                </a>
                                <a href="testimonial">
                                    Testimonials
                                </a>
                                <a href="blog">
                                    Blog
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 linksfoot">
                            <h3>
                                Services
                            </h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="linksfoot">
                                        <a href="hemodialysis">
                                            Hemodialysis
                                        </a>
                                        <a href="Peritoneal-Dialysis">
                                            Peritoneal Dialysis
                                        </a>
                                        <a href="Kidney-Biopsy">
                                            Kidney Biopsy
                                        </a>
                                        <a href="kidney-cancer">
                                            Kidney Cancer
                                        </a>
                                        <a href="Critical-Care-Nephrology">
                                            Critical Care Nephrology
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="linksfoot">
                                        <a href="Preventive-Kidney-Check-up">
                                            Preventive Kidney Check Up
                                        </a>
                                        <a href="Kidney-Transplant">
                                            Kidney Transplant
                                        </a>
                                        <a href="premtive-transplant">
                                            Preemptive Transplant
                                        </a>
                                        <a href="kidney-stone">
                                            Kidney Stone
                                        </a>
                                        <a href="robotic">
                                            Robot-Assisted Kidney Transplantation
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="gtntch">
                                <h3>Get In Touch</h3>
                                <a href="mailto:enquiry@meliora.org.in">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                    <p>enquiry@meliora.org.in</p>
                                </a>
                                <a href="tel:+917999634444">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+917999634444</p>
                                </a>
                                <a href="tel:+917999632222">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+917999632222</p>
                                </a>
                                <a href="https://goo.gl/maps/ES5ZA7F2hpkv7eud6">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>bahra hospital, opp. rayat bahra university, chandigarh ropar highway(nh-205),
                                        (greater mohali)</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<section class="copy-right">
    <div class="container">
        <div class="botm-foot">
            <div class="row">
                <div class="col-md-8">
                    <p class="prgf-txt">Copyright © 2023 Trycyfer Software Development Company | All Rights Reserved</p>
                </div>
                <div class="col-md-4">
                    <span class="prgf-txt"><a href="faq">FAQ</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a
                            href="contact">Contact</a></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer end -->

<script>
$(document).ready(function() {
    $(".navbar-nav > li").click(function(e) {
        $(".navbar-nav > li").removeClass("active");
        $(this).addClass("active");
    });
});
</script>

<script>
// counter

function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;

    return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));

}

$(window).scroll(function() {

    if (visible($('.count-digit'))) {
        if ($('.count-digit').hasClass('counter-loaded')) return;
        $('.count-digit').addClass('counter-loaded');

        $('.count-digit').each(function() {
            var $this = $(this);
            jQuery({
                Counter: 0
            }).animate({
                Counter: $this.text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
})

// faq

$(function() {
    let $qus = $(".qus");
    let $ans = $(".ans");

    $qus.click(function() {
        $(this).next().slideToggle("slow");
        $(this).toggleClass("active");

        $(this).parent().siblings().find(".qus").removeClass("active");
        $(this).parent().siblings().find(".ans").slideUp("slow");
    });

    $(".menu p").click(function() {
        $(this)
            .parent()
            .siblings(".item-container")
            .children(".hide")
            .addClass("hide-mark");
        $(this)
            .parent()
            .siblings(".item-container")
            .children(".hide-mark")
            .fadeToggle("slow");

        if ($(this).html() == "+ More") {
            $(this).html("- Hide");
        } else {
            $(this).html("+ More");
        }
    });
});
</script>

<!-- slider js -->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>

<script>
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: true,
        transitionStyle: "backSlide",
        autoPlay: true
    });
});

// testimonial page js

$(document).ready(function() {
    $("#testimonial-slider1").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        pagination: true,
        autoPlay: false
    });
});

// testimonial 3

$(document).ready(function() {
    $("#testimonial-slider2").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        pagination: true,
        autoPlay: false
    });
});

//    form validation

var mxlen = 10;

var inp = $("input[name='phone'] ");

var count = 0;
inp.bind('keyup', function() {
    count++;
    this.value = this.value.replace(/[^0-9]/, '');

    if (mxlen < inp.val().length) {
        // $( "#sp_name" ).append( document.createTextNode( "Hello" ) );
        $("#sp_name").html(document.createTextNode("Maximun allowed characters reached"));
        // this.value = this.value.replace(/[a-zA-Z0-9\.\,\-\_]/,'');
        inp.val('');
        inp.blur();
        inp.focus();
        // alert('max reached');
    }
    // console.log(inp.val().length);

});

// team slider

$(document).ready(function() {
    $("#testimonial-slider3").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: false,
        autoPlay: true
    });
});

// gallery slider

$(document).ready(function() {
    $("#testimonial-slider4").owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoPlay: true
    });
});
</script>


<!-- slider js -->

<!-- aos js -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
AOS.init();
</script>

<!-- aos js end-->

<script>
$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".navbar").addClass("fixed-top");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".navbar").removeClass("fixed-top");
        }
    });
});
</script>

<script>
input[type=date],
 input[type=time] {
     border            : none;
     box-sizing        : border-box;
     outline           : 0;
     padding-left      : .75rem;
     display           : flex;
     justify-content   : center;
     position          : relative;
     width             : 100%;
     -moz-appearance   : textfield;
     -webkit-appearance: none;
     margin            : 0;
 }

 input[type=date]::placeholder,
 input[type=time]::placeholder {
     font-family: 'Roboto';
     font-size  : 17px;
     font-style : normal;
     font-weight: 400;
 }

 input[type=date]::-webkit-calendar-picker-indicator,
 input[type=time]::-webkit-calendar-picker-indicator {
     background: none;
     bottom    : 0;
     color     : transparent;
     cursor    : pointer;
     height    : auto;
     left      : 0;
     position  : absolute;
     right     : 0;
     top       : 0;
     width     : auto;
 }


 input[type=date]::-webkit-datetime-edit,
 input[type=time]::-webkit-datetime-edit {
     text-align: center;
     width     : 100%;
 }
</script> 

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
</body>

</html>