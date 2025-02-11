<section class="hotel-page" style="margin-bottom:100px">

    <!-- Hotel Details Start -->
    <div class=" py-5 hotel-details" id="hotel-details">
        <div class="container">
            <div class="row g-5">
                <!-- Left Section: Hotel Details, Address, and Image Gallery -->
                <div class="col-lg-9">
                    <!-- Hotel Address -->
                    <div class="mb-4 hotel-address">
                    <h3 class="mb-3 section-title text-start text-primary text-uppercase">Hotel Address</h3>
                    <h4 class="mb-5"><span class="text-primary"><i class="fa fa-map-marker-alt"></i></span>  {{ $hotel_detail->hotelAddress }} </h4>
                    </div>
                    <div class="container-fluid p-0 mb-5 hotel-banner">
                        <div class="custom-carousel" id="hotel-images-carousel">
                            <div class="custom-carousel-wrapper">
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{ asset($hotel_detail->hotelMainImage) }}" alt="Hotel Image">
                                </div>
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{ asset($hotel_detail->hotelImage1) }}" alt="Hotel Image">
                                </div>
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{ asset($hotel_detail->hotelImage2) }}" alt="Hotel Image">
                                </div>
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{ asset($hotel_detail->hotelImage3) }}" alt="Hotel Image">
                                </div>
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{ asset($hotel_detail->hotelImage4) }}" alt="Hotel Image">
                                </div>
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{ asset($hotel_detail->hotelImage5) }}" alt="Hotel Image">
                                </div>
                            </div>

                            <!-- Carousel Controls -->
                            <button class="custom-carousel-prev" id="prev-btn">&#10094;</button>
                            <button class="custom-carousel-next" id="next-btn">&#10095;</button>
                        </div>
                    </div>
                    <!-- Hotel Banner End -->

                    <!-- Hotel Description -->

                    <table class="table table-bordered text-center mt-3">
    <thead class="table-dark">
        <tr>
            <th>Check In</th>
            <th>Check Out</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ \Carbon\Carbon::parse($hotel_detail->hotelCheckInTime)->format('H:i') }}</td>
            <td>{{ \Carbon\Carbon::parse($hotel_detail->hotelCheckOutTime)->format('H:i') }}</td>
        </tr>
    </tbody>
</table>

        <div class="col-lg-12 d-flex justify-content-evenly">
        <div class=" distance-box">
            <div >
                <i style="font-size: 20px;" class="bi bi-geo-alt-fill"></i>
            </div>
            <div  class="content d-flex ">
                <h5 class="mx-1">Distance from City Center</h5>
                <p>{{ number_format($hotel_detail->hotelDistance, 0) }} m</p>
            </div>
        </div>
        <div class="col-lg-6">
        @if (!empty($hotel_detail->hotelYouTube))
            <div class="youtube-box">
                <div class="content d-flex">
                    <i style="color:#FF0000" class="bi bi-youtube mt-1"></i>
                    <a style="color:#0F172B" class="mx-3 " href="{{ $hotel_detail->hotelYouTube }}" target="_blank">Hotel Video Tour</a>
                </div>
            </div>
        @endif
        </div>
        </div>


<style>
    .youtube-box {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
    border: 2px solid #ddd;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
}


.youtube-box .content h5 {
    font-size: 20px;
    font-weight: bold;
    color: #2C3E50;
    margin: 0;
}

.youtube-box .content a {
    font-size: 16px;
    font-weight: bold;
    color: #FF0000;
    text-decoration: none;
    display: inline-block;
    margin-top: 5px;
}

.youtube-box .content a:hover {
    text-decoration: underline;
}

</style>
<style>
    .distance-box {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
    border: 2px solid #ddd;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
}

.distance-box .icon img {
    width: 40px;
    height: 40px;
}

.distance-box .content h5 {
    font-size: 20px;
    font-weight: bold;
    color: #2C3E50;
    margin: 0;
}

.distance-box .content p {
    font-size: 18px;
    font-weight: bold;
    color: #0D6EFD;
    margin: 0;
}

