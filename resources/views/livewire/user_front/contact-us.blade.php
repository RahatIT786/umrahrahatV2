<section>
    <section style="margin-bottom: 100px;">
                <!-- Page Header Start -->
                <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
                <div class="container-fluid page-header-inner py-5">
                    <div class="container text-center pb-5">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
                <!-- Contact Start -->
                <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <!-- <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                        <h1 class="mb-5"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1> -->
                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
                                    <p><a style="color: #797d7f;" href="https://api.whatsapp.com/send/?phone=%2B971567866713&text=Hello%2C+I+want+some+details+about+package&type=phone_number&app_absent=0"><i class="fab fa-whatsapp text-primary me-2"></i>+971 56 786 6713</a></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="section-title text-start text-primary text-uppercase">Clients</h6>
                                    <p><a style="color: #797d7f;" href="mailto:dubai@rahat.in"><i class="fa fa-envelope-open text-primary me-2"></i>dubai@rahat.in</a></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="section-title text-start text-primary text-uppercase">Agents</h6>
                                    <p><a style="color: #797d7f;" href="mailto:nazim@rahat.in"><i class="fa fa-envelope-open text-primary me-2"></i>nazim@rahat.in</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15093.628325073543!2d72.83324800000001!3d18.957621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce3cd58b13c3%3A0xb07729f581586b81!2sRahat%20Travels%20Of%20India%20Pvt%20Ltd!5e0!3m2!1sen!2sus!4v1736596054938!5m2!1sen!2sus"
                                frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">

                                <div>
                                    @if (session()->has('mailSuccess'))
                                        <div id="successMessage" class="alert alert-success text-center">{{session('mailSuccess')}}</div>
                                    @endif
                                </div>
                                <script>
                                    // Check if the success message exists
                                    if (document.getElementById('successMessage')) {
                                        // Set a timeout to hide the message after 3 seconds
                                        setTimeout(function() {
                                            document.getElementById('successMessage').style.display = 'none';
                                        }, 3000); // 3000ms = 3 seconds
                                    }
                                </script>
                                <form method="post" action="{{route('send.details')}}">
                                    @csrf

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" name="mail" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
    </section>
    <section style="background-color: #FEA116;margin-bottom:110px;" class="contact-us section py-5">
    <div class="container">

        <div class="contact-info">
            <div class="row">

                <!-- single-info -->
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
                    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
                        <i class="icofont-google-map display-4 text-primary mb-3"></i>
                        <div class="content">
                            <h3 class="h5 font-weight-bold text-dark">Makkah</h3>
                            <p class="text-muted">Deafa International,
Ajyad Sud Street.<br>
Anwar Deafa, Second Floor.</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->

                <!-- single-info -->
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
                    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
                        <i class="icofont-google-map display-4 text-primary mb-3"></i>
                        <div class="content">
                            <h3 class="h5 font-weight-bold text-dark">Madina</h3>
                            <p class="text-muted">Ali ibne Talib Inside Qurban Mall.
 <br> Awaali,
Madina Munawwara.</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
                    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
                        <i class="icofont-google-map display-4 text-primary mb-3"></i>
                        <div class="content">
                            <h3 class="h5 font-weight-bold text-dark">UK</h3>
                            <p class="text-muted">
26 Coniston Road,Blackburn,
<br>
Lancashire, BB1 5NP. UK</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->

                <!-- single-info -->
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
                    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
                        <i class="icofont-google-map display-4 text-primary mb-3"></i>
                        <div class="content">
                            <h3 class="h5 font-weight-bold text-dark">Mumbai</h3>
                            <p class="text-muted"> 305, S. V. P. Road, Issak Manzil, <br> Shop No 10, Dongri, Mumbai - 400 003.</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->

                <!-- single-info -->
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
                    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
                        <i class="icofont-google-map display-4 text-primary mb-3"></i>
                        <div class="content">
                            <h3 class="h5 font-weight-bold text-dark">Bengaluru</h3>
                            <p class="text-muted">
                            Regional Office: 135. MM Road, Opp. MLA Office. Frazer Town, Bangalore - 560005</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->

                

                <!-- single-info -->
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
                    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
                        <i class="icofont-google-map display-4 text-primary mb-3"></i>
                        <div class="content">
                            <h3 class="h5 font-weight-bold text-dark">Delhi</h3>
                            <p class="text-muted">108/109/110, 1st Floor, Vardhman City 2 Plaza,Turkman Gate, New Delhi - 400 003.</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->

            </div>
            <div class="row">

