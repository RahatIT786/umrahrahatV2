<section class="hotel-page" style="margin-bottom:100px">
    <!-- Hotel Banner Start -->
    <div class="container-fluid p-0 mb-5 hotel-banner">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('asserts/user/img/haj/mecca1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $hotel_detail->hotelName }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel Banner End -->

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
                    <div class="mt-4">
                        <h3 class="mb-4 section-title text-start text-primary text-uppercase">About the Hotel</h3>
                        <h5 class="mb-5" style="line-height: 1.8;">{{ $hotel_detail->hotelDiscription }} </h5>
                    </div>

                    <div class="mt-4">
                        <h3 class="mb-4 section-title text-start text-primary text-uppercase">Check-in/Check-out</h3>
                         <h5 class="mb-3"><i class="fa fa-clock text-primary"></i> Check-in from: {{ \Carbon\Carbon::parse($hotel_detail->hotelCheckInTime)->format('H:i') }}</h5>
                         <h5 class="mb-5"><i class="fa fa-clock text-primary"></i> Check-out until: {{ \Carbon\Carbon::parse($hotel_detail->hotelCheckOutTime)->format('H:i') }}</h5>
                    </div>

                    <div class="mt-4">
                        <h3 class="mb-4 section-title text-start text-primary text-uppercase">Getting around</h3>
                        <h5 class="mb-3"><i class="fa fa-road text-primary"></i>  Distance from city center: {{ number_format($hotel_detail->hotelDistance, 0) }} Km</h5>
                    </div>
                </div>

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
