<section style="margin-bottom:150px">
        <!-- Page Header Start -->
        <div class="container-fluid p-0 mb-5 hotel-banner">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item imgZoom active">
                    <img class="w-100" style="height: 15vw;" src="{{ asset('newImg/bannerImage/hotelbanner2.jpg') }}" alt="Image" style="object-position: bottom;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            {{-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Hotels</h1> --}}
                        </div>
                    </div>
                </div>
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
                            <button class="btn btn-primary w-100">Search Hotels</button>
                        </div>
                        <div class="col-md-9">
                            <div class="row g-2">
                                <form class="col-md-4"  wire:submit.prevent="">
                                    <select class="form-select" wire:model.live="searchCity">
                                        <option value='' selected>City</option>
                                        @foreach ($hotelCities as $hotelcity)
                                            <option value="{{$hotelcity->hotel_city}}">{{$hotelcity->hotel_city}}</option>
                                        @endforeach
                                    </select>
                                </form>
                                <form class="col-md-4" wire:submit.prevent="">
                                    <select class="form-select" wire:model.live="searchRating">
                                        <option value='' selected>Star Rating</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
                                        <option value="6">Building Accomutation</option>
                                        <option value="7">Standard Hotel </option>
                                    </select>
                                </form>
                                <div class="col-md-4">
                                    <form wire:submit.prevent="" class="date" id="date2" >
                                        <input  wire:model.live="searchHotel" type="text" class="form-control" placeholder="Hotel Name" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
    <!-- Room Start -->
        <div class=" py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h6 class="section-title text-center text-primary text-uppercase">Our Hotels</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Hotels</span></h1> -->
                </div>
                <div class="row g-4">
    
                    @if ($hotelDetails->count() > 0)
                        @foreach ($hotelDetails as $hotelDetail)
                        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="row g-0">
                                    <!-- Left Column: Image Section (col-4) -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="position-relative mb-3">
                                            <img class="img-fluid" src="{{ asset($hotelDetail->hotelMainImage) }}" style="height: 300px; width: 100%; object-fit: cover;" alt="">
                                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{ $hotelDetail->hotelPrice }}/Night</small>
                                        </div>
                                    </div>

                                    <!-- Right Column: Hotel Details Section (col-8) -->
                                    <div class="col-lg-8 col-md-6 p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">{{ $hotelDetail->hotelName }}</h5>
                                        </div>
                                        <div class="d-flex mb-3 ">
                                            <small class="border-end me-3 pe-3">
                                               <a href="{{$hotelDetail->hotelMap}}"></a> <i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $hotelDetail->hotelCity }}
                                            </small>
                                            <small class="border-end me-3 pe-3">
                                                <i class="fa fa-wifi text-primary me-2"></i>
                                            </small>
                                            <small  class="border-end me-3 pe-3">
                                              <a href="{{$hotelDetail->hotelYouTube}}"> <i style="font-size: 20px;color:red" class="fa-brands fa-youtube"></i></a> 
                                            </small>
                                            <!-- Star Rating -->
                                            @php
                                                $stars = intval($hotelDetail->hotelStarRating);  // Convert the string to an integer
                                            @endphp
                                            <div>
                                            @if ($stars == 7)
                                                <p>Standard Hotel</p>
                                            @else
                                                @for ($i = 0; $i < $stars; $i++)
                                                    <small class="fa fa-star text-primary"></small>
                                                @endfor
                                            @endif

                                            </div>
                                        </div>
                                        <p class="text-body mb-3">{{ \Illuminate\Support\Str::limit($hotelDetail->hotelDiscription, 250, '...') }}</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('hotel-Detail', ['id' => $hotelDetail->id]) }}">View Detail</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    @else
                        <div class="d-flex justify-content-center align-items-center text-center" style="height: 100%;">
                            <h3>Oops! It looks like there are no hotels that match your search criteria. Please try adjusting your filters.</h3>
                        </div>
                    @endif
                </div>
                @if(count($hotelDetails) >= $limit)
                    <div class="text-center mt-3">
                        <button class="btn btn-primary" wire:click="loadMore">Load More</button>
                    </div>
                @endif
            </div>
        </div>
    <!-- Room End -->

</section>
