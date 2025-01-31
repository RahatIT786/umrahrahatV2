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
                        <a href="#Itinerary" id="lnkItinerary" style="text-decoration: none;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Itinerary</a>
                    </div>
                    <!-- <div class="nav-item-package">
                        <a href="#PackageOverview" style="text-decoration: none;" id="lnkPackageOverview" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Package Overview</a>
                    </div> -->
                    <div class="nav-item-package">
                        <a href="#InclusionsExclusions" style="text-decoration: none;" id="lnkInclusionsExclusions" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Inclusions / Exclusions</a>
                    </div>
                    <!-- <div class="nav-item-package">
                        <a href="#Itinerary" id="lnkItinerary" style="text-decoration: none;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Itinerary</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#PaymentPolicy" id="lnkPaymentPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Payment Policy / Important Notes</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#CancellationPolicy" style="text-decoration: none;" id="lnkCancellationPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Cancellation Policy</a>
                    </div> -->
                </div>
            </div>
        </nav>
        <!-- Tab Name end here -->

<style>
    .zoom-effect img {
        transition: transform 0.3s ease-in-out; /* Smooth transition for the zoom effect */
    }
    
    .zoom-effect img:hover {
        transform: scale(1.2); /* Zooms the image by 20% */
    }
   
    

    /* Ensure the entire navigation tab container takes full width */
    .transformer-tabs {
      width: 100%;  /* Set container width to 100% */
      padding: 20;   /* Remove any padding */
      /* background-color: #fff;   */
      height: 65px;
      /* border: 2px solid black; */
      background-color: none !important;
    }
    
    .nav-tabs-package {
      display: flex;              /* Display tabs in a row */
      justify-content: space-between;  /* Distribute space evenly between tabs */
      width: 100%;  /* Ensure tabs take full width */
      background-color: #fff; /* Background color for the tabs */
      padding: 0;
      border: none;
      align-items: center;
      height: 60px;
      /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
      box-shadow: rgb(113, 123, 134) 0px 20px 30px -10px;
    }

    .nav-item-package {
      flex: 1;   /* Ensure each tab item takes equal width */
      text-align: center; /* Align text inside each tab */
    }

    .nav-link-package{
      display: block;
      padding: 54px 0;
      color: #555;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-family: 'Poppins', sans-serif;  /* Ensure stylish font */
      transition: background-color 0.3s ease, color 0.3s ease;
      border: none;
      border-radius: 5px;
      text-align: center;
      height: 100%;  /* Ensure each tab item takes full height */
      width: 100%;  /* Make sure link covers the entire tab item width */
      word-wrap: break-word;  /* Ensure long words or text will wrap inside the tabs */
      white-space: normal; /* Allow wrapping of long text */
    }

    /* Active tab styling */
    .nav-link-package.active {
      color: black;
      border-radius: 5px 5px 0 0;
    }

    /* Hover effect for the tabs */
    .nav-item-package:hover .nav-link-package {
      color: black;
    }

    .nav-link-package {
    position: relative;
    padding: 10px 15px;
    color: black;
    font-weight: bold;
    height: 50px;
}

.nav-link-package.active {
    color: black;
}

.nav-link-package.active::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -5px;
    width: 50%;
    height: 5px;
    background-color: red;
    transform: translateX(-50%);
    transition: all 0.3s ease-in-out;
}


    /* Mobile view adjustments */
    @media (max-width: 768px) {
      .nav-tabs-package {
        flex-direction: column; /* Stack the tabs vertically on smaller screens */
      }

      .nav-item-package {
        width: 100%;  /* Ensure each tab item stretches across full width */
      }

      .nav-link-package {
        padding: 12px;
        font-size: 16px;
      }

      
    }
</style>
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
                        <!-- Box 1 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-1">
                                <h5 style="font-size:xx-large">INCLUSION</h5>
                                <ul style=" list-style-type: none; padding-left: 0;">
                                @foreach (explode('.', $packages->inclusion) as $sentence)
                                    @if(trim($sentence))
                                        <li style="padding-left: 0; margin: 0;">
                                            <div class="d-flex">
                                                <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                                &nbsp; {{ trim($sentence) }}
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Box 2 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-2">
                                <h5 style="font-size:xx-large">Exclusions</h5>
                                <ul>
                                    @foreach (explode('.', $packages->exclusion) as $sentence)
                                        @if(trim($sentence))
                                            <li style="padding-left: 0; margin: 0;">
                                                <div class="d-flex">
                                                    <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                                    &nbsp; {{ trim($sentence) }}.
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Box 3 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-3">
                                <h5 style="font-size:xx-large">Cancellation Policy</h5>
                                <ul>
                                    @foreach (explode('.', $packages->cancellation_policy) as $sentence)
                                        @if(trim($sentence))
                                            <li style="padding-left: 0; margin: 0;">
                                                <div class="d-flex">
                                                    <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                                    &nbsp; {{ trim($sentence) }}.
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Box 4 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-4">
                            <h5 style="font-size:xx-large">Payment Policy</h5>
                                <ul>
                                    @foreach (explode('.', $packages->payment_policy) as $sentence)
                                        @if(trim($sentence))
                                            <li style="padding-left: 0; margin: 0;">
                                                <div class="d-flex">
                                                    <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                                    &nbsp; {{ trim($sentence) }}.
                                                </div>
                                            </li>
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
<style>

