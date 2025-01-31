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
                                <h1 class="display-3 text-white mb-4 animated slideInDown">PARTNER WITH US</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="" id="about">
            <div class="container" >
                <div class="row g-5 align-items-center ">
                    <div class="col-lg-8">
                        <h6 class="section-title text-start text-primary text-uppercase">Rahat Groups</h6>
                        <h1 class="mb-4">Partner with Rahat Travels of India – Elevate the Pilgrimage Experience<span class="text-primary text-uppercase"> </span></h1>
                        <p class="mb-4">At Rahat Travels of India, we are dedicated to transforming the sacred journeys of Hajj and Umrah into profoundly enriching and seamless experiences for pilgrims. Our commitment to excellence, adherence to the highest standards, and respect for Islamic values have earned us a reputation as a trusted and innovative travel partner.</p>
                        
                        <p>We invite you to join us in this noble endeavor. By partnering with Rahat Travels of India, you become part of a mission-driven enterprise that prioritizes the spiritual well-being and comfort of every pilgrim. Together, we can expand our reach, enhance services, and set new benchmarks in the industry.</p>
                        <!-- <h3>Rahat Travels Of India Pvt. Ltd. Terms & Conditions</h3> -->
                        <p> <strong>Why Partner with Us?</strong> </p>
                        <p>1.	Proven Track Record: A growing reputation for exceptional service and customer satisfaction.</p>
                        <p>2.	Expertise and Innovation: Comprehensive packages, seamless logistics, and tailored experiences.</p>
                        <p>3.	Shared Values: A commitment to professionalism, adherence to the Qur'an and Sunnah, and the highest ethical standards.</p>
                        <p>4.	Growing Demand: Be part of a thriving sector with immense potential for growth.</p>
                        <p>5.	Collaborative Growth: Opportunities for mutual success through shared expertise, resources, and networks.</p>
                        <p> <strong>Partnership Opportunities</strong> </p>
                        <p>•    Co-branded Hajj and Umrah packages.</p>
                        <p>•	Localized services for accommodation, transportation, and catering.</p>
                        <p>•	Regional representation to extend our reach globally.</p>
                        <p>•	Joint ventures for marketing and customer acquisition.</p>
                        <p>Let’s work together to make the spiritual journey of Hajj and Umrah unforgettable for millions. Partner with Rahat Travels of India and contribute to a legacy of excellence and devotion.</p>
                        <p>For discussions on partnership opportunities, please contact us at <a href="tel:+971567866713">+971 56 786 6713</a> </p>
                    </div>
                    <div  class="col-lg-4">
                        <div id="agentSignup" class="form-container">
                            <h5 class="text-start" style="font-weight: 400;">I'm interested, Sign me up!</h5>
                            {{-- <p class="text-start">Feel free to submit your query</p> --}}
                            <form wire:submit.prevent="submitAgentSignUp">
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
                        
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Enter your email" wire:model='email' required>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                        
                                <!-- City -->
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" id="city" placeholder="Enter your city" wire:model='city' required>
                                    @error('city') <span class="error">{{ $message }}</span> @enderror
                                </div>
                        
                                <!-- Submit Button -->
                                <button type="submit" class="submit-btn">Submit</button>
                                <div>
                                    <p>Our support executives will help you activate your account and guide you along the way.</p>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- About End -->

      

        <!---agent-signup---->
<style>
    /* Form container styling */
    #agentSignup.form-container {
        background-color: #fff;
        padding: 20px 30px;
        width: 100%;
        max-width: 500px;
        margin: 50px auto;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        animation: fadeIn 0.3s ease;
    }
  
    /* Fade in effect */
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
  
    /* Form title styling */
    #agentSignup .form-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }
  
    /* Form group styling */
    #agentSignup .form-group {
        margin-bottom: 15px;
    }
  
    /* Label styling */
    #agentSignup .form-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #555;
    }
  
    /* Input and select field styling */
    #agentSignup .form-group input,
    #agentSignup .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        box-sizing: border-box;
    }
  
    /* Error message styling */
    #agentSignup .error {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }
  
    /* Submit button styling */
    #agentSignup .submit-btn {
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
  
    /* Submit button hover effect */
    #agentSignup .submit-btn:hover {
        background-color: #218838;
    }
  
    /* Success alert message styling */
    #agentSignup .alert-success {
        padding: 10px;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 15px;
    }
  
    /* Centering the error messages and form */
    .text-center {
        text-align: center;
    }
  </style>
</section>
 
