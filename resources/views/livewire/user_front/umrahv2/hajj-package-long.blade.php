<section style="margin-bottom:150px">
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Hajj Package from UAE</h1>
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
                    <div class="col-md-3">
                        <button class="btn btn-primary w-100">Search Package</button>
                    </div>
                    <div class="col-md-9">
                        <div class="row g-2">
                            <form class="col-md-4"  wire:submit.prevent="">
                                <select class="form-select" wire:model.live="searchCity">
                                    <option value='' selected>City</option>
                                    <option value="MAKKAH">MAKKAH</option>
                                    <option value="MADINAH">MADINAH</option>
                                    <option value="BAGHDAD">BAGHDAD</option>
                                    <option value="NAJAF">NAJAF</option>
                                    <option value="KARBALA">KARBALA</option>
                                </select>
                            </form>
                            <form class="col-md-4" wire:submit.prevent="">
                                <select class="form-select" wire:model.live="searchRating">
                                    <option value='' selected>Star Rating</option>
                                    <option value="2">2 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="5">5 Stars</option>
                                    <option value="6">Building Accomutation Stars</option>
                                    <option value="7">Standard Hotel Stars</option>
                                </select>
                            </form>
                            <div class="col-md-4">
                                <form wire:submit.prevent="" class="date" id="date2" >
                                    <input  wire:model.live="searchHotel" type="text" class="form-control" placeholder="Search Package" />
                                </form>
                            </div>
                        </div>
                    </div>
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
                                         src="{{Storage::url($package->packageImage) ? Storage::url($package->packageImage) : asset('asserts/user/img/haj/masque.jpg')}}" 
                                         alt="" 
                                         style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$package->package_days}} days</small>
                                </div>
                            </div>

                            <!-- Right Column: Package Details -->
                            <div class="col-lg-8 col-md-8 p-4 mt-2">
                                <div class="d-flex justify-content-between mb-0">
                                   <div>
                                    <h4 class="mb-0 " style="font-weight: 600;">{{ucfirst($package->name)}}</h4>
                                    <p class="mt-2 text-primary"> <span style="color:#218838">{{ucfirst($package->packageType->packageType)}}</span> <span style=" ">  Combo Pack <i class="fa-solid fa-bag-shopping" style="color: #0D1425;"></i></span></p>
                                    <span class="text-primary"  style=" cursor: pointer; color: #FEA16; font-weight:500;"><i class="fa-solid fa-download"></i> <span style="font-size: 12px;">Download Brochure</span></span>
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
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">{{$package->makkah_nights}} Nights Makkah , {{$package->madina_nights}} Nights Madina</p>
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
    <!-- Room End -->
</section>
