<section>
    <div id="popupContainerHome">
        <div id="popupForm" class="popup-form hdden">
          <div class="form-container">
            <button id="closeForm" class="close-btn" onclick="closeForm()">&times;</button>
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
                <input type="text" id="mobile" placeholder="Enter your mobile number" wire:model='qmobile' required>
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
        document.getElementById('popupContainerHome').classList.add('show');
    }, 4000); // Show the form after 3 seconds
});

// JavaScript function to close the form
function closeForm() {
    document.getElementById('popupContainerHome').classList.remove('show');
}
</script>

<!--enquire form -->
<style>
    /* Scoped Styles for #popupContainer */
  
  /* Global Container for Scoping */
  #popupContainerHome {
    position: relative;
    display: none;
          opacity: 0;
          transition: opacity 0.3s ease;
  }
  
  #popupContainerHome.show {
          display: block;
          opacity: 1;
      }
  /* Open Form Button */
  #popupContainerHome .open-form-btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  #popupContainerHome .open-form-btn:hover {
    background-color: #0056b3;
  }
  
  /* Popup Form */
  #popupContainerHome .popup-form {
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
  #popupContainerHome .hidden {
    display: none;
  }
  
  /* Form Container */
  #popupContainerHome .form-container {
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
  #popupContainerHome .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: transparent;
    border: none;
    font-size: 20px;
    cursor: pointer;
  }
  
  /* Form Title */
  #popupContainerHome .form-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
  }
  
  /* Form Group */
  #popupContainerHome .form-group {
    margin-bottom: 15px;
  }
  #popupContainerHome .form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #555;
  }
  #popupContainerHome .form-group input,
  #popupContainerHome .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
  }
  
  /* Submit Button */
  #popupContainerHome .submit-btn {
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
  #popupContainerHome .submit-btn:hover {
    background-color: #218838;
  }
  
  </style>










        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " src="{{asset('asserts/user/img/haj/mecca1.jpg')}}" alt="Image" style="height: 70vh; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Memorable and spiritually enriching Umrah pilgrimages </h1>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book A Package</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Explore Hotel</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 " src="{{asset('asserts/user/img/haj/mecca3.jpg')}}" alt="Image" style="height: 70vh;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Umrah Karein to RAHAT se</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Throughout your life you have prayed, fasted and given in charity</h1>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Quick Book</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Explore Hotel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
  <div class="container-fluid booking pb-5 wow fadeIn"  data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px; border: 2px dotted red;">
            <div class="row g-2">
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="clients-count">0</h2>
                        <h5>Clients</h5>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="success-rate">0</h2>
                        <h5>Success Rate</h5>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="rating-clients">0</h2>
                        <h5>Rating Clients</h5>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="counter">
                        <h2 style="color:#FEAF39" id="experience-years">0</h2>
                        <h5>Years of Experience</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
// Function to animate numbers
function animateNumber(id, start, end, duration, suffix = '') {
    let current = start;
    let increment = end > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / (end - start)));
    let element = document.getElementById(id);
    
    let timer = setInterval(function() {
        current += increment;
        element.textContent = current + suffix;
        
        if (current === end) {
            clearInterval(timer);
        }
    }, stepTime);
}



function startAnimations() {
        animateNumber('clients-count', 0, 720, 3000, 'K +');
        animateNumber('success-rate', 0, 99, 3000, '%');
        animateNumber('rating-clients', 0, 4, 3000, '.5');
        animateNumber('experience-years', 0, 17, 3000, '+');
    }

    document.addEventListener("DOMContentLoaded", function () {
        startAnimations();
    });

    Livewire.hook('message.processed', (message, component) => {
        startAnimations();  // Run again when Livewire updates
    });


