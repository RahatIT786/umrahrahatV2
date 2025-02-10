<section>
     <!-- Page Header Start -->
     <div class="container-fluid p-0 mb-5 hotel-banner">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item imgZoom active">
                    <img class="w-100" style="height: 15vw; object-position: center; object-fit: cover;" src="{{ asset('newImg/bannerImage/trasport_banner.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            {{-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Transfers</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Page Header End -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <button class="btn btn-primary w-100">Search Transport</button>
                        </div>
                        <div class="col-md-9">
                            <div class="row g-2">
                                <form class="col-md-6"  wire:submit.prevent="">
                                    <select class="form-select" wire:model.live="car_type_id">
                                        <option value='' selected>Select Vechicle Type</option>
                                        @foreach ($cartypemaster as $CarTypeName)
                                                <option value="{{ $CarTypeName->id }}">{{ $CarTypeName->car_type }}</option>
                                        @endforeach
                                    </select>
                                </form>
                                <form class="col-md-6" wire:submit.prevent="">
                                    <select class="form-select" wire:model.live="car_sector_id">
                                        <option value='' selected>Select Place</option>
                                         @foreach ($carsectormaster as $SectorName)
                                            <option value="{{ $SectorName->id }}">{{ $SectorName->car_sector }}</option>
                                         @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h6 class="section-title text-center text-primary text-uppercase">RahatGroup</h6> -->
                    <!-- <h1 class="mb-5">Our Laundry Service<span class="text-primary text-uppercase"></span></h1> -->
                </div>
                <div class="row g-4 d-flex   align-items-center">

                @foreach ($cars as $car)
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="row g-0">
                                    <!-- Right Column: Food Details Section (col-4) -->
                                    <div class="col-lg-12 col-md-12 p-4 mt-2">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{Storage::url($car->cartypemaster->carImagePath)}}" alt="" style="height: 13rem; width: 100%; object-fit: cover;">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                                <!-- Optional small label here if needed -->
                                            </small>
                                        </div>

                                        <div class="d-flex justify-content-between my-3">
                                            <h5 class="mb-0">{{$car->cartypemaster->car_type}} ({{$car->seatsCount}} Seats)</h5>
                                            <h5 class="mb-0">{{$car->price}} ﷼</h5>
                                        </div>

                                        <div>
                                            <p style="border: 1px dashed #FEA116; padding: 2px 4px;" class="text-center">
                                                 {{$car->carsectormaster->car_sector}}
                                            </p>
                                        </div>

                                        <p class="text-body mb-3 text-justify">
                                          {{\Illuminate\Support\Str::limit($car->discription, 250)}}
                                        </p>
                                        <div class="d-flex justify-content-between">

                                            <a href="{{route('transport-single',['id'=>$car->id])}}" class="btn btn-sm btn-dark rounded py-2 px-4">
                                                <i class="fa-regular fa-paper-plane"></i> More Details
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