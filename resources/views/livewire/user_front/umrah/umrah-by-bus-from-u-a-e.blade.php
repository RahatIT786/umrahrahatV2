<section style="margin-bottom:150px">
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Umrah By Bus From UAE</h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
        </div>
    <!-- Page Header End -->
    <!-- Booking Start -->
   {{-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <div class="row g-2 d-flex justify-content-evenly">
                    <!-- First box: Dummy text -->
                    <!-- <div class="col-md-3">
                        <input type="text" class="form-control" value="Search Package" readonly />
                    </div> -->

                    <!-- Second box: City selection -->
                    <form class="col-md-3"  wire:submit.prevent="">
                        <select class="form-select" wire:model.live="searchCity" >
                            <option value="" selected disabled>Select City</option>
                            @foreach($departCities as $city)
                                @foreach ($allCities as $cities)
                                    @if ($city == $cities->id)
                                    <option value="{{ $city }}">{{$cities->CityName}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </form>

                    <!-- Third box: Days selection -->
                    <form class="col-md-3" wire:submit.prevent="">
                        <select class="form-select" wire:model.live="searchDays">
                            <option value="" selected disabled>Select Days</option>
                            @foreach($packageDays as $days)
                                <option value="{{ $days }}">{{ $days }} Days</option>
                            @endforeach
                        </select>
                    </form>

                    <!-- Search Button -->
                    <div class="col-md-3">
                        <button class="btn btn-primary w-100">Search Package</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        <!-- Booking End -->


        <!-- Package Start -->
       <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Explore Our Package</h6>
                    {{-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Package </span></h1> --}}
                </div>
                <div class="row g-4">
                   
                    @foreach ($allPackages as $package )
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{  Storage::url($package->packageImage)}}" alt="" style="height: 15rem; width:100%;">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$package->package_days}} Days</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{$package->name}}</h5>
                                        <!-- <div class="ps-2 ">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div> -->
                                    </div>
                                    <div class="container">
                                        <!-- First Row -->
                                        @php
                                            // Convert the comma-separated string to an array
                                            $packageIncludes = explode(',', $package->package_includes);
                                        @endphp
                                        <div class="row">
                                            @foreach ($packageIncludes as $include)
                                                @foreach ($inclusions as $includeItem)
                                                    @if ($includeItem->id == $include)
                                                        <div class="col-md-6 mb-3">
                                                            @if ($includeItem->id == 2)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-bottle-water text-primary me-2"></i>ZamZam</small>
                                                            @elseif($includeItem->id == 3)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-bus text-primary me-2"></i>Transport</small>
                                                            @elseif($includeItem->id == 4)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-sim-card text-primary me-2"></i>Saudi Sim</small>
                                                            @elseif($includeItem->id == 5)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-luggage-cart text-primary me-2"></i>Welcome Kit</small>
                                                            @elseif($includeItem->id == 6)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-utensils text-primary me-2"></i>MEALS</small>
                                                            @elseif($includeItem->id == 7)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-person-praying text-primary me-2"></i>ZIYARAT</small>
                                                            @elseif($includeItem->id == 8)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-passport text-primary me-2"></i>VISA</small>
                                                            @elseif($includeItem->id == 9)
                                                                <small class="border-end me-3 pe-3"><i class="fa-solid fa-ticket text-primary me-2"></i>Ticket</small>
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>                            
                                    <div>
                                        <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center"> {{$package->package_days}} Days , {{$package->package_days-1}}   Nights  </p>
                                    </div>
                                    <p class="text-body mb-3 text-justify">{{ \Illuminate\Support\Str::limit($package->description, 250, '...') }}</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" href="{{route('viewPackageDetails',['package'=>$package->id])}}"> <i class="fa-solid fa-book" ></i> View Package</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" ><i class="fa-regular fa-paper-plane"  ></i> Book Enquire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

   
          
      {{-- @endif --}}
        <!---enquire form end-->
    <!-- Room End -->
</section>