ul {
    list-style-type: none;
    padding-left: 0; /* Remove default left padding */
}

li {
    padding: 5px 0; /* Reduce space between list items */
    margin: 0;
    display: flex; /* Align items horizontally */
    align-items: center; /* Vertically center items */
}

.circle-wrapper {
    width: 30px; /* Adjust circle size */
    height: 30px; /* Adjust circle size */
    margin-right: 10px; /* Space between the circle and the text */
    position: relative;
}

.icon {
    position: absolute;
    color: #fff;
    font-size: 18px; /* Adjust icon size */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.circle {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    padding: 2.5px;
    background-clip: content-box;
    animation: spin 10s linear infinite;
}

.circle-wrapper:active .circle {
    animation: spin 2s linear infinite;
}

.success {
    background-color: #4BB543;
    border: 2.5px dashed #4BB543;
}

@keyframes spin { 
    100% { 
        transform: rotateZ(360deg);
    }
}


/* .page-wrapper {
  height: 100vh;
  background-color: #eee;
  display: flex;
  align-items: center;
  justify-content: center;
} */
        /* General box styling */
.box {
    background-color: #fff; /* White background for the boxes */
    padding: 20px;
    border-radius: 8px; /* Rounded corners */
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; /* Box shadow */
    transition: transform 0.3s ease; /* Smooth transition for hover effect */
}

/* Hover effect to make the box lift */
.box:hover {
    transform: translateY(-5px); /* Slight lift on hover */
}

/* Adjust spacing for each box in a row */
.col-md-3 {
    display: flex;
    justify-content: center; /* Align boxes in the center */
}

/* Optional: Add some padding to the entire section */
.packageoverviewbox {
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 10px;
}

/* List styling inside the boxes */
.box ul {
    padding-left: 20px;
}

.box li {
    margin-bottom: 3px;
}

/* Style the headers inside each box */
.box h5 {
    color: #333; /* Dark color for header */
    font-size: 16px;
    font-weight: 500;
}

/* Ensure boxes are aligned in a row */
.row {
    display: flex;
    flex-wrap: wrap; /* Wrap the boxes on smaller screens */
}

.col-md-3, .col-sm-6 {
    padding: 10px; /* Space between boxes */
}

@media (max-width: 767px) {
    .col-md-3 {
        width: 100%; /* On small screens, make boxes full width */
    }
}

    </style>
</div>



            <!-- Itinerary -->
            <div id="Itinerary" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                    <div class="row" style="margin-top:40px">

                        <!-- itenary -->
                        <div class="container">
                            <div class="timeline">
                                @foreach (explode('.', $packages->itinerary) as $sentence)
                                    @if(trim($sentence))
                                    <div class="timeline-container primary">
                                        <div class="timeline-icon">
                                            <i class="far fa-grin-wink"></i>
                                        </div>
                                        <div class="timeline-body">
                                            <!-- <h4 class="timeline-title"><span class="badge">Primary</span></h4> -->
                                            <p>{{ trim($sentence) }}</p>
                                            <!-- <p class="timeline-subtitle">1 Hours Ago</p> -->
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                <!-- <div class="timeline-container primary">
                                    <div class="timeline-icon">
                                        <i class="far fa-grin-wink"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="timeline-title"><span class="badge">Primary</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.</p>
                                        <p class="timeline-subtitle">1 Hours Ago</p>
                                    </div>
                                </div>
                                <div class="timeline-container danger">
                                    <div class="timeline-icon">
                                        <i class="far fa-grin-hearts"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="timeline-title"><span class="badge">Danger</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.</p>
                                        <p class="timeline-subtitle">2 Hours Ago</p>
                                    </div>
                                </div>
                                <div class="timeline-container success">
                                    <div class="timeline-icon">
                                        <i class="far fa-grin-tears"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="timeline-title"><span class="badge">Success</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.</p>
                                        <p class="timeline-subtitle">6 Hours Ago</p>
                                    </div>
                                </div>
                                <div class="timeline-container warning">
                                    <div class="timeline-icon">
                                        <i class="far fa-grimace"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="timeline-title"><span class="badge">Warning</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.</p>
                                        <p class="timeline-subtitle">1 Day Ago</p>
                                    </div>
                                </div>
                                <div class="timeline-container">
                                    <div class="timeline-icon">
                                        <i class="far fa-grin-beam-sweat"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="timeline-title"><span class="badge">Secondary</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.</p>
                                        <p class="timeline-subtitle">3 Days Ago</p>
                                    </div>
                                </div>
                                <div class="timeline-container info">
                                    <div class="timeline-icon">
                                        <i class="far fa-grin"></i>
                                    </div>
                                    <div class="timeline-body">
                                        <h4 class="timeline-title"><span class="badge">Info</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam necessitatibus numquam earum ipsa fugiat veniam suscipit, officiis repudiandae, eum recusandae neque dignissimos. Cum fugit laboriosam culpa, repellendus esse commodi deserunt.</p>
                                        <p class="timeline-subtitle">4 Days Ago</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
        <!-- itenaru -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Niramit:300,300i,700');

/* Global styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Colors */
:root {
  --primary: #1d8cf8;
  --secondary: #4f537b;
  --info: #11cdef;
  --success: #00bf9a;
  --warning: #ff8d72;
  --danger: #fd5d93;

  /* --body-bg: #1e1e2f; */
  --timeline-before-bg: #222a42;
  --timeline-body-bg: #27293d;
  --timeline-body-round: 3px;
  --timeline-body-shadow: 1px 3px 9px rgba(0,0,0, .1);
}

/* body {
  font-family: 'K2D', sans-serif;
  background: var(--body-bg);
  letter-spacing: 1px;
} */

/* Page container */
/* .container {
  max-width: 650px;
  margin: 50px auto;
} */

/* Typography */
/* p {
  font-weight: 300;
  line-height: 1.5;
  font-size: 14px;
  opacity: .8;
} */

/* Timeline style */
.timeline {
  position: relative;
  padding-left: 4rem;
  margin: 0 0 0 30px;
  color: white;
}

.timeline::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 4px;
  height: 100%;
  background: var(--timeline-body-bg);
}

