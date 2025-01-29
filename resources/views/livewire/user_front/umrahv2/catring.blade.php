<section>
     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Catering</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- <div class="container-fluid booking pb-5 wow fadeIn"  data-wow-delay="0.1s">
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
</div> -->

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase"></h6>
                    <h1 class="mb-5">Our Catring Service<span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4 d-flex flex-column  align-items-center">
                    {{-- <div class="col-lg-8 col-md-8 wow fadeInUp " data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden d-flex" style="width: fit-content">
                            <div class="position-relative p-3 col-lg-4">
                                <img class="img-fluid" src="{{asset('asserts/user/img/catring1.jpg')}}" style="height: 200px; width:100%; border-radius:7px;" alt="">
                            </div>
                            <div class="p-4 mt-2 " >
                               <div class="d-flex flex-column justify-content-between h-100">
                                <p class="text-body mb-3">The ultimate act of worship, Hajj and Umrah, represents a deep spiritual journey of devotion, submission, and faith...</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('contact-us')}}">Contact US</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" wire:navigate href="{{route('singleBlog1')}}">Read More</a>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div> --}}
                @foreach ($foodDetails as $food)
                <div class="col-lg-8 col-md-10 wow fadeInUp  " data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden d-flex" style="width: fit-content">
                        <div class="position-relative  p-3 col-lg-4 col-md-4">
                            <img class="img-fluid " src="{{asset('asserts/user/img/catring2.jpg')}}" style="height: 200px; width:100%; border-radius:7px;" alt="">
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>{{$food['foodType']}}</h5>
                                <h6 class="me-2">{{$food['foodPrice']}} ﷼</h6>
                            </div>
                            <div class="d-flex flex-column justify-content-between h-90">
                                <p class="text-body mb-3">The balancing act of hard work in this world and trust in fate for the Hereafter emphasizes the importance of striving...</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{asset('pdf/food_menu/bronzeMenu.pdf')}}">Food Menu</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('singleBlog2')}}">Read More</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>                    
                @endforeach
                    {{-- <div class="col-lg-8 col-md-8 wow fadeInUp " data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden d-flex" style="width: fit-content">
                            <div class="position-relative  p-3 col-lg-4">
                                <img class="img-fluid" src="{{asset('asserts/user/img/catring3.jpg')}}" style="height: 200px; width:100%; border-radius:7px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <p class="text-body mb-3">Ramadan, the blessed month of fasting, prayer, and reflection, is just around the corner. As we eagerly await its arrival...</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('contact-us')}}">Contact US</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('singleBlog3')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-8 col-md-8 wow fadeInUp " data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden d-flex" style="width: fit-content">
                            <div class="position-relative p-3 col-lg-4">
                                <img class="img-fluid" src="{{asset('asserts/user/img/catring4.jpg')}}" style="height: 200px; width:100%; border-radius:7px;" alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <p class="text-body mb-3">Ramadan, the blessed month of fasting, prayer, and reflection, is just around the corner. As we eagerly await its arrival...</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('contact-us')}}">Contact US</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('singleBlog3')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"The Umrah package from Rahat Group was truly exceptional. Everything was perfectly organized, from the flights to the accommodation. I felt completely at ease throughout the journey. Highly recommend!"</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person2.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Shaikh</h6>
                                <small>Akola(Maharashtra)</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"I had an unforgettable experience with Rahat Group's Umrah package. I will definitely choose them again for future trips. The guides were knowledgeable, the accommodations were comfortable."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person1.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ansari Hammad</h6>
                                <small>Hailakandi(Assam)</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"Rahat Group provided an outstanding Umrah service. Their attention to detail, friendly staff, and seamless arrangements allowed me to focus entirely on my worship. I will definitely choose them again for future trips."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person3.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Mohammed Milkan</h6>
                                <small>Baraily(Uttar Pradhesh)</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>

</section>