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
                    
                </div>
                <div class="row g-4 align-items-center">
                    @foreach ($foodDetails as $food)
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="row g-0">
                                    <!-- Right Column: Food Details Section (col-4) -->
                                    <div class="col-lg-12 col-md-12 p-4 mt-2">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ Storage::url($food['foodBreakFastImagePath']) }}" alt="" style="height: 20rem; width: 100%; object-fit: cover;">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                                <!-- Optional small label here if needed -->
                                            </small>
                                        </div>

                                        <div class="d-flex justify-content-between my-3">
                                            <h5 class="mb-0">{{$food['foodType']}}</h5>
                                            <div>
                                                <a href="{{Storage::url($food['footPdf'])}}" target="_blank"><i style="font-size: 35px;color:red" class="bi bi-filetype-pdf mx-3"></i></a> 
                                                <a href="{{$food['foodLunch']}}" target="_blank"><i style="font-size: 35px;color:red" class="bi bi-youtube mx-3"></i></a> 
                                            </div>
                                        </div>

                                        <div>
                                            <p style="border: 1px dashed #FEA116; padding: 2px 4px;" class="text-center">
                                                {{$food['foodPrice']}} <span>{{$food['currency']}}</span>
                                            </p>
                                        </div>

                                        <p class="text-body mb-3 text-justify">
                                            {{ Str::limit($food['foodBreakFast'], 200, '...') }}
                                        </p>

                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" href="{{ Storage::url($food['footPdf']) }}">
                                                <i class="fa-solid fa-book"></i> Food Menu
                                            </a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4">
                                                <i class="fa-regular fa-paper-plane"></i> Book Enquire
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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