<!-- single-info -->
<div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
        <i class="icofont-google-map display-4 text-primary mb-3"></i>
        <div class="content">
            <h3 class="h5 font-weight-bold text-dark">Lucknow</h3>
             <p class="text-muted">Galaxy Building, Tondan Marg, Thakurganj, Daulatganj, Lucknow, Uttar Pradesh-226003 </p>
        </div>
    </div>
</div>
<!--/End single-info -->

<!-- single-info -->
<div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
        <i class="icofont-google-map display-4 text-primary mb-3"></i>
        <div class="content">
            <h3 class="h5 font-weight-bold text-dark">Hyderabad</h3>
           <p class="text-muted">Office No. 101-102,First floor Ashoka Plaza, Beside Golconda Hotel, Masab Tank, Hyderabad-500 028 </p>
        </div>
    </div>
</div>
<!--/End single-info -->
<div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
        <i class="icofont-google-map display-4 text-primary mb-3"></i>
        <div class="content">
            <h3 class="h5 font-weight-bold text-dark">Jaipur</h3>
             <p class="text-muted">Office No. 4054, Jagannath Shah ka Rasta, Ramganj Bazar, Jaipur, Rajasthan-302003 
             </p> 
        </div>
    </div>
</div>
<!-- single-info -->

<!--/End single-info -->

<!-- single-info -->
<div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
        <i class="icofont-google-map display-4 text-primary mb-3"></i>
        <div class="content">
            <h3 class="h5 font-weight-bold text-dark">Srinagar</h3>
            <p class="text-muted">Al Habib Complex, Sathu Barbar Shah, M.A. Link road, Srinagar Kashmir, Near Flour Mill, J&K-190001</p> 
        </div>
    </div>
</div>
<!--/End single-info -->

<!-- single-info -->
<div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
        <i class="icofont-google-map display-4 text-primary mb-3"></i>
        <div class="content">
            <h3 class="h5 font-weight-bold text-dark">Bhopal</h3>
         <!-- <p class="text-muted">
26 Coniston Road,Blackburn,

Lancashire, BB1 5NP. <br>UK<br></p> -->
        </div>
    </div>
</div>
<!--/End single-info -->

<!-- single-info -->
<div class="col-lg-4 col-md-6 col-12 mb-4 mt-3">
    <div class="single-info bg-white shadow p-4 text-center hover-animate contact-box">
        <i class="icofont-google-map display-4 text-primary mb-3"></i>
        <div class="content">
            <h3 class="h5 font-weight-bold text-dark">Ahmedabad</h3>
            <p class="text-muted"> 2/B Ketki Society, Near Shanti Niketan  School <br> Sonal - vejalpur Road, Ahmedabad</p> 
        </div>
    </div>
</div>
<!--/End single-info -->

</div>
        </div>
    </div>
</section>

<!-- Add this CSS to the bottom of your HTML or in a separate stylesheet -->
<style>
    /* Set the border-radius for each contact box */
    .contact-box {
        border-radius: 15px; /* Custom border-radius */
    }

    /* Hover animation: move up and down */
    .hover-animate:hover {
        transform: translateY(-10px); /* Moves up */
        transition: transform 0.3s ease; /* Smooth animation */
    }

    .hover-animate {
        transition: transform 0.3s ease; /* Initial smooth transition */
    }

    /* Optionally, add background color to the section */
    section.contact-us {
        background-color: #FEA116; /* Your desired background color */
    }
</style>



</section>

