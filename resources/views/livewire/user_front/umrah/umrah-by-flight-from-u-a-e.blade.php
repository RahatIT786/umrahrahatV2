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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Umrah By Flight From UAE</h1>
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
                   
                    {{-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Package </span></h1> --}}
                </div>
                <div class="row g-4">
                   
                    <!---package-start------>
                    @foreach ( $allPackages as $package  )
                   <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div style="height: 20rem;" class="row">
                            <!-- Left Column: Image Section -->
                            <div style="height: 300px;" class="col-lg-4 col-md-4 col-12 d-flex align-items-center justify-content-center">
                                <div class=" ">
                                    <img class="" 
                                         src="{{Storage::url($package->packageImage) ? Storage::url($package->packageImage) : asset('asserts/user/img/haj/masque.jpg')}}" 
                                         alt="" 
                                         style="width: 100%; height: 17rem; object-fit: cover; border-radius: 15px;">
                                    <!-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded mb-3 py-1 px-3 ms-4">{{$package->package_days}} days</small> -->
                                </div>
                            </div>

                            <!-- Right Column: Package Details -->
                            <div style="height: 30rem;" class="col-lg-8 col-md-8 px-4 mt-0">
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
                                    <div class="d-flex justify-content-between">
                                         <p class=""> <strong>Total Nights :</strong> {{$package->package_days}} Nights ,</p>
                                         <p class="mx-3"> <strong> Makkah Nights:</strong> {{$package->makkah_nights}}, &nbsp; <strong> Madina Nights:</strong> {{$package->madina_nights}}</p>
                                    </div>
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
                                    <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="">
                                       
                                          <span class="mx-3"> <span style="font-weight:500; color: #0D1425;"> <i class="fa-solid fa-hotel"></i> Makkah Hotel : </span><span >{{ucfirst($package->packageDetail->makkaHotelDetail->hotelName) ?? 'Hotel Name Not Available'}}</span></span> 
                                          <span class="mx-3"> <span class="mx-3" style="font-weight:500; color: #0D1425;"> <i class="fa-solid fa-hotel"></i> Madina Hotel : </span><span >{{ucfirst($package->packageDetail->madinaHotelDetail->hotelName) ?? 'Hotel Name Not Available'}}</span></span>  
                                       
                                    </p>
                                </div >
                                  <div class="d-flex justify-content-between">
                                    <div>
                                    <div class="mb-2" style="font-weight:500;"><span style="font-weight:500; color: #0D1425;"> <i class="fa-solid fa-bus"></i> Departure Days : </span><span >Every Wednesday</span>   </div>
                                        @php
                                            $departCities = explode(',', $package->depart_city);
                                        @endphp
                                    <div class="mb-2" style="font-weight:500;">
                                        <span style="font-weight:500; color: #0D1425;"> <i class="bi bi-geo-alt-fill">
                                        </i> Departure cities :
                                        @foreach ($departCities as $city)
                                            {{ $city }} ,
                                        @endforeach
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center  flex-md-row flex-column">
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

                                    <div class="d-flex flex-column gap-3">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" href="{{route('viewPackageDetails', $package->id)}}">
                                            <i class="fa-solid fa-file-zipper"></i> View Packages
                                        </a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4">
                                            <i class="fa-regular fa-paper-plane"></i> {{__('message.book_now')}}
                                        </a>
                                    </div>

                                </div>
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



        <!--enquire form start-->
      {{-- @if ($umrahEmquire) --}}
      <div id="popupContainer">
        <div id="popupForm" class="popup-form hdden">
          <div class="form-container">
            <button id="closeForm" class="close-btn" wire:click='umrahEnquirePopupClose'>&times;</button>
            <h2 class="form-title">Quick Book</h2>
            <p class="text-center ">Feel free to submit your query</p>
            <form wire:submit.prevent="quickEnquireSumbit">
                @csrf
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
              <!-- Name -->
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter your name" wire:model='name' required>
                @error('name') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Mobile -->
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" placeholder="Enter your mobile number" wire:model='mobile' required>
                @error('mobile') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Date of Travel -->
              <div class="form-group">
                <label for="date">Date of Travel</label>
                <input type="date" id="date" wire:model='date_of_travel' required>
                @error('date_of_travel') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Total Pax -->
              <div class="form-group">
                <label for="pax">Total Pax</label>
                <input type="number" id="pax" placeholder="Enter number of travelers" wire:model='total_pax' required>
                @error('total_pax') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Travel Mode -->
              <div class="form-group">
                <label for="mode">Travel Mode</label>
                <select id="mode" wire:model='travel_type' required>
                  <option value="">Select</option>
                  <option value="Bus">By Bus</option>
                  <option value="Flight">By Flight</option>
                </select>
                @error('travel_type') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Submit Button -->
              <button type="submit" class="submit-btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
          
      
     
        <script>
// JavaScript function to show the form after a delay of 3 seconds (3000 milliseconds)
window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('popupContainer').classList.add('show');
    }, 4000); // Show the form after 3 seconds
});

// JavaScript function to close the form
function closeForm() {
    document.getElementById('popupContainer').classList.remove('show');
}
</script>

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




   
          
      {{-- @endif --}}
        <!---enquire form end-->
    <!-- Room End -->
</section>
