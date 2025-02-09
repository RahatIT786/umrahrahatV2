<section class="hotel-page" style="margin-bottom:100px">
    <!-- Hotel Banner Start -->
    <!-- <div class="container-fluid p-0 mb-5 hotel-banner">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height: 30rem;" class="w-100" src="{{ asset('asserts/user/img/haj/mecca1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hotel Banner End -->

    <!-- Hotel Details Start -->
    <div class=" py-5 hotel-details" id="hotel-details">
        <div class="container">
            <div class="row g-5">
                <!-- Left Section: Hotel Details, Address, and Image Gallery -->
                <div class="col-lg-9">
                    <!-- Hotel Address -->
                    <div class="mb-4 hotel-address">
                    <h3 class="mb-3 section-title text-start text-primary text-uppercase"><i class="bi bi-bus-front-fill"></i> <span style="color:black"> {{ $transportDetail->cartypemaster->car_type}}</span> </h3>
                    <h4 class="mb-5"><span class="text-primary"><i class="fa fa-map-marker-alt"></i></span> {{ $transportDetail->carsectormaster->car_sector}}</h4>
                    </div>
                    <div class="container-fluid p-0 mb-5 hotel-banner">
                        <div class="custom-carousel" id="hotel-images-carousel">
                            <div class="custom-carousel-wrapper">
                                <div class="custom-carousel-item">
                                    <img class="w-100" src="{{Storage::url($transportDetail->cartypemaster->carImagePath)}}" style="height:100%;width:100%" alt="Car Image">
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Booking Form -->
                <div class="col-lg-3" style="margin-top:70px">
                            
                            <!-- Price Section -->
                            <div class="mb-3">
                             <h3 class="mb-4 section-title text-start text-primary text-uppercase ">Price </h3>
                             <div class="d-flex">
                                <h4>{{$transportDetail->price}}</h4> <!-- You can dynamically set this value -->
                                @if ($transportDetail->currency == 'AED')
                                    <h4 class="mx-4">﷼</h4>
                                @elseif ($transportDetail->currency == 'INR')
                                    <h4 class="mx-4">INR</h4>
                                @endif
                             </div>
                            </div>
                    <div class="border p-5 rounded booking-form" style="width: 450px;">
                        <h4 class="mb-4 text-uppercase">Book Your Car</h4>
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
                    <div class="nav-item-package">
                        <a href="#PackageOverview" style="text-decoration: none;" id="lnkPackageOverview" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Terms And Conditions</a>
                    </div>
                    <!-- <div class="nav-item-package">
                        <a href="#InclusionsExclusions" style="text-decoration: none;font-size:14px;font-weight:600;" id="lnkInclusionsExclusions" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Check-in/Check-out</a>
                    </div> -->
                    <!-- <div class="nav-item-package">
                        <a href="#PaymentPolicy" style="text-decoration: none;font-size:14px;font-weight:600;" id="lnkPaymentPolicy" class="nav-link-package" data-bs-toggle="tab" role="tab" aria-selected="false">Getting around</a>
                    </div> -->
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
                                              @foreach (explode('.', $transportDetail->discription) as $sentence)
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
                                                <h5 style="font-size:xx-large">Terms And Conditions</h5>
                                                <ul style=" list-style-type: none; padding-left: 0;">
                                                
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
                                                <h5 style="font-size:xx-large">Terms And Conditions</h5>
                                                <ul style=" list-style-type: none; padding-left: 0;">
                                                @foreach (explode('.', $transportDetail->termsAndConditision) as $sentence)
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
                        <!-- Box 1 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-1">
                                <h5 style="font-size:xx-large">Check In</h5>
                              
                              {{--   <li style="padding-left: 0; margin: 0;">
                                    <div class="d-flex">
                                        <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                     &nbsp; {{ \Carbon\Carbon::parse($hotel_detail->hotelCheckInTime)->format('H:i') }}
                                    </div>
                                 </li>--}}
                          
                            </div>
                        </div>
                        
                        <!-- Box 2 -->
                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="box box-2">
                                <h5 style="font-size:xx-large">Check Out</h5>
                             {{--   <li style="padding-left: 0; margin: 0;">
                                    <div class="d-flex">
                                        <img src="{{asset('asserts/user/img/svg/tick.svg')}}" height="25px" alt=""> 
                                     &nbsp; {{ \Carbon\Carbon::parse($hotel_detail->hotelCheckOutTime)->format('H:i') }}
                                    </div>
                                 </li>--}}
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
