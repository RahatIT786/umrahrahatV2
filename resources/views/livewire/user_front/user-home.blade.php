<section>
    <style>
        .package-image {
            width: 18vw;
            height: 18vw;
            max-width: 100%;
            max-height: 100%;
            aspect-ratio: 1 / 1; /* Ensures a square shape */
            border-radius: 15px;a
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

        @keyframes zoomInOut {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); } /* Zoom in */
    100% { transform: scale(1); } /* Zoom out */
}

.carousel-item img {
    animation: zoomInOut 9s infinite ease-in-out;
}

    </style>


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
                <input class="input1" type="text" id="name" placeholder="Enter your name" wire:model='name' required>
                @error('name') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Mobile -->
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input class="input1" type="text" id="mobile" placeholder="Enter your mobile number" wire:model='qmobile' required>
                @error('mobile') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Date of Travel -->
              <div class="form-group">
                <label for="date">Date of Travel</label>
                <input class="input1" type="date" id="date" wire:model='date_of_travel' required>
                @error('date_of_travel') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Total Pax -->
              <div class="form-group">
                <label for="pax">Total Pax</label>
                <input class="input1" type="number" id="pax" placeholder="Enter number of travelers" wire:model='total_pax' required>
                @error('total_pax') <span class="error">{{ $message }}</span> @enderror
              </div>
              <!-- Travel Mode -->
              <div class="form-group">
                <label for="mode">Travel Mode</label>
                <select class="input1" id="mode" wire:model='travel_type' required>
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
  /* .input1 {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
} */
  
  /* Form Container */
  #popupContainerHome .form-container {
    background: white;
    padding: 20px 30px;
    width: 100%;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    /* animation: fadeIn 0.3s ease;
    background-image: url({{asset('asserts/user/img/mina.jpg')}});
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;  */
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
  ul li{
    list-style: none;
    i{
        color: #ff8c00;
    }
  }

  #header-2{
    color:#0ed30e;
    text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);
   /* animation: blink 1.5s infinite ease-in-out; */
  }

  /* @keyframes blink{
    20%{
        text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);
    }
    60%{
        text-shadow: 4px 4px 6px rgba(255, 255, 255, 0.8);
    }
    80%{
        text-shadow: 6px 6px 8px rgba(255, 255, 255, 0.8);
    }
  } */
  /* @keyframes textGlow {
    0% { text-shadow: 0 0 5px #0ed30e, 0 0 10px #0ed30e; }
    50% { text-shadow: 0 0 10px #ffffff, 0 0 20px #ffeb3b; }
    100% { text-shadow: 0 0 5px #0ed30e, 0 0 10px #0ed30e; }
}

.glowing-text {
    animation: textGlow 1.5s infinite alternate;
} */
  
  </style>










        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " src="{{asset('newImg/IMG_3185.JPG')}}" alt="Image" style="height:50vh; object-fit: cover; object-position: center bottom;">
                        
                        <div class="carousel-captio d-flex flex-column align-items-center justify-content-center">
                            {{-- <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                <h5 class="text-white mb-4 animated slideInDown" style="">Style, Class, Grace, Elegance and Charm of the Holy Journey through Rahat Travels
                                makes that sacred experience all that much better</h5>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{__('message.exp_package')}}</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">{{__('message.exp_hotel')}}</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{asset('newImg/vecteezy_islamic-2.jpg')}}" alt="Image" style="height:50vh; object-fit: cover; object-position: center;">
                        <div class="carousel-captio d-flex flex-column align-items-center justify-content-center">
                            {{-- <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Umrah Karein to RAHAT se</h6>
                                <h1 class="text-white mb-4 animated slideInDown glowing-text">
                                    Style, Class, Grace, Elegance and Charm of the Holy Journey through Rahat Travels
                                    makes that sacred experience all that much better
                                </h1>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{__('message.exp_package')}}</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">{{__('message.exp_hotel')}}</a>
                            </div> --}}
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
        animateNumber('clients-count', 0, 3, 3000, 'Million +');
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
                                        <h2 class="mb-1" data-toggle="counter-up">450</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <!-- <h2 class="mb-1" data-toggle="counter-up">100 </h2> -->
                                        <h2 class="mb-1" ><span data-toggle="counter-up">2</span>Million</h2>
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
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{asset('newImg/mosque-6153752_640.jpg')}}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{asset('newImg/masque.jpg')}}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{asset('newImg/yasmine-arfaoui.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{asset('newImg/IMG_3179.JPG')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-----PACKAGE-CONTENT-START---------------->
        <div class="container-xxl mt-3" id="about">
            <div class="container" >
                <div class="row  align-items-center">
                   <a href="{{route('umrah-by-bus-from-uae')}}"> <h5>Umrah by Bus –  <span class="text-primary text-uppercase">Affordable & Comfortable Pilgrimage</span> </h5></a>
                    <p>Experience a hassle-free and budget-friendly Umrah journey by bus without compromising on comfort. We are the only tour operator in the UAE offering Umrah packages with inclusive food, laundry, and Ziyarat services to ensure a seamless pilgrimage experience.</p>
                <div>
                <h5 style="text-decoration: underline; text-decoration-color: #ff8c00;">Flexible & Customizable Packages</h5>

                <p>Choose from a variety of packages tailored to suit your budget and preferences:</p>
                <ul>
                    <li><i class="fa-solid fa-bag-shopping"></i> Super Saver</li>
                    <li><i class="fa-solid fa-bag-shopping"></i> Bronze</li>
                    <li><i class="fa-solid fa-bag-shopping"></i> Silver</li>
                    <li><i class="fa-solid fa-bag-shopping"></i> Gold</li>
                </ul>
                <p>Need a personalized itinerary? We also offer customized packages to cater to special requests.</p>
                </div>

            <div class="px-3 py-3" style="border: 1px dashed #ff8c00; border-radius: 30px 0 30px 0;">

                <div class="d-flex justify-content-between" >
                    <div>
                        <h5>What’s Included in Our Umrah Bus Packages?</h5>
                        <p>Our all-inclusive packages cover:</p>
                        <ul>
                            <li>✔️ Comfortable Transportation</li>
                            <li>✔️ One-Year Multiple Entry Tourist Visa</li>
                            <li>✔️ Border Tax</li>
                            <li>✔️ All Meals (Breakfast, Lunch & Dinner)</li>
                            <li>✔️ Laundry Services</li>
                            <li>✔️ Zamzam Water</li>
                            <li>✔️ Guided Ziyarat Tours</li>
                            <li>✔️ Accommodation in Mecca & Medina</li>
                            <li>✔️ Transfers & Experienced Guides</li>
                        </ul>
                        
                    </div>
                        <div>
                            <h5>10-Day Umrah by Bus Itinerary</h5>
                        <ul>
                            <li>🚌 Departure: Every Wednesday from Abu Dhabi, Dubai & Sharjah</li>
                            <li>📅 Duration: 10 Days</li>
                            <li>🕋 Mecca Stay: 6 Days</li>
                            <li>🕌 Medina Stay: 2 Days</li>
                            <li>🚍 Travel Time: 2 Days</li>
                        </ul>
                        </div>
    
                        
                 </div>
                 <p style="color: #0f172b">You’ll have the opportunity to perform one Jumma prayer in Mecca and one in Medina, making your journey even more spiritually rewarding</p>
            </div>
                  
             <div class="d-flex justify-content-between mt-5" >
                <div>
                    <h5><i class="fa-solid fa-face-smile"></i> Additional Services</h5>
                    <p>In addition to our Bus Packages, we also provide:</p>
                    <ul>
                        <li>✈️ Umrah by Air Packages</li>
                        <li>🛂 Umrah Visa Services</li>
                    </ul>
                </div>

                <div>
                    <h5><i class="fa-regular fa-folder-open"></i> Umrah Visa Requirements</h5>
                    <p>To apply for an Umrah visa, you will need:</p>
                    <ul>
                        <li>📌 Original Passport (Valid for at least 6 months)</li>
                        <li>📌 UAE Residence Visa / Permit (Valid for at least 3 months)</li>
                        <li>📌 Copy of Emirates ID</li>
                        <li>📌 Original Vaccination Card</li>
                    </ul>
                </div>

             </div>


             <div>  

                <h5>Umrah Package by Air from Dubai <i class="fa-solid fa-plane-departure"></i></h5>
                <p>At Umrah Rahat, we offer the most affordable and well-designed Umrah Packages by Air from Dubai, catering to individuals, couples, families, and groups.</p>
                <div class="d-flex">
                    <div>
                        <h5 class="text-primary">What’s Included in Our Umrah Packages?</h5>
                        <ul>
                            <li><strong>✔ Choice of Accommodation</strong> – Stay in 3-star, 4-star, or 5-star hotels with sharing options</li>
                            <li><strong>✔ Return Airfare</strong> – Seamless travel with round-trip tickets included</li>
                            <li><strong>✔ Umrah Visa</strong> – Complete assistance with visa processing</li>
                            <li><strong>✔ Private Family Packages Available</strong> – Umrah by Air without sharing accommodation for families</li>
                        </ul>
                        
                    </div>
                    <div>
                        <h5  class="text-primary">Why Choose Us?</h5>
                        <ul>
                            <li><strong>🏆 Years of Expertise</strong> – Trusted specialists with extensive experience in Umrah tour management</li>
                            <li><strong>😊 Satisfied Clients</strong> – A large and loyal customer base built through successful Umrah operations</li>
                            <li><strong>✈ Airline Partnerships</strong> – Strong connections with multiple airlines to offer the best travel deals</li>
                            <li><strong>💰 Best Value</strong> – Affordable, high-quality packages designed to suit every budget</li>
                        </ul>
                        
                        
                    </div>
                </div>
                <div class="pt-3" style="border-top: 1px solid #FEA116;">
                    <h5>An Unforgettable Umrah Experience</h5>
                    <p>Embark on the spiritual journey of a lifetime with Rahat Holidays, where we prioritize your comfort, convenience, and devotion. We understand the significance of Umrah and are committed to making it a seamless, sacred, and stress-free experience for you.</p>
                    <h5>Why Choose Our Umrah Packages?</h5>
                    <ul>
                        <li><strong><i class="fa-solid fa-hotel"></i> Hand-Picked Hotels </strong> – Stay in Makkah hotels within walking distance of Al Masjid Al Haram</li>
                        <li><strong><i class="fa-solid fa-plane-circle-check"></i> Hassle-Free Travel</strong> – We arrange your return flights & airport transfers from Jeddah</li>
                        <li><strong><i class="fa-solid fa-heart"></i> Unbeatable Value</strong>  – Limited-time super low Umrah packages starting from just AED 999 per person</li>
                        <li><strong><i class="fa-solid fa-hand-holding-heart"></i> Exclusive Perks</strong>  – Enjoy complimentary upgrades and added extras for a more rewarding pilgrimage</li>
                        <li><strong><i class="fa-solid fa-medal"></i> Award-Winning Service</strong> – Our commitment to excellence ensures memorable experiences that last a lifetime</li>
                    </ul>
                </div>
                

                <div class="d-flex">
                    <div>
                        <h5 >Plan Your Umrah with Ease</h5>
                        <p>We are committed to providing the best and most budget-friendly Umrah packages every year, ensuring a comfortable and spiritually fulfilling journey. Whether you prefer Umrah by Air or Bus, we have the perfect package for you!</p>
                        <p>
                            <span style="transform:scale(1.4);" class="btn-play">📞</span> Contact us today to book your Umrah journey from Dubai! <br>
                            <a href="tel:+971566115491">971566115491</a>
                        </p>
                    </div>
    
                  
                    
                  <div>
                    <h6>📅 Book Now & Save!</h6>
                    <p>Take advantage of exclusive offers and let us handle every detail of your Umrah journey.</p>
                    <p>📞 Contact Our Expert Travel Consultants Today to customize your perfect pilgrimage</p>
                  </div>
                </div>

             </div>
                    
                <div>

                </div>

                </div>
            </div>
        </div>
        <!-----PACKAGE-CONTENT-END---------------->


















        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">RAHAT GROUP</h6>
                        <h1 class="text-white mb-4">Dedicated to ensuring a seamless and fulfilling experience for every pilgrim</h1>
                        <p class="text-white mb-4">Rahat Group offers a wide range of services, including Hajj and Umrah packages, elite catering, visa processing, and travel services, providing quality and tailored experiences for its customers.</p>
                        <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Package</a> -->
                        <a  class="btn btn-light py-md-3 px-md-5">Book A Package</a>
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
 