</style>


                </div>

                <style>
                    #sty{
                        font-family: 'Poppins', sans-serif;
                        font-weight: bold;
                        color: #0F172B;
                    }

                    .stylish-time {
                        font-family: 'Dancing Script', cursive;
                        font-size: 20px;
                        color: #2C3E50;
                    }
                </style>

                <!-- Right Section: Booking Form -->
                <div class="col-lg-3" style="margin-top:70px">
                           <!-- Rating Section -->
                            <div class="mb-3">
                            <h3 class="mb-3 section-title text-start text-primary text-uppercase">Rating</h3>
                            <div class="mb-5">
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
                        </div>
                    </div>

                  <!-- Price Section -->
                  <div class="mb-3">
                    <h3 class="mb-4 section-title text-start text-primary text-uppercase">Price per Night</h3>
                    <h4>{{$hotel_detail->hotelPrice}} {{$hotel_detail->currency}}</h4> <!-- You can dynamically set this value -->
                  </div>
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
                        <a href="#Hotels" id="lnkHotels" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package active" data-bs-toggle="tab" role="tab" aria-selected="true">Description</a>
                    </div>
                    <!-- <div class="nav-item-package">
                        <a href="#TourCost" id="lnkTourCost" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Contact</a>
                    </div> -->
                    <!-- <div class="nav-item-package">
                        <a href="#Itinerary" id="lnkItinerary" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Itinerary</a>
                    </div> -->
                    <!-- <div class="nav-item-package">
                        <a href="#PackageOverview" style="text-decoration: none;" id="lnkPackageOverview" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Contact</a>
                    </div> -->
                    <div class="nav-item-package">
                        <a href="#InclusionsExclusions" style="text-decoration: none;font-size:14px;font-weight:600;" id="lnkInclusionsExclusions" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Periods</a>
                    </div>
                    <!-- <div class="nav-item-package">
                        <a href="#PaymentPolicy" style="text-decoration: none;font-size:14px;font-weight:600;" id="lnkPaymentPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Getting around</a>
                    </div> -->
                     <div class="nav-item-package">
                        <a href="#Itinerary" id="lnkItinerary" style="text-decoration: none;font-size:14px;font-weight:600;" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Map</a>
                    </div>
                    <!--<div class="nav-item-package">
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


</style>
        <div class="tab-content" id="nav-tabContent">
            <!-- Hotels tab content start -->
            <div id="Hotels" class="tab-pane fade show active" role="tabpanel">
                <div class="container">
                    <div class="row" style="margin-top:20px">
                         <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                           <div class="row" style="margin-top:40px">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                 <div class="packageoverviewbox">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 mb-3">
                                            <div class="box box-1">
                                                <h5 style="font-size:xx-large">Description</h5>
                                                <ul style=" list-style-type: none; padding-left: 0;">
                                                @foreach (explode('.', $hotel_detail->hotelDiscription) as $sentence)
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
                                            <div class="box box-1 my-3">
                                                <h5 style="font-size:xx-large">Hotel Manager Contact</h5>
                                                <ul style=" list-style-type: none; padding-left: 0;">
                                                @foreach (explode('.', $hotel_detail->hotelManagerContect) as $sentence)
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
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Package Overview tab content end -->
            <div id="TourCost" class="tab-pane fade show" role="tabpanel">
                <div class="container">
                <div class="row" style="margin-top:20px">
                         <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                           <div class="row" style="margin-top:40px">
                                <!-- <h3 class="mb-3 section-title text-start text-primary text-uppercase">Package Overview</h3> -->
                                 <div class="packageoverviewbox">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 mb-3">
                                            <div class="box box-1">
                                                <h5 style="font-size:xx-large">Hotel Manager Contact</h5>
                                                <ul style=" list-style-type: none; padding-left: 0;">
                                                @foreach (explode('.', $hotel_detail->hotelDiscription) as $sentence)
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
                                    </div>
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
                                <div class="col-md-12 col-sm-12 mb-3">
                                            <div class="box box-1">
                                                <h5 style="font-size:xx-large">Hotel Manager Contact</h5>
                                                <ul style=" list-style-type: none; padding-left: 0;">
                                                @foreach (explode('.', $hotel_detail->hotelManagerContect) as $sentence)
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

                                @foreach ($hotelCostDatas as $hotelCost)

                                 <div class="container my-2">
                                    <div class="period-label py-3 px-3">
                                        <img class="halal_label" src="{{asset('asserts/user/img/halal.png')}}" alt="">
                                    <section >
                                        <div class="text-center d-flex align-items-center justify-content-between ">
                                            <div id="p-date" ><i class="fa-solid fa-calendar-days"></i> <span>{{ \Carbon\Carbon::parse($hotelCost['hotelSeasonStart'])->format('d M Y') }}</span> &nbsp; <i class="fa-solid fa-arrow-left"></i> &nbsp; To &nbsp; <i class="fa-solid fa-arrow-right"></i>&nbsp;<span>{{ \Carbon\Carbon::parse($hotelCost['hotelSeasonEnd'])->format('d M Y') }}</span></div >
                                            <div class="meal"><span>Meal Type </span> <span class="p-meal">{{$hotelCost['hotelMeal']}}</span></div>
                                        </div>
                                            <div class="period-price">
                                                <span class="share-price">
                                                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                        <img src="{{asset('asserts/user/img/price/2_Person.png')}}" style="height: 2.5rem;" alt="">
                                                        <span class="price-title">Double</span>
                                                        <span style="font-size:20px" class="price">{{$hotelCost['hotelDouble']}}</span>
                                                    </div>

                                                </span>
                                                <span  class="share-price">
                                                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                        <img src="{{asset('asserts/user/img/price/3_Person.png')}}" style="height: 2.5rem;" alt="">
                                                        <span class="price-title">Triple</span>
                                                        <span style="font-size:20px" class="price">{{$hotelCost['hotelTriple']}}</span>
                                                    </div>
                                                </span>
                                                <span  class="share-price">
                                                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                        <img src="{{asset('asserts/user/img/price/4_Person.png')}}" style="height: 2.5rem;" alt="">
                                                        <span class="price-title">Quad</span>
                                                        <span style="font-size:20px" class="price">{{$hotelCost['hotelQuad']}}</span>
                                                    </div>
                                                </span>
                                            </div>
                                    </section>

                                </div>
                            </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
