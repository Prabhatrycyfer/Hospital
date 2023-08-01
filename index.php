<?php include 'assets/header.php'; ?>


<!-- banner start -->

<section class="banner" id="home-bnr">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target ="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"><label>1</label></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"><label>2</label></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"><label>3</label></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4500">
                <img src="images/banner0.png" class="d-block w-100 ds-nn" alt="banner">
                <img src="images/bnr-mb-1.png" alt="" class="ds-blk">
                <div class="carousel-caption d-md-block">
                    <div class="bnr-txt">
                        <h5>Welcome to the Kidney Institute</h5>
                        <h1>Meet with the globally
                            recognised kidney specialists</h1>
                        <a href="about"><button type="submit" class="bg-gradient">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <img src="images/banner2.png" class="d-block w-100 ds-nn" alt="banner">
                <img src="images/bnr-mb-2.png" alt="" class="ds-blk">
                <div class="carousel-caption d-md-block">
                    <div class="bnr-txt">
                        <h5>Kidney center of Excellence</h5>
                        <h1>Centre for SMART Robotic Kidney Transplant</h1>
                        <!-- <p>You are in the best hands with our proficient and highly trained doctors. </p> -->
                        <a href="about"><button type="submit" class="bg-gradient">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <img src="images/banner3.png" class="d-block w-100 ds-nn" alt="banner">
                <img src="images/bnr-mb-3.png" alt="" class="ds-blk">
                <div class="carousel-caption d-md-block">
                    <div class="bnr-txt">
                        <h5>Good protocols and Purity</h5>
                        <h1>Compassion, Dedication and Expertise </h1>
                        <!-- <p>Helping our patients make a fresh start in life and stay healthy for a long time.</p> -->
                        <a href="about"><button type="submit" class="bg-gradient">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- mobile display form -->

    <form action="database/appointment.php" method="POST" class="d-none scnd-frm">
        <h2>Book your Appointment</h2>
        <div class="inpt-txt">
            <input type="text" placeholder="Your Name" name="fname" class="form-control" required>
            <input type="text" placeholder="Last Name" name="lname" class="form-control" required>
        </div>
        <div class="inpt-txt">
            <input type="number" placeholder="Enter Your Number" name="phone" class="form-control" id="sp_name" required>
            <input type="email" placeholder="Enter E-mail" name="email" class="form-control" required>
        </div>
        <div class="inpt-txt">
           <input type="date" placeholder="Appointment Date" name="date" class="form-control"  required>
            <input type="time" placeholder="Appointment Time" name="time" class="form-control" required>
        </div>
        <textarea name="message" id="" cols="30" rows="10" class="form-control"
            placeholder="Enter Your Message Here......." required></textarea>
        <a href=""><button type="submit" name="submit" class="">Book an Appointment</button></a>
    </form>
</section>


<!-- banner end -->




<!-- team start -->

<section class="team-sec">
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="cus-srvc">
                    <div class=" cus-img">
                        <img src="images/cus1.png" alt="">

                    </div>
                    <div class="cus-txt">
                        <h5>Qualified & Experienced Professionals</h5>
                        <p class="prgf-txt">India’s highest qualified and experienced kidney experts</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="cus-srvc">
                    <div class=" cus-img">
                        <img src="images/cus2.png" alt="">

                    </div>
                    <div class="cus-txt">
                        <h5>Successful 1000+ transplants</h5>
                        <p class="prgf-txt">Featured thrice in LIMCA book of records</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="cus-srvc">
                    <div class=" cus-img">
                        <img src="images/cus3.png" alt="">

                    </div>
                    <div class="cus-txt">
                        <h5>Leaders in ABO incompatible transplants</h5>
                        <p class="prgf-txt">Highest single surgeon experience of blood group incompatible Kidney
                            transplants</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="cus-srvc">
                    <div class=" cus-img">
                        <img src="images/cus4.png" alt="">

                    </div>
                    <div class="cus-txt">
                        <h5>Limca Book of Records</h5>
                        <p class="prgf-txt"><strong>iKIDNEY</strong> app for Paired Kidney exchange swap transplantation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- team end -->

<!-- about start -->