</script>


        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl " id="about">
            <div class="container" >
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Rahat Group</span></h1>
                        <p class="mb-4"> Your premier partner in facilitating memorable and spiritually enriching Umrah pilgrimages. Founded in 2007, our company has established itself as a leading provider of exceptional Hajj & Umrah services, dedicated to ensuring a seamless and fulfilling experience for every pilgrim.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">35,000</h2>
                                        <p class="mb-0">Travel Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">280</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <!-- <h2 class="mb-1" data-toggle="counter-up">100 </h2> -->
                                        <h2 class="mb-1" ><span data-toggle="counter-up">720</span>k</h2>
                                        <p class="mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="https://www.rahatgroup.in/">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{asset('asserts/user/img/haj/macca.jpg')}}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{asset('asserts/user/img/haj/childmeccac.jpg')}}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{asset('asserts/user/img/haj/masque.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{asset('asserts/user/img/haj/peopelmacca.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Package Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Package</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Package </span></h1>
                </div>
                <div class="row g-4">
                  @foreach ($packages as $package )
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="row g-0">
                                <!-- Left Column: Image Section -->
                                <div class="col-lg-4 col-md-4">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{Storage::exists($package->photo_path) ? Storage::url($package->photo_path) : asset('asserts/user/img/haj/masque.jpg')}}" alt="" style="height: 20rem; width: 100%; object-fit: cover;">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">8 days</small>
                                    </div>
                                </div>

                                <!-- Right Column: Package Details -->
                                <div class="col-lg-8 col-md-8 p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{$package->package_name}}</h5>
                                        <div class="ps-2">
                                            <!-- Rating stars -->
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3" style="font-size: 12px;">
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Sharing : <span><span style="font-size: 18px;">{{$package->sharing}}</span>.AED</span>
                                        </small>
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quint :  <span><span style="font-size: 18px;">{{$package->quint}}</span>.AED</span>
                                        </small>
                                        <small class="me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Quad : <span><span style="font-size: 18px;">{{$package->quad}}</span>.AED</span>
                                        </small>
                                    </div>
                                    <div class="d-flex mb-3" style="font-size: 12px;">
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Triple : <span><span style="font-size: 18px;">{{$package->triple}}</span>.AED</span>
                                        </small>
                                        <small class="border-end me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Double :  <span><span style="font-size: 18px;">{{$package->double}}</span>.AED</span>
                                        </small>
                                        <small class="me-3 pe-3">
                                            <i class="fa-solid fa-plane-departure text-primary me-2"></i>Single : <span><span style="font-size: 18px;">{{$package->single}}</span>.AED</span>
                                        </small>
                                    </div>
                                    <div>
                                        <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">06 Nights Makka , 02 Nights Madina</p>
                                    </div>

                                    <p class="text-body mb-3 text-justify">Experience a spiritual journey like never before with our  Umrah Package. Enjoy premium accommodation, exquisite catering, and seamless transport services.</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" wire:click="openBrowcher({{$package->id}})">
                                            <i class="fa-solid fa-book"></i> View Brochure
                                        </a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" wire:click="openEnquire({{$package->id}})">
                                            <i class="fa-regular fa-paper-plane"></i>  Book Enquire
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  @endforeach
                    
                </div>
            </div>
        </div>
        <!-- package End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">RAHAT GROUP</h6>
                        <h1 class="text-white mb-4">Dedicated to ensuring a seamless and fulfilling experience for every pilgrim</h1>
                        <p class="text-white mb-4">Rahat Group offers a wide range of services, including Hajj and Umrah packages, elite catering, visa processing, and travel services, providing quality and tailored experiences for its customers.</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Package</a>
                        <a href="{{route('package.download')}}" class="btn btn-light py-md-3 px-md-5">Book A Package</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">

                            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3fM0Xq9oYyA?autoplay=1"
                            id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe> -->

                                <iframe width="560" height="315" src="https://www.youtube.com/embed/3fM0Xq9oYyA?si=Orf0_BVvwKm6rsgR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


        <!-- Service Start -->
        <livewire:OurService />
        <!-- Service End -->


        <!-- Testimonial Start -->
            <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="owl-carousel testimonial-carousel py-5">
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>"The Umrah package from Rahat Group was truly exceptional. Everything was perfectly organized, from the flights to the accommodation. I felt completely at ease throughout the journey. Highly recommend!"</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person1.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Shaikh</h6>
                                    <small>Akola(Maharashtra)</small>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>"I had an unforgettable experience with Rahat Group's Umrah package. I will definitely choose them again for future trips. The guides were knowledgeable, the accommodations were comfortable, and the entire trip was stress-free."</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person2.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Ansari Hammad</h6>
                                    <small>Hailakandi(Assam)</small>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <p>"Rahat Group provided an outstanding Umrah service. Their attention to detail, friendly staff, and seamless arrangements allowed me to focus entirely on my worship. I will definitely choose them again for future trips."</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person3.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Mohammed Milkan</h6>
                                    <small>Baraily(Uttar Pradhesh)</small>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Hotels</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Hotels</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/haj/hotel1.jpg" alt="" style="height: 13rem; width: 100%;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">VOCO Makkah an IHG Hotel</h5>
                                <small> <i class="fa-solid fa-location-dot"></i>  Makkah</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/haj/hotel2.jpg" alt="" style="height: 15rem; width: auto;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Erjwaan Saada Hotel</h5>
                                <small><i class="fa-solid fa-location-dot"></i>  Madinah</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/haj/hotel3.jpg" alt="" style="height: 15rem; width: auto;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                   
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Waha Al Deafah Hotel</h5>
                                <small><i class="fa-solid fa-location-dot"></i>  Makkah</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/haj/hotel4.jpg" alt="" style="height: 15rem; width: auto;">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Burj Mawadda</h5>
                                <small><i class="fa-solid fa-location-dot"></i>  Madinah</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->
        {{-- --}}
        