*{
  font-family: "Open Sans", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
  /* font-variation-settings:
    "wdth" 100; */
        }
        .period-label{
          position: relative;
            border: 1px solid rgba(0, 0, 0, 0.1);
           background-color: whitesmoke;
            border-radius: 6px;

            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;

            #p-date{
                border: 0.2px solid #ff670e;
                /* border: 1px solid #fea116; */
                padding: 4px 10px;
                border-radius: 20px;
                font-weight: 600;
            }
            .period-price{
                display: flex;
                justify-content: space-around;
                gap: 15px;
                margin: 20px auto;
            }
            .share-price{
                display: flex;
                /* flex-direction: column; */
                height: 90px;
                width: 130px;
                justify-content: center;
                align-items: center;
                /* border: 1px solid #aad15f; */
                padding: 10px;
                /* border-radius: 50px; */
                border-radius: 5px;
                cursor: pointer;
                transition: 0.1s linear;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                .price{
                    color: rgb(3, 12, 3);
                    font-weight: 700;
                }


            }
            .share-price:hover{
                    transform: scale(1.1);
                }
            .price-title{
                font-weight: 600;
                text-transform: uppercase;
                font-size: 12px;

                color: rgba(0, 0, 0, 0.6);
            }
            .meal{

                padding: 4px 10px;
                border-radius: 20px;
                font-weight: 600;
                color: white;
                text-transform: uppercase;
                font-size: 14px;
                font-weight: 800;

                background-color: rgb(4, 170, 4);
            }
            .p-meal{
                font-size: 16px;
                font-weight: 600;
            }
            .halal_label{
                position: absolute;
                right: -40px;
               bottom: -40px;
                transform: rotate(320deg);
                height: 7rem;
            }

        }

 </style>
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
                        <div class="col-md-12  " data-wow-delay="0.1s">
                            @if (!empty($hotel_detail->hotelMap))
                            <iframe class=" rounded w-100 h-100"
                            src="{{$hotel_detail->hotelMap}} "
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                            @endif
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
                                                            <!-- Box 3 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box ">
                                <h5 style="font-size:xx-large">Distance from city center: {{ number_format($hotel_detail->hotelDistance, 0) }} m</h5>
                            </div>
                        </div>

                        <!-- Box 4 -->

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
<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('.custom-carousel-item');
    const totalItems = items.length;
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const carouselWrapper = document.querySelector('.custom-carousel-wrapper');

    function showItem(index) {
        if (index >= totalItems) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalItems - 1;
        } else {
            currentIndex = index;
        }
        carouselWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevBtn.addEventListener('click', () => showItem(currentIndex - 1));
    nextBtn.addEventListener('click', () => showItem(currentIndex + 1));

    // Optional: Auto-slide every 5 seconds
    setInterval(() => {
        showItem(currentIndex + 1);
    }, 5000);
</script>