<section class="abot-sec mt-5 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-img">
                    <img src="images/abt1.png" alt="" class="abt-first">
                    <div class="scnd-img">
                        <img src="images/abt2.png" alt="" class="abt-img-new">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-txt wd ">
                    <h3 class="h3-txt">about us</h3>
                    <h5 class="h5-txt">Bringing To You</h5>
                    <h2><span>The Finest </span>in<br> Healthcare Services</h2>
                    <p class="prgf-txt abt-txt2">Led by Internationally acclaimed and renowned transplant surgeon, Dr.
                        Priyadarshi Ranjan,
                        Meliora Kidney Institute & Research Centre is known to deliver the best outcomes for patients
                        suffering
                        from all kinds of disorders associated with the kidney.</p>
                    <div class="kid-dv">
                        <div class="kid-1">
                            <div class="cus-srvc">
                                <div class=" cus-img">
                                    <img src="images/sr7.png" alt="">
                                </div>
                                <div class="cus-txt">
                                    <h5 class="blue-txt">Kidney Transplant</h5>
                                    <!-- <p class="prgf-txt">Lorem Ipsum is simply </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="kid-2">
                            <div class="cus-srvc">
                                <div class=" cus-img">
                                    <img src="images/sr1.png" alt="">
                                </div>
                                <div class="cus-txt">
                                    <h5 class="blue-txt">Hemodialysis</h5>
                                    <!-- <p class="prgf-txt">Lorem Ipsum is simply </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="exprt">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Unmatched infrastructure and state-of-the-art facilities</p>
                    </div>
                    <div class="exprt mb-4">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Cutting edge technologies</p>
                    </div>
                    <a href="about"><button type="submit" class="bg-gradient">Get More Info</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about end -->

<!-- service start -->

<section class="service-sec first-service">
    <div class="container">
        <div class="info-txt">
            <h3 class="h3-txt">services</h3>
            <h2><span>Nephrology</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr1.png" alt="sr1">
                    <h5 class="blue-txt">Hemodialysis</h5>
                    <p class="prgf-txt">A procedure where a dialysis machine and a special filter called an artificial
                        kidney,
                        or a dialyzer, are used to clean the blood of the patient.</p>
                    <a href="hemodialysis"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr2.png" alt="sr2">
                    <h5 class="blue-txt">Peritoneal Dialysis</h5>
                    <p class="prgf-txt">A treatment for kidney failure that uses the lining of your abdomen, or belly,
                        to filter your blood inside your body.</p>
                    <a href="Peritoneal-Dialysis"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr3.png" alt="sr3">
                    <h5 class="blue-txt">Kidney Biopsy</h5>
                    <p class="prgf-txt">A kidney biopsy involves taking one or more tiny samples of your kidney tissue
                        that
                        can be examined under a microscope to provide the correct diagnosis.</p>
                    <a href="Kidney-Biopsy"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr4.png" alt="sr4">
                    <h5 class="blue-txt">Kidney Cancer</h5>
                    <p class="prgf-txt">Kidney cancer is cancer that originates in the kidneys. We offer screening,
                        diagnosis, treatment,
                        and follow-up care to help you in your cancer journey.</p>
                    <a href="kidney-cancer"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr5.png" alt="sr5">
                    <h5 class="blue-txt">Critical Care Nephrology</h5>
                    <p class="prgf-txt">Critical Care Nephrology allows multidisciplinary physicians and surgeons to
                        address the multiple needs of critically ill kidney patients.</p>
                    <a href="Critical-Care-Nephrology"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr6.png" alt="sr6">
                    <h5 class="blue-txt">Preventive Kidney Check Up</h5>
                    <p class="prgf-txt">A comprehensive check up screens each organ closely to detect even the smallest
                        symptom and helps identify problems before they even start.</p>
                    <a href="Preventive-Kidney-Check-up"><button type="submit" class="bg-gradient">Read
                            More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr7.png" alt="sr1">
                    <h5 class="blue-txt">Kidney Transplant</h5>
                    <p class="prgf-txt">A surgery in which a diseased kidney with little or no function is replaced with
                        a healthy kidney from a living or deceased donor.</p>
                    <a href="Kidney-Transplant"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr8.png" alt="sr2">
                    <h5 class="blue-txt">Preemptive Transplant</h5>
                    <p class="prgf-txt">A preemptive transplant is performed prior to the recipient's requirement for
                        dialysis and allows them to stay healthier and live longer.</p>
                    <a href="premtive-transplant"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr10.png" alt="sr4">
                    <h5 class="blue-txt">Kidney Stone</h5>
                    <p class="prgf-txt">We have state-of-the-art facilities and world-class laser treatment equipment to
                        remove painful stones stuck in a person’s Kidney.</p>
                    <a href="kidney-stone"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="srvc-crd">
                    <img src="images/sr14.png" alt="sr4">
                    <h5 class="blue-txt">Robot-Assisted Kidney Transplantation</h5>
                    <p class="prgf-txt">A robot-assisted surgery in which the entire kidney transplant is done with very
                        small buttonhole incisions,
                        ensuring quicker recovery and precision.</p>
                    <a href="robotic"><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
        </div>
        <!-- <div class="info-txt p-50">
            <h2><span>Urology</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="srvc-crd">
                    <img src="images/sr7.png" alt="sr1">
                    <h5 class="blue-txt">Kidney Transplant</h5>
                    <p class="prgf-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the
                        industry's standard dumm 1500s, when an unknown printer took a galley</p>
                        <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="srvc-crd">
                    <img src="images/sr8.png" alt="sr2">
                    <h5 class="blue-txt">Premptive Transplante</h5>
                    <p class="prgf-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the
                        industry's standard dumm 1500s, when an unknown printer took a galley</p>
                        <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="srvc-crd">
                    <img src="images/sr9.png" alt="sr3">
                    <h5 class="blue-txt">Prostate Biopsy </h5>
                    <p class="prgf-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the
                        industry's standard dumm 1500s, when an unknown printer took a galley</p>
                        <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="srvc-crd">
                    <img src="images/sr10.png" alt="sr4">
                    <h5 class="blue-txt">Stone Surgeries</h5>
                    <p class="prgf-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the
                        industry's standard dumm 1500s, when an unknown printer took a galley</p>
                        <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="srvc-crd">
                    <img src="images/sr11.png" alt="sr5">
                    <h5 class="blue-txt">TURP</h5>
                    <p class="prgf-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the
                        industry's standard dumm 1500s, when an unknown printer took a galley</p>
                        <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="srvc-crd">
                    <img src="images/sr12.png" alt="sr6">
                    <h5 class="blue-txt">Urological Cancer Surgeries</h5>
                    <p class="prgf-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the
                        industry's standard dumm 1500s, when an unknown printer took a galley</p>
                        <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>
        </div> -->
    </div>

