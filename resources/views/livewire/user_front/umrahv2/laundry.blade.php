<section>
     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h6 class="section-title text-center text-primary text-uppercase">RahatGroup</h6>
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Our Laundry Service</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h6 class="section-title text-center text-primary text-uppercase">RahatGroup</h6> -->
                    <!-- <h1 class="mb-5">Our Laundry Service<span class="text-primary text-uppercase"></span></h1> -->
                </div>
                <div class="row g-4 d-flex flex-column  align-items-center">

                @foreach ($laundryDetails as $landry)
                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="row g-0">
                                    <!-- Right Column: Food Details Section (col-4) -->
                                    <div class="col-lg-12 col-md-12 p-4 mt-2">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{Storage::url($landry['image_path'])}}" alt="" style="height: 20rem; width: 100%; object-fit: cover;">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                                <!-- Optional small label here if needed -->
                                            </small>
                                        </div>

                                        <div class="d-flex justify-content-between my-3">
                                            <h5 class="mb-0">{{$landry['laundry_type']}}</h5>
                                          
                                        </div>

                                        <div>
                                            <p style="border: 1px dashed #FEA116; padding: 2px 4px;" class="text-center">
                                                {{$landry['price']}} <span>AED</span>
                                            </p>
                                        </div>

                                        <div>
                                            <p style="border: 1px dashed #FEA116; padding: 2px 4px;" class="text-center">
                                                <span>Washing Days : {{$landry['days']}}</span>
                                                <p>How Many Cloths : {{$landry['cloth_count']}}</p>
                                            </p>
                                        </div>

                                        <p class="text-body mb-3 text-justify">
                                           
                                        </p>
                                        <div>
                                        <h5>Free Benifits</h5>
                                        {!! $landry['note'] !!}
                                        </div>

                                        <div class="d-flex justify-content-between">

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