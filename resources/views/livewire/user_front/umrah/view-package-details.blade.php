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
                            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $this->packages->name }}</h1>
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
                    <h3 class="mb-3 section-title text-start text-primary text-uppercase">{{$packages->name}}</h3>
                    <!-- <h4 class="mb-5"><span class="text-primary"><i class="fa fa-map-marker-alt"></i></span>  {{ "package name" }} </h4> -->
                    </div>
                    <div class="container-fluid p-0 mb-5 hotel-banner">
                        <div class="custom-carousel" id="hotel-images-carousel">
                            <div class="custom-carousel-wrapper">
                               
                                    <div class="custom-carousel-item">
                                     <img class="w-100" src="{{ Storage::url($this->packages->packageImage)}}" alt="Hotel Image"> 
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
                        <h5 class="mb-5" style="line-height: 1.8;">{{ "Description" }}</h5>

                        <ul>
                            @foreach (explode('.', $packages->description) as $sentence)
                                @if(trim($sentence)) <!-- Check if the sentence is not empty -->
                                    <li><h5>{{ trim($sentence) }}.</h5></li> <!-- Add a period at the end of each sentence -->
                                @endif
                            @endforeach
                        </ul>
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
                                wire:model="selectedPackageFlavourId"  @if ($loop->first) checked @endif >
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
                    <div class="row" style="margin-top:20px">
                        
                         <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                         <h3 class="mb-3 section-title text-start text-primary text-uppercase">{{$makkah_hotel_details->hotelCity}} Hotel</h3>
                          <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid"  src="{{asset($makkah_hotel_details->hotelImage1)}}" alt="test"> 
                               
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{$makkah_hotel_details->hotelName}}</h5>
                                    <div class="ps-2 ">
                                        @if ($makkah_hotel_details->hotelStarRating == 1)
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($makkah_hotel_details->hotelStarRating == 2)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($makkah_hotel_details->hotelStarRating == 3)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($makkah_hotel_details->hotelStarRating == 4)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($makkah_hotel_details->hotelStarRating == 5)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                    </div>
                                </div>
                           
                                <!-- <div>
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">06 Nights Makka , 02 Nights Madina </p>
                                </div> -->
                                <!-- <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p> -->
                            </div>
                        </div>
                        </div>
                       
                        

                 
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-3 section-title text-start text-primary text-uppercase">{{$madina_hotel_details->hotelCity}} Hotel</h3>
                          <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset($madina_hotel_details->hotelImage1)}}" alt=""> 
                                
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{$madina_hotel_details->hotelName}}</h5>
                                    <div class="ps-2 ">
                                        @if ($madina_hotel_details->hotelStarRating == 1)
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($madina_hotel_details->hotelStarRating == 2)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($madina_hotel_details->hotelStarRating == 3)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($madina_hotel_details->hotelStarRating == 4)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($madina_hotel_details->hotelStarRating == 5)
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                         <small class="fa fa-star text-primary"></small>
                                        @endif
                                    </div>
                                </div>

                                <!-- <div>
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">06 Nights Makka , 02 Nights Madina </p>
                                </div> -->
                                <!-- <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p> -->
                            </div>
                           </div>
                         </div>
                    </div>
                </div>
            </div>
            <!-- Package Overview tab content end -->
            <div id="TourCost" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="packageoverviewbox">
                                <div class="row">
                                <div class="room-rates">

                                <div class="rates-row">
                                   
                                    @if ($this->g_share > 0 )
                                    <div class="rate">
                                    <h3>Sharing</h3>
                                    <span class="rate-value">{{ $this->g_share}}</span>
                                    <span class="rate-icon">
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($this->qt_share > 0)
                                    <div class="rate">
                                    <h3>Quint</h3>
                                    <span class="rate-value">{{$this->qt_share}}</span>
                                    <span class="rate-icon">
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
                                    
                                    @if ($this->qd_share > 0)
                                    <div class="rate">
                                    <h3>Quat</h3>
                                    <span class="rate-value">{{$this->qd_share}}</span>
                                    <span class="rate-icon">
                                    
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
                                    
                                    @if ($this->t_share > 0)
                                    <div class="rate">
                                    <h3>Triple</h3>
                                    <span class="rate-value">{{$this->t_share}}</span>
                                    <span class="rate-icon">
                                  
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($this->d_share > 0)
                                    <div class="rate">
                                    <h3>Double</h3>
                                    <span class="rate-value">{{$this->d_share}}</span>
                                    <span class="rate-icon">
                                   
                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-user"></i>
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
                                    
                                    @if ($this->single > 0)
                                    <div class="rate">
                                    <h3>Single</h3>
                                    <span class="rate-value">{{$this->single}}</span>
                                    <span class="rate-icon">        
                                        <i class="fa-solid fa-user"></i>
                                       
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
  
                                </div>

                                <!-- <h3>Child Rates</h3> -->
                                <div class="rates-row">
                                    @if ($this->child_with_bed > 0)
                                    <div class="rate">
                                    <h4>Child with Bed</h4>
                                    <span class="rate-value">{{$this->child_with_bed}}</span>
                                    <span class="rate-icon"><i class="fa-solid fa-child"></i> + <i class="fa-solid fa-bed"></i></span> <!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($this->child_no_bed > 0)
                                    <div class="rate">
                                    <h4>Child without Bed</h4>
                                    <span class="rate-value">{{$this->child_no_bed}}</span>
                                    <span class="rate-icon"><i class="fa-solid fa-child"></i> </span><!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($this->infant > 0)
                                    <div class="rate">
                                    <h4>Infant</h4>
                                    <span class="rate-value">{{$this->infant}}</span>
                                    <span class="rate-icon"><i class="fa-solid fa-baby-carriage"></i></span> <!-- Example icon -->
                                    </div>
                                    @endif

                                </div>
                                </div>

                                <style>
                                    .room-rates {
                                font-family: Arial, sans-serif;
                                margin: 20px;
                                }

                                h2, h3 {
                                text-align: center;
                                }

                                .rates-row {
                                display: flex;
                                justify-content: space-between;
                                flex-wrap: wrap;
                                gap: 20px;  /* Adjust space between items */
                                margin-bottom: 20px;
                                }

                                .rate {
                                flex: 1 1 150px; /* Adjust the size of each rate box */
                                padding: 15px;
                                border: 1px solid #ccc;
                                border-radius: 8px;
                                text-align: center;
                                background-color: #f9f9f9;
                                }

                                .rate h3, .rate h4 {
                                margin: 10px 0;
                                }

                                .rate-value {
                                display: block;
                                font-size: 18px;
                                margin-top: 5px;
                                }

                                .rate-icon {
                                font-size: 30px;
                                margin-top: 10px;
                                }

                                </style>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Package Overview -->
            <div id="PackageOverview" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="packageoverviewbox">
                                <div class="row" style="margin-top:40px">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                    <ul>
                                        @foreach (explode('.', $packages->payment_policy) as $sentence)
                                            @if(trim($sentence)) <!-- Check if the sentence is not empty -->
                                                <li><h5>{{ trim($sentence) }}</h5>.</li> <!-- Add a period at the end of each sentence -->
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Includion and exclution -->
            <div id="InclusionsExclusions" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row" style="margin-top:40px">
                        <div class="col-md-12 col-sm-12">
                            <div class="packageoverviewbox">
                                <div class="row">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                    <ul>
                                        @foreach (explode('.', $packages->inclusion) as $sentence)
                                            @if(trim($sentence)) <!-- Check if the sentence is not empty -->
                                                <li><h5>{{ trim($sentence) }}</h5>.</li> <!-- Add a period at the end of each sentence -->
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Itinerary -->
            <div id="Itinerary" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row" style="margin-top:40px">
                        <div class="col-md-12 col-sm-12">
                            <div class="packageoverviewbox">
                                <div class="row">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                    <ul>
                                        @foreach (explode('.', $packages->itinerary) as $sentence)
                                            @if(trim($sentence)) <!-- Check if the sentence is not empty -->
                                                <li><h5>{{ trim($sentence) }}</h5>.</li> <!-- Add a period at the end of each sentence -->
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Paymrnt policy -->  
            <div id="PaymentPolicy" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row" style="margin-top:40px">
                        <div class="col-md-12 col-sm-12">
                            <div class="packageoverviewbox">
                                <div class="row">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                    <ul>
                                        @foreach (explode('.', $packages->payment_policy) as $sentence)
                                            @if(trim($sentence)) <!-- Check if the sentence is not empty -->
                                                <li><h5>{{ trim($sentence) }}</h5>.</li> <!-- Add a period at the end of each sentence -->
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- cancelation policy -->
            <div id="CancellationPolicy" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row" style="margin-top:40px">
                        <div class="col-md-12 col-sm-12">
                            <div class="packageoverviewbox">
                                <div class="row">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                    <ul>
                                        @foreach (explode('.', $packages->cancellation_policy) as $sentence)
                                            @if(trim($sentence)) <!-- Check if the sentence is not empty -->
                                                <li><h5>{{ trim($sentence) }}</h5>.</li> <!-- Add a period at the end of each sentence -->
                                            @endif
                                        @endforeach
                                    </ul>
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