</section>

<!-- service end -->


<!-- offer start -->

<section class="offer-sec mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="offer-img">
                    <img src="images/offer-img.png" alt="offer-img">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="offer-txt wd ">
                    <h2>RELIABILITY STRENGTHENED BY EXPERIENCE</h2>
                    <p class="prgf-txt">At Meliora, patient care takes the centre-stage and advanced treatment is
                        exercised through an adept team of transplant surgeons and nephrologists. From cutting edge
                        surgical techniques to the latest medical equipment, we have everything to ensure that our
                        patients receive the treatment they deserve.</p>
                    <div class="doctor-sign">
                        <div class="sign-div">
                            <img src="images/sign.png" alt="sign">
                        </div>
                        <div class="doctor-div">
                            <img src="images/doctor.png" alt="doctor">
                            <div class="h4-txt">
                                <h4>Dr. Priyadarshi Ranjan</h4>
                                <h4 class="h4-scnd">INSTITUTE DIRECTOR</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="exprt">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Highly Experienced Team</p>
                            </div>
                            <div class="exprt">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Commitment To Quality Care</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="exprt">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>Top Grade Infrastructure</p>
                            </div>
                            <div class="exprt">
                                <i class="fa-solid fa-circle-check"></i>
                                <p>World-Class Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- offer end  -->


<!-- counter section -->

<section class="count-sec">
    <div class="count-area" data-diff="100">
        <div class="container">
            <div class="row g-4">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="count-area-content">
                        <div class="count-span">
                            <div class="count-digit">1000</div>
                            <span>+</span>
                        </div>
                        <div class="count-title">Kidney Transplants</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="count-area-content">
                        <div class="count-span">
                            <div class="count-digit">100</div>
                            <span>+</span>
                        </div>
                        <div class="count-title">ABO Incompatible Transplants</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="count-area-content">
                        <div class="count-span">
                            <div class="count-digit">50</div>
                            <span>+</span>
                        </div>
                        <div class="count-title">Robotic Transplants</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="count-area-content">
                        <div class="count-span">
                            <div class="count-digit">500</div>
                            <span>+</span>
                        </div>
                        <div class="count-title">Kidney Cancer Surgeries</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- counter end -->


