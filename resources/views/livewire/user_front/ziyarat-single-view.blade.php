<section class="" style="margin-bottom:100px">
    <!-- Hotel Details Start -->
    <div class=" py-5 hotel-details" id="hotel-details">
        <div class="container">
            <div class="row g-5">
                <!-- Left Section: Hotel Details, Address, and Image Gallery -->
                <div class="col-lg-9">
                    <!-- Hotel Address -->
                    <div class="mb-4 hotel-address">
                    <h3 class="mb-3 section-title text-start text-primary text-uppercase">{{$ziyaratDetails->name}}</h3>
                    <!-- <h4 class="mb-5"><span class="text-primary"><i class="fa fa-map-marker-alt"></i></span>  {{ "package name" }} </h4> -->
                    </div>
                    <div class="container-fluid p-0 mb-5">
                        <div class="" id="">
                            <div class="">
                               
                                    <div class="">
                                    <img  src="{{ Storage::url($this->ziyaratDetails->packageImage) }}" style="height: 35rem; width: 100%;" alt="Ziyarat  Image"> 
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Hotel Banner End -->

                    <!-- Hotel Description -->
                    <div class="mt-4">
                    <h5 style="font-size: xx-large; font-family: 'Poppins', sans-serif;">DESCRIPTION</h5>
                        <ul>
                            @foreach (explode('.', $ziyaratDetails->description) as $sentence)
                            @if(trim($sentence))
                                <li style="padding-left: 0; margin: 0;">
                                        <div class="d-flex"> 
                                        &nbsp; {{ trim($sentence) }}.
                                    </div>
                                </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Right Section: Booking Form -->
                <div class="col-lg-3" style="margin-top:70px">
                    <div class="border p-5 rounded booking-form" style="width: 450px;">
                        <h4 class="mb-4 text-uppercase">Book Your Stay</h4>
                        <form  wire:submit.prevent="packageEnquire">
                            @csrf
                                @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="package_user_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="package_user_name" placeholder="Enter your name" wire:model='package_user_name' required>
                                @error('package_user_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="package_user_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="package_user_email" placeholder="Enter your email" wire:model='package_user_email' required>
                                @error('package_user_email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="package_user_phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="package_user_phone" placeholder="Enter your phone number" wire:model='package_user_phone' required>
                                @error('package_user_phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="num-adults" class="form-label">Adults</label>
                                <input type="number" class="form-control" id="num-adults" min="1" wire:model='package_user_adult' required>
                                @error('package_user_adult') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="num-children" class="form-label">Children</label>
                                <input type="number" class="form-control" id="num-children" min="0" wire:model='package_user_child' required>
                                @error('package_user_child') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel Details End -->
    <div class="row" style="margin-bottom:250px">
    <div class="col-lg-12">
    <div class="tabs" style="width: 100%; ">
        <!-- Tab Name start here -->
        <nav role="navigation" class="transformer-tabs" id="navtabs" style="width: 100%;">
            <div class="container" style="width: 100%;">
                <div class="nav nav-tabs-package" id="nav-tab" role="tablist" style="width: 100%;">
                    <div class="nav-item-package ">
                        <a href="#Hotels" id="lnkHotels" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package active" data-bs-toggle="tab" role="tab" aria-selected="true">Hotels</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#TourCost" id="lnkTourCost" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Tour Cost</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#Itinerary" id="lnkItinerary" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Itinerary</a>
                    </div>
                    <!-- <div class="nav-item-package">
                        <a href="#PackageOverview" style="text-decoration: none;" id="lnkPackageOverview" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Package Overview</a>
                    </div> -->
                    <div class="nav-item-package">
                        <a href="#InclusionsExclusions" style="text-decoration: none;font-size:14px;font-weight:600;" id="lnkInclusionsExclusions" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Inclusions / Exclusions</a>
                    </div>
                    <div class="nav-item-package">
                        <a href="#PaymentPolicy" style="text-decoration: none;font-size:14px;font-weight:600;" id="lnkPaymentPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false"> Important Notes</a>
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
   
    #navtabs {
        background-color: transparent;
        width: 100%;
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
@media (max-width: 768px) {
    .nav-tabs-package {
        flex-direction: column !important; 
        align-items: center; /* Center align tabs */
        width: 100%;
    }

    .nav-item-package {
        width: 100%; /* Make each tab full width */
        text-align: center;
        margin-bottom: 5px; /* Add spacing between tabs */
    }

    .nav-link-package {
        display: block;
        width: 100%; /* Full width for better touch interaction */
        padding: 12px 0; /* Adjust padding for better tap area */
        font-size: 14px;
    }

    .nav-link-package.active::after {
        width: 50%; /* Adjust active indicator */
        height: 3px;
    }
}

@media (max-width: 480px) {
    .nav-link-package {
        font-size: 13px; /* Slightly reduce font size for small screens */
        padding: 10px 0;
    }

    .nav-item-package {
        margin-bottom: 3px; /* Reduce spacing for very small screens */
    }

    .nav-link-package.active::after {
        width: 40%; /* Further adjust active indicator */
    }
}
.leter {
    font-family: Arial, sans-serif;
 }


</style>
        <div class="tab-content" id="nav-tabContent">
            <!-- Hotels tab content start -->
            <div id="Hotels" class="tab-pane fade show active" role="tabpanel">
                <div class="container">
                    
                    @foreach ($hotels as $hotel)
                    
                     <div class="row" style="margin-top:20px">
                            
                     <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        
                        <h3 class="mb-3 section-title text-start text-primary text-uppercase">{{$hotel['hotelCity']}} Hotel</h3>
                            <div class="room-item shadow rounded overflow-hidden"  style="height:450px">
                            <a href="{{route('hotel-Detail', ['id' => $hotel['id']])}}"><h5 class="mb-0">
                            <div class="position-relative" >
                                <img class="img-fluid" src="{{asset($hotel['hotelImage1'])}}" alt=""  style="height:380px" width="100%"> 
                                
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">{{$hotel['hotelName']}}</h5>
                                <div class="d-flex">
                                    <a href="{{$hotel['hotelYouTube']}}"> <i class="fa-brands fa-youtube" style="font-size: 30px; margin-right: 8px;color:red"></i></a>
                                    <div class="ps-3 ">
                                        @if ($hotel['hotelStarRating'] == 1)
                                            <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($hotel['hotelStarRating'] == 2)
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($hotel['hotelStarRating'] == 3)
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($hotel['hotelStarRating'] == 4)
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        @endif
                                        @if ($hotel['hotelStarRating'] == 5)
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        @endif
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            </a>
                            </div>
                     </div>
                        
                        

                    
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        
                        <h3 class="mb-3 section-title text-start text-primary text-uppercase">Hotel Details</h3>
                            <div class="room-item shadow rounded overflow-hidden">
                            <a href="{{route('hotel-Detail', ['id' => $hotel['id']])}}"><h5 class="mb-0">
                            <div class="position-relative" style="height:450px">
                                <!-- <img class="img-fluid" src="{{asset($hotel['hotelImage1'])}}" alt=""> 
                                
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small> -->
                                <h5 class="p-2">Hotel Description</h5>
                                    <ul >
                                        @foreach (explode('.', $hotel['hotelDiscription']) as $sentence)
                                            @if(trim($sentence))
                                                <li class="px-3">
                                                    <div class="d-flex leter" style="font-family: 'Poppins', sans-serif; color: #0F172B;" >
                                                        <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                                        &nbsp; <p style="font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold; color: black;">{{ trim($sentence) }}</p>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                            </div>
                            </a>
                            </div>
                        </div>
                     </div>
                    @endforeach
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
                                   
                                    @if ($ziyaratDetails->g_share_price > 0 )
                                    <div class="rate">
                                    <h3>Sharing</h3>
                                    <span class="rate-value">{{ $ziyaratDetails->g_share_price}}</span>
                                    <span class="rate-icon">
                                        <img src="{{asset('asserts/user/img/price/6_Person.png')}}" style="height:5rem">
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($ziyaratDetails->qt_share_price > 0)
                                    <div class="rate">
                                    <h3>Quint</h3>
                                    <span class="rate-value">{{$ziyaratDetails->qt_share_price}}</span>
                                    <span class="rate-icon">
                                        <img src="{{asset('asserts/user/img/price/5_Person.png')}}" style="height:5rem">
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
                                    
                                    @if ($ziyaratDetails->qd_share_price > 0)
                                    <div class="rate">
                                    <h3>Quad</h3>
                                    <span class="rate-value">{{$ziyaratDetails->qd_share_price}}</span>
                                    <span class="rate-icon">
                                    
                                        <img src="{{asset('asserts/user/img/price/4_Person.png')}}" style="height:5rem">
                                        
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
                                    
                                    @if ($ziyaratDetails->t_share_price > 0)
                                    <div class="rate">
                                    <h3>Triple</h3>
                                    <span class="rate-value">{{$ziyaratDetails->t_share_price}}</span>
                                    <span class="rate-icon">
                                        <img src="{{asset('asserts/user/img/price/3_Person.png')}}" style="height:5rem">
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($ziyaratDetails->d_share_price > 0)
                                    <div class="rate">
                                    <h3>Double</h3>
                                    <span class="rate-value">{{$ziyaratDetails->d_share_price}}</span>
                                    <span class="rate-icon">
                                        <img src="{{asset('asserts/user/img/price/2_Person.png')}}" style="height:5rem">
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
                                    
                                    @if ($ziyaratDetails->single_price > 0)
                                    <div class="rate">
                                    <h3>Single</h3>
                                    <span class="rate-value">{{$ziyaratDetails->single_price}}</span>
                                    <span class="rate-icon">        
                                    <img src="{{asset('asserts/user/img/price/1_Person.png')}}" style="height:5rem">
                                       
                                    </span> <!-- Example icon -->
                                    </div>
                                    @endif
  
                                </div>

                                <!-- <h3>Child Rates</h3> -->
                                <div class="rates-row">
                                    @if ($ziyaratDetails->child_w_b > 0)
                                    <div class="rate">
                                    <h4>Child with Bed</h4>
                                    <span class="rate-value">{{$ziyaratDetails->child_w_b}}</span>
                                    <span class="rate-icon"><i style="color:#0078C4" class="fa-solid fa-child"></i> + <i style="color:#0078C4" class="fa-solid fa-bed"></i></span> <!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($ziyaratDetails->child_wo_b > 0)
                                    <div class="rate">
                                    <h4>Child without Bed</h4>
                                    <span class="rate-value">{{$ziyaratDetails->child_wo_b}}</span>
                                    <span class="rate-icon"><i style="color:#0078C4" class="fa-solid fa-child"></i> </span><!-- Example icon -->
                                    </div>
                                    @endif

                                    @if ($ziyaratDetails->infants > 0)
                                    <div class="rate">
                                    <h4>Infant</h4>
                                    <span class="rate-value">{{$ziyaratDetails->infants}}</span>
                                    <span class="rate-icon"><i style="color:#0078C4" class="fa-solid fa-baby-carriage"></i></span> <!-- Example icon -->
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
                                        @foreach (explode('.', $ziyaratDetails->payment_policy) as $sentence)
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
                                @foreach (explode('.', $ziyaratDetails->inclusion) as $sentence)
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
                                    @foreach (explode('.', $ziyaratDetails->exclusion) as $sentence)
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
                                @foreach (explode('.', $ziyaratDetails->itinerary) as $sentence)
                                    @if(trim($sentence))
                                    <div class="timeline-container primary">
                                        <div class="timeline-icon">
                                        <i class="bi bi-check2-circle"></i> 
                                        </div>
                                        <div class="timeline-body">
                                            <!-- <h4 class="timeline-title"><span class="badge">Primary</span></h4> -->
                                            <p style="color:#0F172B">{{ trim($sentence) }}</p>
                                            <!-- <p class="timeline-subtitle">1 Hours Ago</p> -->
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
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
  /* --primary: #1d8cf8;
  --secondary: #FEA116;
  --info: #11cdef;
  --success: #00bf9a;
  --warning: #ff8d72;
  --danger: #fd5d93; */

  /* --body-bg: #1e1e2f; */
  --timeline-before-bg: #FEA116;
  --timeline-body-bg: #FEA116;
  --timeline-body-round: 3px;
  --timeline-body-shadow: 1px 3px 9px rgba(0,0,0, .1);
}


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
  background: #FEA116;
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
  background:#FEA116;
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
  background: #1d8cf8 !important;
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
                                                            <!-- Box 3 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-3">
                                <h5 style="font-size:xx-large">Cancellation Policy</h5>
                                <ul>
                                    @foreach (explode('.', $ziyaratDetails->cancellation_policy) as $sentence)
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
                                    @foreach (explode('.', $ziyaratDetails->payment_policy) as $sentence)
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
                                        @foreach (explode('.', $ziyaratDetails->cancellation_policy) as $sentence)
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