<?php include 'assets/header.php'; ?>

<!-- banner start -->
<section class="banner next-bnr6">
    <div class="container">
        <div class="row">
            <div class="bnr-txt">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<!-- banner end -->

<!-- contact form start -->

<section class="cntct-info-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="inr-pding">
                    <div class="contact-info">
                        <h3 class="h3-txt">OUR CONTACT INFO</h3>
                        <p class="prgf-txt">To schedule your consultation,<br> reach out to us on:</p>
                        <div class="cntc-scil-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div class="info-num">
                                <h5>Phone No</h5>
                                <a href="tel:+917999634444"><span>+917999634444</span></a>
                            </div>
                        </div>

                        <div class="cntc-scil-icon">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <div class="info-num">
                                <h5>Location</h5>
                                <a href="https://goo.gl/maps/ES5ZA7F2hpkv7eud6"><span>bahra hospital, opp. rayat bahra university,
                                     chandigarh ropar highway(nh-205), (greater mohali)</span></a>
                            </div>
                        </div>

                        <div class="cntc-scil-icon mail-dv">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="info-num">
                                <h5>Email Us</h5>
                                <a href="mailto:enquiry@meliora.org.in"><span>enquiry@meliora.org.in</span></a>
                            </div>
                        </div>
                        <div class="social-icn">
                        <a href="https://www.facebook.com/priydarshiranjan" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/in/dr-priyadarshi-ranjan-b59b7b29?originalSubdomain=in" target="_blank"> <i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/@kidneytransplantindia4648" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://www.instagram.com/drp.ranjan/?igshid=YmMyMTA2M2Y%3D" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <form action="database/contact.php" method="POST" class="bnr-frm banner">
                    <h3 class="h3-txt">Have a query? </h3>
                    <p class="prgf-txt">Please feel free to fill the form and our team will get back to you as soon as possible.</p>
                    <div class="inpt-txt">
                        <input type="text" placeholder="First Name" name="fname" class="form-control" required>
                        <input type="text" placeholder="Last Name" name="lname" class="form-control" required>
                    </div>
                    <div class="inpt-txt">
                        <input type="email" placeholder="Email Address" name="email" class="form-control" required>
                        <input type="number" placeholder="Phone Number" name="phone" class="form-control" id="sp_name" required>
                    </div>
                    <div class="inpt-txt">
                        <input type="text" placeholder="Subject" name="subjects" class="form-control" required>
                    </div>
                    <div class="inpt-txt">
                        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Your Message Here" required></textarea>
                    </div>
                    <a href=""><button type="submit" name="submit" class="bg-gradient">SEND MESSAGE</button></a>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- map start -->

<section class="map-sec">
    <div class="container-fluid">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13651.105481985986!2d75.7735915!3d31.1992134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a8b2d15555555%3A0x398873b857ab2b78!2sBahra%20Hospital!5e0!3m2!1sen!2sin!4v1681112397918!5m2!1sen!2sin" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>




<?php include 'assets/footer.php'; ?>