.timeline-container {
  position: relative;
  margin-bottom: 2.5rem;
}

.timeline-icon {
  position: absolute;
  left: -88px;
  top: 4px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  text-align: center;
  font-size: 2rem;
  background: var(--secondary);
}

.timeline-icon i {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.timeline-icon img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.timeline-body {
  background: var(--timeline-body-bg);
  border-radius: var(--timeline-body-round);
  padding: 20px 20px 15px;
  box-shadow: var(--timeline-body-shadow);
}

.timeline-body::before {
  content: '';
  background: inherit;
  width: 20px;
  height: 20px;
  display: block;
  position: absolute;
  left: -10px;
  transform: rotate(45deg);
  border-radius: 0 0 0 2px;
}

.timeline-title {
  margin-bottom: 1.4rem;
}

.timeline-title .badge {
  background: var(--secondary);
  padding: 4px 8px;
  border-radius: 3px;
  font-size: 12px;
  font-weight: bold;
}

.timeline-subtitle {
  font-weight: 300;
  font-style: italic;
  opacity: .4;
  margin-top: 16px;
  font-size: 11px;
}

/* Primary Timeline */
.primary .badge,
.primary .timeline-icon {
  background: var(--primary) !important;
}

/* Info Timeline */
.info .badge,
.info .timeline-icon {
  background: var(--info) !important;
}

/* Success Timeline */
.success .badge,
.success .timeline-icon {
  background: var(--success) !important;
}

/* Warning Timeline */
.warning .badge,
.warning .timeline-icon {
  background: var(--warning) !important;
}

/* Danger Timeline */
.danger .badge,
.danger .timeline-icon {
  background: var(--danger) !important;
}

.author {
  font-family: inherit;
  padding: 3em;
  text-align: center;
  width: 100%;
  color: white;
}

.author a:link,
.author a:visited {
  color: white;
}

/* .author a:hover {
  text-decoration: none;
} */

/* .btn:link,
.btn:visited {
  margin-top: 1em;
  text-decoration: none;
  display: inline-block;
  font-family: inherit;
  font-weight: 100;
  color: white;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: black;
  padding: 1.5em 2rem;
  border-radius: 1em;
  transition: .5s all;
} */

/* .btn:hover,
.btn:focus,
.btn:active {
  background-color: lighten(black, 10%);
} */

</style>
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