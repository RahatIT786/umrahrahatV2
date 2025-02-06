<section style="margin-bottom:110px">
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " src="{{asset('asserts/user/img/haj/mecca1.jpg')}}" alt="Image" style="height: 30vh; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                {{-- <h1 class="display-3 text-white mb-4 animated slideInDown">Why Choose Us?</h1> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <div class="bg-white shadow" style="padding: 35px;">
              <div class="row g-2">
                 {{-- <form wire:submit.prevent="searchSubmit" > --}}
               
                    
                    <div class="col-md-12">
                        <div class="row g-2">
                            <div class="col-md-8">
                                <form wire:submit.prevent="" class="date" id="date2" >
                                    <input  wire:model.live="searchPackage" type="text" class="form-control" placeholder="Search Package Name" />
                                </form>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary w-100">Search Package</button>
                            </div>
                        </div>
                    </div>
                {{-- </form>--}}
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
                   @foreach ( $ziyaratDetails as $package  )
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
                                    <!-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded mb-3 py-1 px-3 ms-4">{{$package->package_days}} days</small> -->
                                </div>
                            </div>

                            <!-- Right Column: Package Details -->
                            <div class="col-lg-8 col-md-8 p-4 mt-2">
                                <div class="d-flex justify-content-between mb-0">
                                   <div>
                                    <h4 class="mb-0 " style="font-weight: 600;"> {{ucfirst($package->name)}}</h4>
                                    <div class="d-flex my-2">
                                        <div>
                                           <p style="font-weight: bold;" class="my-1">Inclusion :</p>
                                        </div>

                                    @php
                                        $packageIncludesArray = explode(',', $package->package_includes);
                                    @endphp
                                    @foreach ($packageIncludesArray as $include)
                                    @if ($include == 2)
                                     <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                     <span style="font-size: 25px;" class="mx-2"> <i class="fa-solid fa-bottle-water"></i> </span> 
                                     <span style="font-size: 12px;">zamzam</span>
                                     </div>

                                    @elseif ($include == 3)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class=""> <i class="fa-solid fa-bus"></i></span> 
                                    <span style="font-size: 12px;">Bus</span>
                                    </div>

                                    @elseif ($include == 4)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class=""> <i class="fa-solid fa-sim-card"></i></span> 
                                    <span style="font-size: 12px;">Saudi SIM</span>
                                    </div>

                                    @elseif ($include == 5)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class=""><i class="fa-solid fa-bag-shopping"></i></span> 
                                    <span style="font-size: 12px;">Welcome Kit</span>
                                    </div>

                                    @elseif ($include == 6)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class=""><i class="fa-solid fa-bowl-food"></i></span> 
                                    <span style="font-size: 12px;">Meals</span>
                                    </div>

                                    @elseif ($include == 7)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class="mx-2"><i class="fa-solid fa-person-praying"></i></span> 
                                    <span style="font-size: 12px;">Ziyarat</span>
                                    </div>

                                    @elseif ($include == 8)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class=""> <i class="fa-brands fa-cc-visa"></i></span> 
                                    <span style="font-size: 12px;">Visa</span>
                                    </div>

                                    @elseif ($include == 9)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class=""> <i class="fa-solid fa-ticket"></i></span> 
                                    <span style="font-size: 12px;">Ticket</span>
                                    </div>

                                    @elseif ($include == 10)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class="">  <i class="fa-solid fa-jug-detergent"></i></span> 
                                    <span style="font-size: 12px;">Laundry</span>
                                    </div>

                                    @elseif ($include == 11)
                                    <div class="d-flex flex-column mx-2 justify-content-center align-items-center">
                                    <span style="font-size: 25px;" class="">  <i class="fa-solid fa-file-shield"></i></span> 
                                    <span style="font-size: 12px;">Barder Tax</span>
                                    </div>

                                    @endif

                                    @endforeach

                                    
                                    </div>
                                    <div>
                                         <p class=""> <strong>Total Days :</strong> {{$package->package_days}} Days</p>
                                    </div>
                                   </div>
                                   {{-- @php
                                   $minPrice=min(
                                    intval($package->sharingDetails->g_share),
                                    intval($package->sharingDetails->qt_share),
                                    intval($package->sharingDetails->qd_share),
                                    intval($package->sharingDetails->t_share),
                                    intval($package->sharingDetails->d_share),
                                    intval($package->sharingDetails->single),
                                   );
                                   @endphp --}}
                                   
                                    {{--<div class="ps-2">
                                       <h5 style="color: gray">Start From</h5>
                                       <div class="text-end">
                                        <del class="text-danger">{{$minPrice * 1.1}}.AED</del> 
                                        <p class="text-end" style="color: black;"><span style="font-size: 22px;   font-weight: 500;">{{$minPrice }}</span>.AED <br>
                                        <span style="color: green; font-size: 11px; font-weight: 600;">YOU SAVED {{($minPrice * 1.1) - ($minPrice )}}.AED  <i class="fa-solid fa-sack-xmark"></i></span>
                                        </p> 
                                       
                                       </div>
                                      
                                    </div>--}}
                                </div>

                               {{-- <div>
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">{{$package->makkah_nights}} Nights Makkah , {{$package->madina_nights}} Nights Madina</p>
                                </div >--}}
                       
                               
                                
                                {{-- <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p> --}}

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
</section>
 