<!-- video start -->

<section class="vdo-sec p-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="vidoe-dv">
                    <div class="wrapper">
                        <div class="video-main">
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <a href="https://youtu.be/U_Yo8yEGMeM?t=105" class="video video-popup mfp-iframe" data-lity><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="kid-txt">
                    <h2>Meliora Kidney Institute & Research Centre</h2>
                    <p class="prgf-txt">Meliora Kidney Institute & Research Centre was started with a passion to
                        ameliorate the sufferings of
                        patients struck with the misfortune of kidney ailments. The vision of the healthcare
                        professionals behind
                        starting this super specialised institute was aligned to provide excellence in treatment of
                        various kinds
                        of kidney disorders by making use of cutting edge technology, enriched with experience,
                        compassion and humility.
                        We, at Meliora, are committed to raise the bar of treatment of such diseases by producing key
                        research based
                        on critical analysis of our own results in the field of nephrology and kidney transplantation.
                    </p>
                    <a href=""><button type="submit" class="bg-gradient">Read More</button></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- video end  -->

<!-- gallery start -->

<!-- <section class='p-80'>
    <div class="container">
        <div class="info-txt">
            <h2><span>Our Gallery</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="gallary-img">
                    <img src="images/gallery-img1.png" alt="gallery-img1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallary-img">
                    <img src="images/gallery-img2.png" alt="gallery-img2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallary-img">
                    <img src="images/gallery-img3.png" alt="gallery-img3">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallary-img">
                    <img src="images/gallery-img4.png" alt="gallery-img4">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallary-img">
                    <img src="images/gallery-img5.png" alt="gallery-img5">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallary-img">
                    <img src="images/gallery-img6.png" alt="gallery-img6">
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="gallery doctor-sec">
    <div class="container">
        <!-- <div class="wrapper">
            <div class="photobanner">
                <div class="gallary-img">
                    <img src="images/gallery-img1.png" alt="gallery-img1">
                </div>
                <div class="gallary-img">
                    <img src="images/gallery-img2.png" alt="gallery-img2">
                </div>
                <div class="gallary-img">
                    <img src="images/gallery-img3.png" alt="gallery-img3">
                </div>
                <div class="gallary-img">
                    <img src="images/gallery-img4.png" alt="gallery-img3">
                </div>
                <div class="gallary-img">
                    <img src="images/gallery-img5.png" alt="gallery-img5">
                </div>
                <div class="gallary-img">
                    <img src="images/gallery-img6.png" alt="gallery-img6">
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider4" class="owl-carousel">                           
                    <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/gallery-img1.png" alt="gallery-img1">
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/gallery-img2.png" alt="gallery-img1">
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/abt-pg2.png" alt="gallery-img1">
                        </div>
                    </div>
                    
                    <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/gallery-img4.png" alt="gallery-img1">
                        </div>
                    </div>
                    <!-- <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/gallery-img7.png" alt="gallery-img1">
                        </div>
                    </div> -->
                    <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/gallery-img5.png" alt="gallery-img1">
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="gallary-img">
                            <img src="images/gallery-img6.png" alt="gallery-img1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faq start -->