{{--view-browcher-start--}}
@if ($browcherPopUp)
<!-- Overlay Background -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;z-index: 999;"></div>

<!-- Popup Content -->
<div id="browserPopup" class="shadow-lg p-3 mb-5 bg-body rounded text-center " style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: fit-content; height: fit-content; background-color: whitesmoke;  padding: 20px; z-index: 1000; transition: opacity 0.5s ease; ">
    <div class="d-flex justify-content-end" >
        <i class="bi bi-x-circle" style="cursor: pointer;" wire:click="closeBrowcher()"></i>
    </div>
    <h2 style="color: #FEA116;">Brochure</h2>
    <div>
        <img src="{{Storage::url($browcherData->flyer_path)}}" alt="Browcher Image" style="max-height:50rem; width:50vw; max-width:35em;" class="img-fluid">
    </div>

   <div style="margin: 3rem auto">
   <a href="tel:+971567866713" style="font-family: sans-serif; text-decoration: none; padding:9px 15px; border:1px solid #bc8c1d; border-radius: 5px;"> <i class="bi bi-telephone-fill"></i>&nbsp; click to call</a>
   </div>
   
   
</div>
@endif

{{--view-browcher-end--}}



{{--view-enquire-start--}}
@if ($enquirePopUp)
<!-- Overlay Background -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;z-index: 999;"></div>

<!-- Popup Content -->
<div id="browserPopup" class="shadow-lg p-3 mb-5 bg-body rounded text-center " style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: fit-content; height: fit-content; background-color: whitesmoke;  padding: 20px; z-index: 1000; transition: opacity 0.5s ease; ">
    <div class="d-flex justify-content-end" >
        <i class="bi bi-x-circle" style="cursor: pointer;" wire:click="closeEnquire()"></i>
    </div>
    <form action="post" wire:submit.prevent="packageEnquirySubmitForm">
    <h2 style="color: #FEA116;">Enquire</h2>
    <div class="m-3">
        <span>Choosed Package : <h4 style="color: #0F172B; text-transform:uppercase;" >{{$enquireData->package_name}}</h4> </span>

    </div>
    <div class="m-3">
       <input class="form-control" type="text" placeholder="Enter your name" wire:model="customerName" required>
    </div>
    <div  class="m-3">
        <input class="form-control" type="tel" placeholder="Enter your number"  wire:model="mobile" required>
     </div>
     <div  class="m-3 text-start">
        <label for="query" >Enter your Query</label>
        <textarea  class="form-control" name="" id="query" oninput="updateCharCount()" cols="30" rows="10" maxlength="100" placeholder="Enter your Query" wire:model="query">

        </textarea>
        
     </div>
     <p>Note: <span>our team will contact you</span></p>
     <div>
       <button type="submit" style="background: transparent; border:none;"> <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" >SUBMIT</a></button>
     </div>

   <div style="margin: 3rem auto">
   <a href="tel:+971567866713" style="font-family: sans-serif; text-decoration: none; padding:9px 15px; border:1px solid #bc8c1d; border-radius: 5px;"> <i class="bi bi-telephone-fill"></i>&nbsp; click to call</a>
   </div>
</form>
   
</div>

@endif

{{--view-enquire-end--}}




</section>
 