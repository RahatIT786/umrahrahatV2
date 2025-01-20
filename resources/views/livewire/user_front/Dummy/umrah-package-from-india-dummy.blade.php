<section style="margin-bottom:150px">
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Umrah Package from India</h1>
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
                                <form class="col-md-4" wire:submit.prevent="">
                                    <select class="form-select" wire:model.live="filtermodel">
                                        <option value='0' selected disabled>select option</option>
                                        <option value="1">search by City</option>
                                        <option value="2">search by Days</option>
                                        {{-- <option value="2">2 Stars</option>
                                        <option value="3">3 Stars</option>
                                        <option value="4">4 Stars</option>
                                        <option value="5">5 Stars</option>
                                        <option value="6">Building Accomutation Stars</option>
                                        <option value="7">Standard Hotel Stars</option> --}}
                                    </select>
                                </form>
                               @if ($bycity)
                               <form class="col-md-4"  wire:submit.prevent="">
                                <select class="form-select" wire:model.live="searchByCity">
                                    {{-- <option value='' selected>City</option>
                                    <option value="MAKKAH">MAKKAH</option>
                                    <option value="MADINAH">MADINAH</option>
                                    <option value="BAGHDAD">BAGHDAD</option>
                                    <option value="NAJAF">NAJAF</option>
                                    <option value="KARBALA">KARBALA</option> --}}
                                    <option value="" selected disabled>select city</option>
                                    @foreach ($cities as $ct)
                                        <option value="{{$ct}}" >{{ucfirst($ct)}}</option>
                                    @endforeach
                                </select>
                            </form>
                                   
                               @endif

                               @if ($bydays)
                               <form class="col-md-4"  wire:submit.prevent="">
                                <select class="form-select" wire:model.live="searchByDays">
                                   
                                    <option value="" selected disabled>select Days</option>
                                    @foreach ($days as $day)
                                        <option value="{{$day}}" >{{ucfirst($day)}}</option>
                                        
                                    @endforeach
                                </select>
                            </form>
                                   
                               @endif
                               
                                {{-- <div class="col-md-4">
                                    <form wire:submit.prevent="" class="date" id="date2" >
                                        <input  wire:model.live="searchHotel" type="text" class="form-control" placeholder="No of Days" />
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
    <!-- Room Start -->
      {{--  <div class=" py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Packages</h6>
                    <!-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Hotels</span></h1> -->
                </div>
                <div class="row g-4" >
                    <h1>Umrah Packages</h1>
                    @foreach ($dummyarray as $city => $packages)
                        <h2>{{ ucfirst($city) }} Packages</h2>
                        @foreach ($packages as $type => $package)
                            <div>
                                <h3>{{ ucfirst($package['name']) }} Package</h3>
                                <p><strong>City:</strong> {{ ucfirst($package['city']) }}</p>
                                <p><strong>Days:</strong> {{ $package['days'] }}</p>
                                <p><strong>Airline:</strong> {{ $package['airline'] }}</p>  
                                @if (!empty($package['sharing']))
                                    <p><strong>Sharing Price:</strong> ${{ number_format($package['sharing'], 2) }}</p>
                                @endif
                                <p><strong>Quad Price:</strong> {{ $package['quad'] }}</p>
                                <p><strong>Triple Price:</strong> {{ $package['triple'] }}</p>
                                <p><strong>Double Price:</strong> {{ $package['double'] }}</p>
                                <p><strong>Single Price:</strong> {{ $package['single'] }}</p>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div> --}}

        <!-- Package Start -->
       <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Explore Our Package</h6>
                    {{-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Package </span></h1> --}}
                   @if ($searchByCity)
                   <h1 class="mb-5">Package Departure From <span class="text-primary text-uppercase">{{$title}} </span></h1>
                       
                 
                   @elseif($searchByDays)
                   <h1 class="mb-5"> <span class="text-primary text-uppercase">{{$title}} </span> Umrah Package</h1>
                    
                   @else
                   <h1 class="mb-5">Package Departure From <span class="text-primary text-uppercase">Mumbai </span></h1> 
                    
                   @endif
                 
                </div>
                <div class="row g-4">
                @foreach ($dummyarray as $city => $packages)
                   
                    @foreach ($packages as $package )
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset($package['image']) }}" alt="" style="height: 15rem; width:100%;">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$package['days']}} Days</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{$package['name']}}</h5>
                                        <div class="ps-2 ">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <!-- First Row -->
                                        <div class="d-flex mb-3" style="font-size: 12px;">
                                        @if (!empty($package['sharing']))
                                                <div class="col flex-fill">
                                                    <small class="border-end me-3 pe-3">
                                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Sharing : <span><span style="font-size: 15px;">&#8377;{{ $package['sharing'] }}</span></span>
                                                    </small>
                                                </div>
                                            @endif

                                            @if (!empty($package['quint']))
                                                <div class="col flex-fill">
                                                    <small class="border-end me-3 pe-3">
                                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quint : <span><span style="font-size: 15px;">&#8377;{{ $package['quint'] }}</span></span>
                                                    </small>
                                                </div>
                                            @endif
    
                                        </div>

                                        <!-- Second Row -->
                                        <div class="d-flex mb-3" style="font-size: 12px;">
                                        @if (!empty($package['quad']))
                                                <div class="col flex-fill">
                                                    <small class="me-3 pe-3">
                                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quad : <span><span style="font-size: 15px;">&#8377;{{ $package['quad'] }}</span></span>
                                                    </small>
                                                </div>
                                            @endif

                                            @if (!empty($package['double']))
                                                <div class="col flex-fill">
                                                    <small class="border-end me-3 pe-3">
                                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Double : <span><span style="font-size: 15px;">&#8377;{{ $package['double'] }}</span></span>
                                                    </small>
                                                </div>
                                            @endif

                                        </div>

                                        <!-- Third Row -->
                                        <div class="d-flex mb-3" style="font-size: 12px;">
                                        @if (!empty($package['triple']))
                                                <div class="col flex-fill">
                                                    <small class="border-end me-3 pe-3">
                                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Triple : <span><span style="font-size: 15px;">&#8377;{{ $package['triple'] }}</span></span>
                                                    </small>
                                                </div>
                                            @endif

                                            @if (!empty($package['single']))
                                                <div class="col flex-fill">
                                                    <small class="me-3 pe-3">
                                                        <i class="fa-solid fa-plane-departure text-primary me-2"></i>Single : <span><span style="font-size: 15px;">&#8377;{{ $package['single'] }}</span></span>
                                                    </small>
                                                </div>
                                            @endif

                                        </div>
                                    </div>                            
                                    <div>
                                        <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">{{$package['days']}} Days ,    {{$package['days'] - 1}}  Nights  </p>
                                    </div>
                                


                                    <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p>

                                </div>
                            </div>
                        </div>
                  @endforeach
                @endforeach
                </div>
            </div>
        </div>
        <!-- package End -->
    <!-- Room End -->

</section>
