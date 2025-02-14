<section>
     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Assistant</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Rahatgroup</h6>
                    <h1 class="mb-5">Book My Assistant<span class="text-primary text-uppercase"></span></h1>
                </div>
                <div class="row g-4 d-flex flex-column  align-items-center">
                    <div class="col-lg-10 col-md-8 wow fadeInUp " data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden d-flex" style="width: fit-content">
                            <div class="position-relative p-3 col-lg-4 col-md-4">
                                <img class="img-fluid" src="{{asset('images/bookmyassistant.jpeg')}}" style="height: 200px; width:100%; border-radius:7px;" alt="">
                            </div>
                            <div class="p-4 mt-2 " >
                               <div class="d-flex flex-column justify-content-between h-100">
                                <h2>Need Personal Assistance for Umrah? We've Got You Covered!</h2>
                                <p>Whether you need personal assistance <strong>(Gents or Ladies)</strong> for performing Umrah or require wheelchair assistance, Rahat Group is here to help.</p>
                                <p class="text-body mb-3">The ultimate act of worship, Hajj and Umrah, represents a deep spiritual journey of devotion, submission, and faith...</p>
                                <div>
                                    <div class="d-flex ">
                                        <div class="me-2"><strong><i class="fa-solid fa-hands-holding-child text-primary"></i> Personal Guides: </strong></div>
                                        <div>Available to assist you throughout your Umrah rituals</div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <div class="me-2"><strong><i class="fa-solid fa-wheelchair text-primary"></i> Wheelchair Support: </strong></div>
                                        <div>Rahat Group is committed to ensuring a comfortable and stress-free pilgrimage for all our guests.</div>
                                    </div>
                                </div>

                                <p></p>

                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" wire:click="openModal()">
                                        <i class="fa-regular fa-paper-plane"></i> Enquire Now
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Enquire Now</a> --}}
                                    {{-- <a class="btn btn-sm btn-dark rounded py-2 px-4" wire:navigate href="{{route('singleBlog1')}}">Read More</a> --}}
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>

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
        @if($isOpen)
        <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><i class="fas fa-calendar-check"></i> Book Now</h5>
                        <button type="button" class="btn-close text-white" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <livewire:AssistForm />
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
