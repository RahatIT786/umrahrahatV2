<section>
      <!-- Page Header Start -->
      <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Saudi Visa</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Rooms</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
        <!-- Page Header End -->


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

// Call animateNumber for each counter with appropriate values
window.onload = function() {
    animateNumber('clients-count', 0, 5, 3000, 'K +');  // 5K+ Clients
    animateNumber('success-rate', 0, 97, 3000, '%');    // 87% Success Rate
    animateNumber('rating-clients', 0, 4, 3000);      // 4.7 Rating Clients
    animateNumber('experience-years', 0, 20, 3000, '+'); // 20+ Years of Experience
};
</script>


        <!-- Booking End -->


        <!-- Package Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Saudi Visa</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Visa Service</span></h1>
                </div>
                <div class="row g-4">
                  @foreach ($visaDetails as $visaDetail )
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            {{-- <img class="img-fluid" src="asserts/user/img/haj/pack1.jpg" alt=""> --}}
                            <img class="img-fluid" src="{{Storage::url($visaDetail->file_path)}}" alt="" style="height: 15rem;">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"></small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">{{$visaDetail->visa_type}}</h5>
                                <div class="ps-2 ">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div>
                                <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">Processing Time  {{$visaDetail->processing_time}} Days</p>
                            </div>
                            <div>
                                <p style="border: 1px dashed #FEA116; padding:2px 4px;" class="text-center">AED . {{$visaDetail->price}}</p>
                            </div>
                            <p class="text-body mb-3 text-justify">We provide professional visa services for Saudi Arabia, including Tourist, Business, and other visa types. Count on us for efficient and reliable visa processing tailored to your needs.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" wire:click="openBrowcher({{$visaDetail->id}})"> <i class="fa-solid fa-book" ></i> View Brochure</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" wire:click="openEnquire({{$visaDetail->id}})"><i class="fa-regular fa-paper-plane" ></i>  Book Enquire</a>
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
                    
                </div>
            </div>
        </div>
        <!-- package End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"Excellent service! The team at [Your Agency Name] made the visa process for Saudi Arabia so smooth and fast. Highly recommend them for their professionalism and quick turnaround."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person1.jpg')}}" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ayesha Khan</h6>
                                <small> Business Visa Applicant</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"I was worried about getting my Saudi Tourist visa, but Rahat Group took care of everything. Their process was clear, and I received my visa on time. I’ll definitely use them again!"</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person2.jpg')}}" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ravi Patel</h6>
                                <small> Tourist Visa Applicant</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"The visa processing was quick and hassle-free. I needed a Business visa urgently, and Rahat Group's delivered exceptional service. I’m grateful for their support!"</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person3.jpg')}}" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Mohammad Ali</h6>
                                <small> Business Visa Applicant</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Newsletter Start -->
       
        <!-- Newsletter Start -->

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
{{--  --}}

{{--view-enquire-start--}}
@if ($enquirePopUp)
<!-- Overlay Background -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;z-index: 999;"></div>

<!-- Popup Content -->
<div id="browserPopup" class="shadow-lg p-3 mb-5 bg-body rounded text-center " style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: fit-content; height: fit-content; background-color: whitesmoke;  padding: 20px; z-index: 1000; transition: opacity 0.5s ease; ">
    <div class="d-flex justify-content-end" >
        <i class="bi bi-x-circle" style="cursor: pointer;" wire:click="closeEnquire()"></i>
    </div>
    <form action="post" wire:submit.prevent="uservisaEnquiry">
    <h2 style="color: #FEA116;">Enquire</h2>
    <div class="m-3">
        <span>Choosed Visa : <h4 style="color: #0F172B; text-transform:uppercase;" >{{$enquireData->visa_type}}</h4> </span>

    </div>
    <div class="m-3">
       <input class="form-control" type="text" placeholder="Enter your name" wire:model="name" required>
    </div>
    <div  class="m-3">
        <input class="form-control" type="tel" placeholder="Enter your number"  wire:model="phone" required>
     </div>
     <div  class="m-3 text-start">
        <label for="query" >Enter your Query</label>
        <textarea  class="form-control" name="" id="query" wire:model="message"  cols="30" rows="10" maxlength="100" placeholder="Enter your Query" wire:model="query">

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