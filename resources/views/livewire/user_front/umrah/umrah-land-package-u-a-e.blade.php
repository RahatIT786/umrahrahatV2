<section style="margin-bottom:150px">
  <!---package-style-start----->
  <style>
    .package-image {
        width: 18vw;
        height: 18vw;
        max-width: 100%;
        max-height: 100%;
        aspect-ratio: 1 / 1; /* Ensures a square shape */
        border-radius: 15px;
    }

    @media (max-width: 768px) {
        .package-image {
            width: 50vw; /* Increase size for mobile */
            height: 50vw;
        }
    }

    @media (max-width: 480px) {
        .package-image {
            width: 80vw; /* Full width for smaller screens */
            height: auto; /* Maintain aspect ratio */
        }
    }
</style>
  <!---package-style-end----->






        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Umrah Land Packages From UAE</h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
        </div>
    <!-- Page Header End -->
    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <div class="bg-white shadow" style="padding: 35px;">
              <div class="row g-2">
                 {{-- <form wire:submit.prevent="searchSubmit" > --}}
                    
                    <div class="col-md-12">
                        <div class="row g-2">
                           <div class="col-md-4" >
                            <form  wire:submit.prevent="">
                                <select class="form-select" wire:model.live="departureCity ">
                                    <option value='' selected>Select Your City</option>
                                    <option value="MAKKAH">MAKKAH</option>
                                    <option value="MADINAH">MADINAH</option>
                                    <option value="BAGHDAD">BAGHDAD</option>
                                    <option value="NAJAF">NAJAF</option>
                                    <option value="KARBALA">KARBALA</option>
                                </select>
                            </form>
                           </div>
                            {{-- <form class="col-md-4" wire:submit.prevent="">
                                <select class="form-select" wire:model.live="searchRating">
                                    <option value='' selected>Star Rating</option>
                                    <option value="2">2 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="5">5 Stars</option>
                                    <option value="6">Building Accomutation Stars</option>
                                    <option value="7">Standard Hotel Stars</option>
                                </select>
                            </form> --}}
                            <div class="col-md-4">
                                <form wire:submit.prevent="" class="date" id="date2" >
                                    <input  wire:model.live="searchHotel" type="text" class="form-control" placeholder="Search Package Name" />
                                </form>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary w-100">Search Package</button>
                            </div>
                        </div>
                    </div>
                 {{-- </form> --}}
              </div>
          </div>
      </div>
  </div>
  <!-- Booking End -->


        <!-- Package Start -->
       <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Explore Our Package</h6>
                    {{-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Package </span></h1> --}}
                </div>
                <div class="row g-4">
                   
                    <!---package-start------>
                    @foreach ( $allPackages as $package  )
                   <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="row g-0">
                            <!-- Left Column: Image Section -->
                            <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center justify-content-center">
                                <div class="position-relative package-image">
                                    <img class="img-fluid" 
                                         src="{{Storage::exists($package->packageImage) ? Storage::url($package->packageImage) : asset('asserts/user/img/haj/masque.jpg')}}" 
                                         alt="" 
                                         style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$package->package_days}} days</small>
                                </div>
                            </div>

                            <!-- Right Column: Package Details -->
                            <div class="col-lg-8 col-md-8 p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                   <div>
                                    <h5 class="mb-0">{{ucfirst($package->name)}}</h5>
                                    <p class="mt-2 text-primary">{{ucfirst($package->packageType->packageType)}} Combo Pack <i class="fa-solid fa-bag-shopping" style="color: #0D1425;"></i></p>
                                    <span class="text-primary"  style="bordr: 1px solid #FEA116; cursor: pointer; color: #FEA16; font-weight:500;"><i class="fa-solid fa-download"></i> <span style="font-size: 12px;">Download Brochure</span></span>
                                   </div>
                                   @php
                                   $minPrice=min(
                                    intval($package->sharingDetails->g_share),
                                    intval($package->sharingDetails->qt_share),
                                    intval($package->sharingDetails->qd_share),
                                    intval($package->sharingDetails->t_share),
                                    intval($package->sharingDetails->d_share),
                                    intval($package->sharingDetails->single),
                                   );
                                   @endphp
                                   
                                    <div class="ps-2">
                                       <h5 style="color: gray">Start From</h5>
                                       <div class="text-end">
                                        <del class="text-danger">{{$minPrice * 1.1}}.AED</del> 
                                        <p class="text-end" style="color: black;"><span style="font-size: 22px;   font-weight: 500;">{{$minPrice }}</span>.AED <br>
                                        <span style="color: green; font-size: 11px; font-weight: 600;">YOU SAVED {{($minPrice * 1.1) - ($minPrice )}}.AED  <i class="fa-solid fa-sack-xmark"></i></span>
                                        </p> 
                                       
                                       </div>
                                      
                                    </div>
                                </div>

                                <div>
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">06 Nights Makka , 02 Nights Madina</p>
                                </div>
                                <div >
                                    <div class="mb-2" style="font-weight:500;"><span style="font-weight:500; color: #0D1425;"> <i class="fa-solid fa-bus"></i> Departure Days : </span><span >Every Wednesday</span>   </div>
                                   <div class="mb-2" style="font-weight:500;"><span style="font-weight:500; color: #0D1425;"> <i class="fa-solid fa-hotel"></i> Makka Hotel : </span><span ><span>{{ucfirst($package->packageDetail->makkaHotelDetail->hotelName) ?? 'Hotel Name Not Available'}}</span> </span>  </div>
                                   <div style="font-weight:500;"><span style="font-weight:500; color: #0D1425;"> <i class="fa-solid fa-hotel"></i> Madina Hotel : </span><span ><span>{{ucfirst($package->packageDetail->madinaHotelDetail->hotelName) ?? 'Hotel Name Not Available'}}</span> </span> </div>
                                   <div class="d-flex align-items-center  flex-md-row flex-column">
                                    {{-- @if($package->packageDetail && $package->packageDetail->hotelDetail)
                                             <p>{{ $package->packageDetail->hotelDetail->hotelName ?? 'Hotel Name Not Available' }}</p>
                                    @else
                                    <p>Hotel details not available</p>
                                    @endif --}}
                                    <div>
                                        <span style="font-weight:500; color: #0D1425;"><i class="fa-solid fa-bag-shopping"></i> What you get:</span>
                                    </div>
                                    
                                   <div class="d-flex gap-3 mt-3 mb-3 ms-3 ">
                                    
                                    <span class="d-flex flex-column justify-content-center align-items-center"><i class="fa-solid fa-bowl-food"></i> <span style="font-size: 12px;">MEALS</span></span>
                                    <span class="d-flex flex-column justify-content-center align-items-center"><i class="fa-solid fa-jug-detergent"></i> <span style="font-size: 12px;">LAUNDRY</span></span>
                                    <span class="d-flex flex-column justify-content-center align-items-center"><i class="fa-solid fa-file-shield"></i><span style="font-size: 12px;">BORDER TAX</span></span>
                                    <span class="d-flex flex-column justify-content-center align-items-center"><i class="fa-solid fa-sim-card"></i> <span style="font-size: 12px;">SAUDI SIM</span></span>
                                    <span class="d-flex flex-column justify-content-center align-items-center"><i class="fa-solid fa-bus"></i> <span style="font-size: 12px;">TRANSPORT</span></span>
                                    {{-- <span class="d-flex flex-column justify-content-center align-items-center"> <span style="font-size: 12px;"> <a >VIEW MORE <i class="fa-solid fa-arrow-right"></i></a></span></span> --}}
                                   
                                   
                                   </div>

                                  
                                    
                                   </div>
                                   <div>
                                         <div class="d-flex mb-2">
                                        <img style="height: 20px;" src="{{asset('images/googlereview.png')}}"  alt="googlereview"> 
                                        <div class="ms-2">
                                            <span>4.5</span>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <a style="color: #007bff; text-decoration: underline;"  target="_blank" href="https://www.google.com/search?q=rahat+travels&oq=rahat+travels&gs_lcrp=EgZjaHJvbWUyCQgAEEUYORiABDIGCAEQIxgnMgwIAhAAGBQYhwIYgAQyDAgDEAAYFBiHAhiABDINCAQQLhivARjHARiABDIHCAUQABiABDIGCAYQRRg8MgYIBxBFGD3SAQg0OTUxajBqNKgCALACAQ&sourceid=chrome&ie=UTF-8#lrd=0x3be7ce3cd58b13c3:0xb07729f581586b81,1,,,,">Google review</a>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                {{-- <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p> --}}
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" href="{{route('viewPackageDetails', $package->id)}}" >
                                        <i class="fa-solid fa-file-zipper"></i>  View Packages
                                    </a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" >
                                        <i class="fa-regular fa-paper-plane"></i> {{__('message.book_now')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   @endforeach
                    <!---package-end------>
                </div>
            </div>
        </div>
        <!-- package End -->

<style>
    /* Scoped Styles for #popupContainer */
  
  /* Global Container for Scoping */
  #popupContainer {
    position: relative;
    display: none;
          opacity: 0;
          transition: opacity 0.3s ease;
  }
  
  #popupContainer.show {
          display: block;
          opacity: 1;
      }
  /* Open Form Button */
  #popupContainer .open-form-btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  #popupContainer .open-form-btn:hover {
    background-color: #0056b3;
  }
  
  /* Popup Form */
  #popupContainer .popup-form {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }
  #popupContainer .hidden {
    display: none;
  }
  
  /* Form Container */
  #popupContainer .form-container {
    background: white;
    padding: 20px 30px;
    width: 100%;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    animation: fadeIn 0.3s ease;
  }
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Close Button */
  #popupContainer .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: transparent;
    border: none;
    font-size: 20px;
    cursor: pointer;
  }
  
  /* Form Title */
  #popupContainer .form-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
  }
  
  /* Form Group */
  #popupContainer .form-group {
    margin-bottom: 15px;
  }
  #popupContainer .form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #555;
  }
  #popupContainer .form-group input,
  #popupContainer .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
  }
  
  /* Submit Button */
  #popupContainer .submit-btn {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  #popupContainer .submit-btn:hover {
    background-color: #218838;
  }
  
  </style>

</section>
