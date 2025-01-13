<section style="margin-bottom:100px">
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " src="{{asset('asserts/user/img/haj/mecca1.jpg')}}" alt="Image" style="height: 70vh; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Ramadan Umrah Packages </h1>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book A Package</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Explore Hotel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
              <!-- Booking Start -->
  <div class="container-fluid booking pb-5 wow fadeIn"  data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px; border: 2px dotted red;">
            <div class="row g-2">
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="clients-count">0</h2>
                        <h5>Clients</h5>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="success-rate">0</h2>
                        <h5>Success Rate</h5>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="rating-clients">0</h2>
                        <h5>Rating Clients</h5>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="experience-years">0</h2>
                        <h5>Years of Experience</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Function to animate numbers
function animateNumber(id, start, end, duration, suffix = '') {
    let current = start;
    let increment = end > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / (end - start)));
    let element = document.getElementById(id);
    
    let timer = setInterval(function() {
        current += increment;
        element.textContent = current + suffix;
        
        if (current === end) {
            clearInterval(timer);
        }
    }, stepTime);
}

// Call animateNumber for each counter with appropriate values
window.onload = function() {
    animateNumber('clients-count', 0, 5, 3000, 'K +');  // 5K+ Clients
    animateNumber('success-rate', 0, 97, 3000, '%');    // 87% Success Rate
    animateNumber('rating-clients', 0, 4, 3000);      // 4.7 Rating Clients
    animateNumber('experience-years', 0, 20, 3000, '+'); // 20+ Years of Experience
};
</script>


        <!-- Booking End -->
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container" >
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">RAMADAN UMRAH PACKAGE <span class="text-primary text-uppercase">FROM SHARJAH & DUBAI </span></h1>
                        <p class="mb-4">Umrahraht.com is renowned in all over Dubai for its quality umrah services which includes cheapest 4 star and 5 star Umrah packages , Umrah packages by bus and by air. We are pleasured to announce Ramadan Umrah Package From Sharjah & Dubai 2024 for our valuable customers. Ramadan Umrah Package is available by bus and by air. Ramadan umrah package inlcudes umrah visa, 3 star hotel accommodation and luxury transportation with zayarat to make your umrah journey memorable.</p>
                        <!-- <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">2000</h2>
                                        <p class="mb-0">Travel Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">132</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" ><span data-toggle="counter-up">100</span>k</h2>
                                        <p class="mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">35,000</h2>
                                        <p class="mb-0">Travel Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">280</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <!-- <h2 class="mb-1" data-toggle="counter-up">100 </h2> -->
                                        <h2 class="mb-1" ><span data-toggle="counter-up">720</span>k</h2>
                                        <p class="mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="https://www.rahatgroup.in/">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{asset('asserts/user/img/haj/macca.jpg')}}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{asset('asserts/user/img/haj/childmeccac.jpg')}}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{asset('asserts/user/img/haj/masque.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{asset('asserts/user/img/haj/peopelmacca.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Package Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Package</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Package</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('asserts/user/img/haj/pack1.jpg')}}" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Umrah Package By Air Includes:</h5>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-utensils text-primary me-2"></i>MEALS</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-shirt text-primary me-2"></i>LAUNDRY</small>
                                    
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-person-praying text-primary me-2"></i>ZIYARAT</small>
                                    <small  ><i class="fa-solid fa-bus text-primary me-2"></i>TRANSPORT</small>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-file-shield text-primary me-2"></i>INSURANCE</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>HOTEL</small>
                                    
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-passport text-primary me-2"></i>VISA</small>
                                    <small  ><i class="fa-solid fa-plane text-primary me-2"></i>FLIGHT</small>
                                </div>

                                <p class="text-body mb-3">1 Year Saudi Visa with Insurance</p>
                                <P>Direct Saudi Airline Return Tickets</P>
                                <P>Complete Transportation</P>
                                <P>Food Full Board (Breakfast, Lunch, Dinner)</P>
                                <P>Visit of Historical Places (Ziyarat)</P>
                                <P>Multilingual Tour Guide</P>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('asserts/user/img/haj/pack2.jpg')}}" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Umrah Package By Bus Includes:</h5>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-utensils text-primary me-2"></i>MEALS</small>
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-shirt text-primary me-2"></i>LAUNDRY</small>
                                    
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-person-praying text-primary me-2"></i>ZIYARAT</small>
                                    <small  ><i class="fa-solid fa-bus text-primary me-2"></i>TRANSPORT</small>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-file-shield text-primary me-2"></i>INSURANCE</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>HOTEL</small>
                                    
                                    <small class="border-end me-3 pe-3"><i class="fa-solid fa-passport text-primary me-2"></i>VISA</small>
                                    <small  ><i class="fa-solid fa-plane text-primary me-2"></i>FLIGHT</small>
                                </div>

                                <p class="text-body mb-3">1 Year Saudi Visa with Insurance</p>
                                <P>Hotel Accommodation</P>
                                <P>Complete Transportation</P>
                                <P>Tour of Holy Places (Ziyarat)</P>
                                <P>Multilingual Tour Guide</P>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" style="height: 265px;" src="{{asset('asserts/user/img/haj/pack3.jpg')}}" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Required Documents For Umrah Visa:</h5>
                                </div>

                                <p class="text-body mb-3">Passport Copy (Passport should be valid for minimum 6 Months)</p>
                                <P>UAE Visa/Emirates ID Copy (UAE Visa should be valid minimum 3 Month)</P>
                                <P>One Passport Size photo with White Background</P>
                                <P>Note: Non Residence/Tourist Visa holder can apply also</P>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- package End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">RAHAT GROUP</h6>
                        <h1 class="text-white mb-4">Dedicated to ensuring a seamless and fulfilling experience for every pilgrim</h1>
                        <p class="text-white mb-4">Rahat Group offers a wide range of services, including Hajj and Umrah packages, elite catering, visa processing, and travel services, providing quality and tailored experiences for its customers.</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Package</a>
                        <a href="" class="btn btn-light py-md-3 px-md-5">Book A Package</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">

                            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3fM0Xq9oYyA?autoplay=1"
                            id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe> -->

                                <iframe width="560" height="315" src="https://www.youtube.com/embed/3fM0Xq9oYyA?si=Orf0_BVvwKm6rsgR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


        <!-- Service Start -->
        <livewire:OurService />
        <!-- Service End -->

        <!-- Newsletter Start -->
         {{-- <livewire:NewsLetter />--}}
        <!-- Newsletter Start -->
</section>
 