<section class='faq p-50'>
    <h2 class='title pb-4'>Frequently Asked Questions</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class='item-container'>
                    <div class='item'>
                        <p class='qus active'>1. What are the risk factors for kidney diseases?</p>
                        <p class='ans prgf-txt'>You may have an increased risk for kidney disease if you have diabetes,
                            suffer from hypertension, are older, have a severe heart disease, are obese, or smoke among
                            other factors.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>2. What are the symptoms of early kidney disease?</p>
                        <p class='ans hide prgf-txt'>If you are experiencing symptoms like weakness, fatigue, poor
                            appetite, trouble sleeping, change in urinary habit,
                            frequent urine at night, frothing in urine, or swelling of legs you should consult a doctor.
                        </p>
                    </div>
                    <div class='item'>
                        <p class='qus'>3. How to identify if a person has kidney problems?</p>
                        <p class='ans hide prgf-txt'>Kidney problems at an early stage can be detected by simple tests
                            like serum
                            creatinine level. urine routine, and microscopy test.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>4. Who should get screened for kidney problems and how frequently?</p>
                        <p class='ans hide prgf-txt'>Any person experiencing symptoms or at risk of kidney diseases
                            should get screened.
                            Getting tested at least once a year is ideal.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>5. What is dialysis?</p>
                        <p class='ans hide prgf-txt'>Dialysis is a medical process through which a person’s blood is
                            cleansed of the toxins
                            or wastes that kidneys normally remove. When a person’s kidneys no longer function
                            optimally, dialysis helps
                            keep the right levels of chemicals, fluids and salts in the body so that the body functions
                            normally.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class='item-container'>
                    <div class='item'>
                        <p class='qus active'>6. Can I travel if I am on dialysis?</p>
                        <p class='ans prgf-txt'>Consult your doctor before planning your trip. Most patients receiving
                            dialysis can travel if they have their medication and can get access to the dialysis
                            facility.
                            Our specialists can help you prepare the treatment plan.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>7. Are Kidney Stones serious?</p>
                        <p class='ans hide prgf-txt'>Kidney stones can be dangerous in severe cases. If you leave them
                            unattended or keep on delaying the treatment, they can lead to problems of urinary tract
                            infections and kidney damage. Kidney stones present for a long time can build up pressure
                            on the kidneys and interfere with their functioning.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>8. What is chronic kidney disease?</p>
                        <p class='ans hide prgf-txt'>Chronic Kidney Disease (CKD) refers to reduced kidney function or
                            damage where the kidney cannot filter blood the way it should. In some cases, it results
                            in kidney failure or end-stage renal disease in which the patient requires dialysis or
                            kidney transplant to keep them alive.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>9. Is kidney transplant painful?</p>
                        <p class='ans hide prgf-txt'>The pain a patient may experience after a kidney transplant surgery
                            varies person to person. One can expect pain or soreness around the incision while you're in
                            the
                            process of healing. The doctor may prescribe medicines based on the patient’s condition.</p>
                    </div>
                    <div class='item'>
                        <p class='qus'>10. What are the ways of prevention?</p>
                        <p class='ans hide prgf-txt'>There are three ways of prevention:

                            Primary prevention is the act of intervening to promote health and prevent the onset of
                            illness.
                            Secondary Prevention involves early detection through screening and prompt treatment.
                            Tertiary prevention is controlling the progression of a disease after a diagnosis to slow or
                            stop it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- faq end -->

<!-- blog start -->

<section class="blog p-50">
    <div class="container">
        <div class="info-txt">
            <h3 class="h3-txt"> OUR BLOG</h3>
            <h2 class="pb-5"><span>Latest Blog & Updates</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="blog-crd">
                    <img src="images/blg-1.png" alt="blg-1">
                    <div class="blg-txt">
                        <h3 class="blue-txt">A humane way to heal, thanks to a robot</h3>
                        <div class="date-dv">
                            <span>December 1, 2022</span>
                        </div>
                        <div class="blg-icn">
                            <img src="images/bi-1.png" alt="">
                            <span>By rakt</span>&nbsp;&nbsp;/&nbsp;&nbsp;
                            <img src="images/bi-2.png" alt="">
                            <span>KIDNEY TRANSPLANT </span>
                        </div>
                        <a href="blog-1"><button>Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-crd">
                    <img src="images/blg-2.png" alt="blg-1">
                    <div class="blg-txt">
                        <h3 class="blue-txt">The human touch of robotic kidney transplant</h3>
                        <div class="date-dv">
                            <span>December 1, 2022</span>
                        </div>
                        <div class="blg-icn">
                            <img src="images/bi-1.png" alt="">
                            <span>By rakt </span>&nbsp;&nbsp;/&nbsp;&nbsp;
                            <img src="images/bi-2.png" alt="">
                            <span>KIDNEY TRANSPLANT </span>
                        </div>
                        <a href="blog-2"><button>Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-crd">
                    <img src="images/blg-3.png" alt="blg-1">
                    <div class="blg-txt">
                        <h3 class="blue-txt">The human side of Robotic Kidney Transplant</h3>
                        <div class="date-dv">
                            <span>December 1, 2022</span>
                        </div>
                        <div class="blg-icn">
                            <img src="images/bi-1.png" alt="">
                            <span>By rakt</span>&nbsp;&nbsp;/&nbsp;&nbsp;
                            <img src="images/bi-2.png" alt="">
                            <span>KIDNEY TRANSPLANT </span>
                        </div>
                        <a href="blog-3"><button>Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'assets/footer.php'; ?>
