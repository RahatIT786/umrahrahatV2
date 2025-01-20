<section style="margin-bottom:150px">
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Ramzan Package from India</h1>
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
                                        <input  wire:model.live="searchHotel" type="text" class="form-control" placeholder="No of Days" />
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
                    <h6 class="section-title text-center text-primary text-uppercase">Our Packages</h6>
                    <!-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Hotels</span></h1> -->
                </div>
                <div class="row g-4">
    
                {{--    @if ($hotelDetails->count() > 0)
                        @foreach ($hotelDetails as $hotelDetail)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset($hotelDetail->hotelMainImage)}}" style="height: 300px;width:100%" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$hotelDetail->hotelPrice}}/Night</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{ $hotelDetail->hotelName }}</h5>
                                        
                                    </div>
                                    <div class="d-flex mb-3 justify-content-between">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$hotelDetail->hotelCity}}</small>
                                        <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        @if($hotelDetail->hotelStarRating == '2')
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        @elseif($hotelDetail->hotelStarRating == '3')
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        @elseif($hotelDetail->hotelStarRating == '4')
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        @elseif($hotelDetail->hotelStarRating == '5')
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        @endif
                                    </div>
                                    <p class="text-body mb-3">{{ \Illuminate\Support\Str::limit($hotelDetail->hotelDiscription, 250, '...') }}</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('hotel-Detail',['id'=>$hotelDetail->id])}}">View Detail</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="d-flex justify-content-center align-items-center text-center" style="height: 100%;">
                            <h3>Oops! It looks like there are no hotels that match your search criteria. Please try adjusting your filters.</h3>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    <!-- Room End -->

</section>
