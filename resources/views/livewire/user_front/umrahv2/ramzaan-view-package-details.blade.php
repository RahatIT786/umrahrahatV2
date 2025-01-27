<section class="hotel-page" style="margin-bottom:100px">
    <!-- Hotel Banner Start -->
    <div class="container-fluid p-0 mb-5 hotel-banner">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('asserts/user/img/haj/mecca1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ "package name" }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel Banner End -->

    <!-- Hotel Details Start -->
    <div class=" py-5 hotel-details" id="hotel-details">
        <div class="container">
            <div class="row g-5">
                <!-- Left Section: Hotel Details, Address, and Image Gallery -->
                <div class="col-lg-9">
                    <!-- Hotel Address -->
                    <div class="mb-4 hotel-address">
                    <h3 class="mb-3 section-title text-start text-primary text-uppercase">package name</h3>
                    <h4 class="mb-5"><span class="text-primary"><i class="fa fa-map-marker-alt"></i></span>  {{ "package name" }} </h4>
                    </div>
                    <div class="container-fluid p-0 mb-5 hotel-banner">
                        <div class="custom-carousel" id="hotel-images-carousel">
                            <div class="custom-carousel-wrapper">
                                <div class="custom-carousel-item">
                                   {{-- <img class="w-100" src="{{ asset($hotel_detail->hotelMainImage) }}" alt="Hotel Image"> --}}
                                </div>
                            </div>

                            <!-- Carousel Controls -->
                            <button class="custom-carousel-prev" id="prev-btn">&#10094;</button>
                            <button class="custom-carousel-next" id="next-btn">&#10095;</button>
                        </div>
                    </div>
                    <!-- Hotel Banner End -->

                    <!-- Hotel Description -->
                    <div class="mt-4">
                        <h3 class="mb-4 section-title text-start text-primary text-uppercase">Discription</h3>
                        <h5 class="mb-5" style="line-height: 1.8;">{{ "Discription" }} </h5>
                    </div>


                </div>

                <!-- Right Section: Booking Form -->
                <div class="col-lg-3" style="margin-top:70px">
                           <!-- Rating Section -->
                            <div class="mb-3">
                            <h3 class="mb-3 section-title text-start text-primary text-uppercase">Rating</h3>
                           {{-- <div class="mb-5">
                            @if($hotel_detail->hotelStarRating == '2')
                                <div class="ps-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            @elseif($hotel_detail->hotelStarRating == '3')
                                <div class="ps-2">
                                  <i class="fa fa-star text-warning"></i>
                                  <i class="fa fa-star text-warning"></i>
                                  <i class="fa fa-star text-warning"></i>
                                </div>
                            @elseif($hotel_detail->hotelStarRating == '4')
                                <div class="ps-2">
                                  <i class="fa fa-star text-warning"></i>
                                  <i class="fa fa-star text-warning"></i>
                                  <i class="fa fa-star text-warning"></i>
                                  <i class="fa fa-star text-warning"></i>
                                </div>
                            @elseif($hotel_detail->hotelStarRating == '5')
                                 <div class="ps-2">
                                   <i class="fa fa-star text-warning"></i>
                                   <i class="fa fa-star text-warning"></i>
                                   <i class="fa fa-star text-warning"></i>
                                   <i class="fa fa-star text-warning"></i>
                                </div>
                            @endif
                            </div>--}}
                    </div>
                            
                            <!-- Price Section -->
                            <div class="mb-3">
                             <h3 class="mb-4 section-title text-start text-primary text-uppercase">Price per Night</h3>
                                {{--<h4>{{$hotel_detail->hotelPrice}} {{$hotel_detail->currency}}</h4>--}}
                            </div>
                    <div class="border p-5 rounded booking-form" style="width: 450px;">
                        <h4 class="mb-4 text-uppercase">Book Your Stay</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3">
                                <label for="num-adults" class="form-label">Adults</label>
                                <input type="number" class="form-control" id="num-adults" min="1">
                            </div>
                            <div class="mb-3">
                                <label for="num-children" class="form-label">Children</label>
                                <input type="number" class="form-control" id="num-children" min="0">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row form-row mt-5">
                @foreach ($packageType as $id => $type)
                    <div class="col-md-2 mb-3">
                        <label class="particles-checkbox-container">
                            <input type="radio" class="particles-checkbox" name="package_type" id="{{ $id }}"
                                value="{{ $id }}" wire:change="changeFlavour"
                                wire:model="selectedPackageFlavourId">
                            <span class="paln-label" for="{{ $id }}">
                                <p>{{ $type }}</p>
                            </span>
                            <span class="check-mark"></span>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Hotel Details End -->
    <div class="row" style="margin-bottom:250px">
    <div class="col-md-12">
    <div class="tabs" style="width: 100%;">
        <!-- Tab Name start here -->
        <nav role="navigation" class="transformer-tabs" style="width: 100%;">
            <div class="container" style="width: 100%;">
                <div class="nav nav-tabs-package" id="nav-tab" role="tablist">
                    <div class="nav-item-package">
                        <a href="#Hotels" id="lnkHotels" style="text-decoration: none;" class="nav-link-package active" data-bs-toggle="tab" role="tab" aria-selected="true">Hotels</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#TourCost" id="lnkTourCost" style="text-decoration: none;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Tour Cost</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#PackageOverview" style="text-decoration: none;" id="lnkPackageOverview" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Package Overview</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#InclusionsExclusions" style="text-decoration: none;" id="lnkInclusionsExclusions" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Inclusions / Exclusions</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#Itinerary" id="lnkItinerary" style="text-decoration: none;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Itinerary</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#PaymentPolicy" id="lnkPaymentPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Payment Policy / Important Notes</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#CancellationPolicy" style="text-decoration: none;" id="lnkCancellationPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Cancellation Policy</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Tab Name end here -->

        <div class="tab-content" id="nav-tabContent">
            <!-- Hotels tab content start -->
            <div id="Hotels" class="tab-pane fade show active" role="tabpanel">
                <div class="container">
                    <div class="row">
                  @foreach ($makkah_hotel_details as $makkah_hotel)
                      {{dd($makkah_hotel)}}
                         <!-- <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                          <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="asserts/user/img/haj/pack1.jpg" alt=""> 
                               
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">name</h5>
                                    <div class="ps-2 ">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Sharing : <span ><span style="font-size: 18px;">tr</span>.AED</span>
                                    </small>
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quint :  <span ><span style="font-size: 18px;">fd</span>.AED</span>
                                    </small>
                                    <small class=" me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quad : <span ><span style="font-size: 18px;">fd</span>.AED</span>
                                    </small>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Triple : <span ><span style="font-size: 18px;">gg</span>.AED</span>
                                    </small>
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Double :  <span ><span style="font-size: 18px;">g</span>.AED</span>
                                    </small>
                                    <small class=" me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Single : <span ><span style="font-size: 18px;">fg</span>.AED</span>
                                    </small>
                                </div>
                                <div>
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">06 Nights Makka , 02 Nights Madina </p>
                                </div>
                                <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p>
                            </div>
                        </div>
                        </div> -->
                        @endforeach 

                      {{-- @foreach ($madina_hotel_details as $madina_hotel)
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                          <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="asserts/user/img/haj/pack1.jpg" alt=""> 
                                
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">name</h5>
                                    <div class="ps-2 ">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Sharing : <span ><span style="font-size: 18px;">tr</span>.AED</span>
                                    </small>
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quint :  <span ><span style="font-size: 18px;">fd</span>.AED</span>
                                    </small>
                                    <small class=" me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quad : <span ><span style="font-size: 18px;">fd</span>.AED</span>
                                    </small>
                                </div>
                                <div class="d-flex mb-3 " style="font-size: 12px;">
                                
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Triple : <span ><span style="font-size: 18px;">gg</span>.AED</span>
                                    </small>
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Double :  <span ><span style="font-size: 18px;">g</span>.AED</span>
                                    </small>
                                    <small class=" me-3 pe-3">
                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Single : <span ><span style="font-size: 18px;">fg</span>.AED</span>
                                    </small>
                                </div>
                                <div>
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">06 Nights Makka , 02 Nights Madina </p>
                                </div>
                                <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p>
                            </div>
                           </div>
                         </div>
                        @endforeach --}}
                    </div>
                </div>
            </div>
            <!-- Package Overview tab content end -->
            <div id="TourCost" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="packageoverviewbox">
                                <div class="row">
                                    <div class="col-9 padding5px">
                                        <h6>TourCost &amp; Transport</h6>
                                        <div class="infotxt">
                                            <span id="lblNoRecordFlightTransport" style="display: none;">No Record Found</span>
                                            <ul id="ulFlightTransport">
                                                <li>Return Air Tickets</li>
                                                <li>Round Trip Transfers</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 text-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.64 293.43">
                                            <path d="M3,217.9c5.1-5,10.22-10,15.3-15,3.61-3.55,7.21-7.11,10.73-10.75a4.12,4.12,0,0,1,4.21-1.43c11.65,2.06,23.34,3.94,35,5.75a4.6,4.6,0,0,0,3.5-1q29.87-30.92,59.57-62c.25-.26.45-.58.93-1.19L9.36,56.66a17.64,17.64,0,0,0,3.1-1.92C21.21,46.06,30,37.4,38.57,28.58A4.48,4.48,0,0,1,44,27.28q54.27,18.07,108.61,36c10.59,3.51,21.2,7,31.75,10.59,2.38.83,3.85.57,5.66-1.34,19-19.92,38.07-39.72,57.1-59.6,5.69-5.95,12.54-9.26,20.8-9.36a27.81,27.81,0,0,1,26.21,17.12c4.57,11.22,3,21.83-5.49,30.5-11,11.27-22.61,22-34,32.87-9.15,8.81-18.29,17.64-27.53,26.35A3.83,3.83,0,0,0,226,115.1Q249.4,185.54,272.73,256c.77,2.32.53,3.7-1.25,5.43-8.82,8.61-17.49,17.36-26.17,26.11a19.9,19.9,0,0,0-1.95,3.11L167.65,167.7c-.9.81-1.66,1.47-2.38,2.17q-30.21,28.95-60.43,57.88a4.27,4.27,0,0,0-1.38,4.28c2,11.67,3.91,23.34,5.7,35A4.88,4.88,0,0,1,108,270.7c-7.95,8.13-16,16.13-24.06,24.18-.66.65-1.22,1.41-1.82,2.12h-.58a2.91,2.91,0,0,0,0-.84c-6.51-18.62-13-37.24-19.62-55.81a4.85,4.85,0,0,0-2.76-2.4q-17.88-6.42-35.85-12.62C16.52,223,9.75,220.76,3,218.48Z" transform="translate(-3 -3.57)"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="packageoverviewbox">
                                <div class="row">
                                    <div class="col-9">
                                        <h6>Meals</h6>
                                        <div class="infotxt">
                                            <span id="lblNoRecordMeals" style="display: none;">No Record Found</span>
                                            <ul id="ulMeals">
                                                <li>Food :: Indian Set Menu 3 Meals.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 text-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 287.48 286.82">
                                            <path d="M294,186.21c-1.11-.08-2.22-.23-3.33-.23-10.48,0-21,0-31.44,0-7,0-10.14-3.2-10.14-10.1q0-66.51,0-133A36.44,36.44,0,0,1,282.88,6.38C288.24,6,292,7.68,294,12.74Z" transform="translate(-6.52 -6.32)"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</section>