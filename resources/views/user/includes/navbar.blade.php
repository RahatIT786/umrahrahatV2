<section>
<!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            {{-- <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div> --}}
           
             @include('user.includes.spinner')
        </div>
       
        <!-- Spinner End -->
  <!-- Header Start -->
  <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-2 bg-dark d-none d-lg-block">
                    <a href="{{route('layouts.app')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        {{-- <h1 class="m-0 text-primary text-uppercase">HajUmrah</h1> --}}
                        <img style="height:7rem;" src="{{asset('asserts/user/img/haj/RAHAT_UMRAH_LOGO.png')}}" alt="rahat_logo">
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            {{-- <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>

                                <p class="mb-0"><a href="mailto:info@rahat.in" style="color:#666565; " >info@rahat.in</a></p> &nbsp; &nbsp;
                                <i class="fa fa-phone-alt text-primary me-2"></i>

                                <p class="mb-0"><a href="tel:+917506195551" style="color:#666565; " >+917506195551</a></p>
                            </div> --}}
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>

                                <p class="mb-0"><a href="mailto:dubai@rahat.in" style="color:#666565; " >dubai@rahat.in</a></p> &nbsp; &nbsp;
                                <i class="fa fa-phone-alt text-primary me-2"></i>

                                <p class="mb-0"><a href="tel:+971567866713" style="color:#666565; " >+971567866713</a></p>
                            </div>
                            {{-- <div class="h-100 d-inline-flex align-items-center py-2 ">
                                <i class="fa-solid fa-globe text-primary me-2"></i>
                                <p class="mb-0"><a href="#footer-contact" style="color:#666565; " >International</a></p>
                            </div> --}}
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                {{-- <div>
                                    <a class="me-3" href="" style="color: #666565;" style="text-transform:uppercase; font-size: 14px; font-weight: 500;"><i class="fa-solid fa-user-secret" ></i> Agent Login</a>
                                    <a class="me-3" href=""  style="text-transform:uppercase; font-size: 14px; font-weight: 500;"><i class="fa-solid fa-user" style="color: #666565;"></i> User Login</a>
                                </div> --}}
                              <div class="d-flex align-items-cente justify-content-between px-2 " style="position: absolute; top:3px; right: 28vw;  border-radius:9px;">
                                {{-- <span class="mt-2"><i class="fa-solid fa-language" ></i></span> --}}
                                <span class="mt-"><i class="fa-solid fa-earth-asia" style="font-size: 20px;"></i></span>
                                <span id="google_translate_element"  ></span>
                              </div>
                                <div class="h-100 d-inline-flex align-items-center  me-4">

                                    <div class="dropdown me-4">
                                            <i class="fa-solid fa-user-tie text-primary me-2"></i>
                                            @if(Session::has('agent'))
                                                <a class="dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-transform:uppercase;color:#666565; font-size: 14px; font-weight: 500;">
                                                    {{ Session::get('agent')->name }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ route('agent.dashboard') }}">Dashboard</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('agent.logout') }}">Logout</a></li>
                                                </ul>
                                            @else
                                                <a class="dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-transform:uppercase;color:#666565; font-size: 14px; font-weight: 500;">
                                                    Agent Login
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
                                                </ul>
                                            @endif
                                        </div>

                                    <i class="fa-solid fa-user text-primary me-2"></i>

                                    <p class="mb-0"><a href=""  style="text-transform:uppercase;color:#666565;  font-size: 14px; font-weight: 500;" >user login</a></p>
                                </div>
                                <a class="me-3" >|</a>
                                <a class="me-3 " href="https://www.facebook.com/rahattravelsofindia/"><i class="fab fa-facebook-f "></i></a>
                                <a class="me-3 " href="https://x.com/i/flow/login?redirect_after_login=%2FRahatTravelsInd"><i class="fab fa-twitter"></i></a>
                                <a class="me-3 " href="https://www.linkedin.com/in/imran-rahat-00267274/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3 " href="https://www.instagram.com/rahattravelsofindia/"><i class="fab fa-instagram"></i></a>
                                <a class="" href="https://www.youtube.com/@RahatGroup"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="#" class="navbar-brand d-block d-lg-none">
                            {{-- <h1 class="m-0 text-primary text-uppercase">HajUmrah</h1> --}}
                            <img style="height:7rem;" src="{{asset('asserts/user/img/haj/rahat_logo.png')}}" alt="rahat_logo">
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0 " >
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" id="umrahDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img style="height:30px;" src="{{asset('images/umrah_Icon.png')}}" alt="">
                                        <span>Umrah</span>
                                    </a>
                                    <div class="dropdown-menu rounded-0 m-0" aria-labelledby="umrahDropdown">
                                        <a href="{{route('umrah-by-bus-from-uae')}}" class="dropdown-item">By Bus From UAE</a>
                                        <a href="{{route('umrah-by-flight-from-uae')}}" class="dropdown-item">By Flight from UAE</a>
                                        <a href="{{route('umrah-landpackages-uae')}}" class="dropdown-item">Land Packages</a>
                                        <a href="{{route('custom.package')}}" class="dropdown-item">Custom Package</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">

                                    <a href="{{route('about')}}"  class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:30px;" src="{{asset('images/ramzaanLogo.png')}}" alt="">
                                        Ramzan

                                    </a>

                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{route('ramzaan.bybus')}}" class="dropdown-item">By Bus from UAE</a>
                                        <a href="{{route('ramzaan.byflight')}}" class="dropdown-item">By Flight from UAE</a>
                                        <a href="{{route('ramzaan.landpackage')}}" class="dropdown-item">Land Packages</a>

                                    </div>
                                </div>
                                <div class="nav-item dropdown">

                                    <a    class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:30px;" src="{{asset('images/Majid_Icon.png')}}" alt="">
                                        Ziyarats</a>

                                    <div class="dropdown-menu rounded-0 m-0" >
                                        @foreach($Ziyaratcities as $city)
                                            <a href="{{route('user.ziyarat',['id'=>$city->id])}}" class="dropdown-item">{{$city->ziyarat_city}}</a>
                                        @endforeach

                                        <!-- <a href="{{route('coming-soon')}}" class="dropdown-item">Jordan</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Baghdad</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Egypt</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Turkey</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Uzbekistan</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Azerbaijan</a> -->

                                    </div>
                                </div>
                                <div class="nav-item dropdown">

                                    <a   class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:30px;" src="{{asset('images/Kaba_Icon.png')}}" alt="">
                                        Hajj</a>

                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{route('hajj.bybus')}}" class="dropdown-item">Short Hajj</a>
                                        <a href="{{route('hajj.bybus.long')}}" class="dropdown-item">Long Hajj</a>

                                    </div>
                                </div>
                                <a href="{{route('hotels')}}"  class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect " >
                                    <img style="height:30px;" src="{{asset('images/Hotel_Icon.png')}}" alt="">
                                    Hotels</a>
                                <a href="{{route('saudi-visa')}}"  class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect"  >
                                    <img style="height:30px;" src="{{asset('images/Visa_Icon.png')}}" alt="">

                                        Visa

                                </a>
                                <a href="{{route('transport')}}"  class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" >
                                    <img style="height:30px;" src="{{asset('images/Transport_Icon.png')}}" alt="">
                                    Transfers </a>
                                <a href="{{route('sightseeing')}}"  class="nav-item nav-link  d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" >
                                    <img style="height:30px;" src="{{asset('images/SIGHTSEEING_2nd_Icon.png')}}" alt="">
                                    Sightseeing</a>

                                <a href="{{route('catring')}}" class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect">
                                    <img style="height: 30px; display: block;" src="{{asset('images/Catering_Icon.png')}}" alt="Catering Icon">
                                    <span>Catering</span>
                                </a>
                                <a href="https://rahatholidays.com/"  target="_blank" class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect">
                                    <img style="height: 30px; display: block;" src="{{asset('images/Holiday_Icon.png')}}" alt="Catering Icon">
                                    <span>Holidays</span>
                                </a>

                                <div class="nav-item dropdown">

                                    <a    class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:30px;" src="{{asset('images/Services.png')}}" alt="">
                                        services</a>

                                    <div class="dropdown-menu rounded-0 m-0" >
                                        <a href="{{route('user.laundry')}}" class="dropdown-item">Laundry</a>
                                        <a href="{{route('myassistant')}}" class="dropdown-item">Guide and Assitant</a>
                                        <a  class="dropdown-item" onclick="toggleForexForm()">Forex</a>



                                    </div>
                                </div>
                                <a href="{{route('partner-with-us')}}" class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect">
                                    <img style="height: 30px; display: block" src="{{asset('images/Partner_With_Us_Icon.png')}}" alt="">
                                   <span>Join Us</span>
                                </a>
                                <a href="{{route('contact-us')}}" class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect">
                                    <img style="height: 30px; display: block" src="{{asset('images/Contact.png')}}" alt="">
                                   <span>Contact Us</span>

                                   {{-- <div class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                                <a style="color:black" href="{{route('partner-with-us')}}">Join Us</a> &nbsp;
                            </div>

                            <div style="margin-left: 0px;" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">

                                <a style="color:black" href="{{route('contact-us')}}">Contact Us</a>
                            </div> --}}
                                </a>
                                {{-- <a href="{{route('layouts.app')}}"  class="nav-item nav-link active">Umrah </a>
                                <a href="{{route('about')}}"  class="nav-item nav-link">Ramzan </a> --}}

                                {{-- <a href="{{route('coming-soon')}}"  class="nav-item nav-link " >Hajj Packages</a> --}}




                                {{-- <a href="{{route('hotels')}}"  class="nav-item nav-link">Hotels</a> --}}
                                {{-- <div class="nav-item dropdown">

                                    <a href="{{route('about')}}"  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Visas</a>

                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Dubai Visa</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Saudi Visa</a>

                                    </div>
                                </div> --}}
                                {{-- <a href="{{route('coming-soon')}}"  class="nav-item nav-link">Transport</a> --}}
                                {{-- <a href="{{route('coming-soon')}}"  class="nav-item nav-link">Forex</a> --}}
                                {{-- <a href="{{route('ramzan-umrah-package')}}"  class="nav-item nav-link">Ramadan Umrah Packages</a> --}}

                                {{-- <a href="{{route('blog')}}"  class="nav-item nav-link">Blog</a> --}}


                            </div>


                            <!-- <a href="{{route('contact-us')}}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a> -->

                        </div>
                    </nav>
                </div>
            </div>
      </div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Agent Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="loginName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="loginName" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="loginNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="loginNumber" placeholder="Enter your phone number">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Agent Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('send.otp')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone number" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>



  <!-- Header End -->
<!---------------------->
<style>
    /* .goog-te-combo option:hover {
        background-color: black !important;
        color: white !important;
    } */
         .VIpgJd-ZVi9od-ORHb-OEVmcd{
            visibility:hidden !important;
        }
        .VIpgJd-ZVi9od-l4eHX-hSRGPd{
            /* visibility:hidden !important; */
            display: none !important;
        }
    .goog-te-combo{
        padding: 8px !important;
        border-radius: 5px !important;
        width: 5rem !important;
        border: red !important;

    }
    .goog-te-combo:focus{
        border: red !important;
        outline: red !important;
    }

        /* Hide Google Translate toolbar */
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    /* Remove the space reserved for the toolbar */
    body {
        top: 0px !important;
    }

    /* Hide the Google Translate badge */
    .goog-logo-link {
        display: none !important;
    }

    /* Hide the text label "Powered by Google Translate" */
    .goog-te-gadget {
        color: transparent !important;
    }

    /* If there's a dropdown box you want to keep, you can style it here */
    #google_translate_element select {
        color: black;
        /* height: 15px !important; */
         /* Keep the dropdown visible but text styled */
    }
    .skiptranslate .goog-te-gadget{
        height: 1rem !important;
    }

    .goog-te-gadget-icon{
        display: none !important;
    }


    .goog-te-gadget-simple{
        border: none;
    }
    </style>

    {{-- <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }

        var selectedLanguage = document.querySelector(".goog-te-combo");

// Select the first option and change its text
 if (selectedLanguage.option.length > 0) {
     selectedLanguage.option[0].text = 'En'; // Change "Select Language" to "En"
 }

        </script> --}}

        {{-- <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,ar,hi', // Only include English, Arabic, and Hindi
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }
    
            // Change the default "Select Language" text to "En"
            function modifyLanguageDropdown() {
                var selectedLanguage = document.querySelector(".goog-te-combo");
                if (selectedLanguage && selectedLanguage.options.length > 0) {
                    selectedLanguage.options[0].text = 'En'; // Change "Select Language" to "En"
                }
            }
    
            // Call the function after the Google Translate script has loaded
            window.onload = function() {
                googleTranslateElementInit();
                setTimeout(modifyLanguageDropdown, 1000); // Delay to ensure the dropdown is loaded
            };
        </script> --}}

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ar,hi', // Only include English, Arabic, and Hindi
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

    // Remove the "Select Language" option and keep only English, Arabic, and Hindi
    function modifyLanguageDropdown() {
        var dropdown = document.querySelector(".goog-te-combo");
        if (dropdown && dropdown.options.length > 0) {
            // Remove the first option ("Select Language")
            dropdown.remove(0);

            // Optionally, you can set the default selected language to English
            dropdown.value = 'en';
        }
    }

    // Call the function after the Google Translate script has loaded
    window.onload = function() {
        googleTranslateElementInit();
        setTimeout(modifyLanguageDropdown, 1000); // Delay to ensure the dropdown is loaded
    };
</script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!----------------------->

  <style>
    .zoom-effect img {
    transition: transform 0.3s ease-in-out;
}

.zoom-effect:hover img {
    transform: scale(1.4); /* Adjust the zoom scale value as per your requirement */
}
  </style>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<!-----forex-form-div-style-script-start----------------->

<div id="forex-popup-form">
    <div class="form-header">
        <h2>Forex Enquiry Form</h2>
        <span class="close-btn" onclick="toggleForexForm()">&times;</span>
    </div>

    <p><strong>📞 Call Us At:</strong> +91 9967786446, 7863878630</p>

    <hr>



    <div class="input-group">
        <label> Name</label>
        <input type="text" placeholder="Enter First Name">
    </div>

    {{-- <div class="input-group">
        <label>Last Name</label>
        <input type="text" placeholder="Enter Last Name">
    </div> --}}

    <div class="input-group">
        <label>Mobile</label>
        <input type="text" placeholder="+91 Mobile Number">
    </div>

    <div class="input-group">
        <label>Email Address</label>
        <input type="email" placeholder="Enter Email Address">
    </div>

    <div class="input-group">
        <label>Currency Type</label>
        <select>
            <option>USD</option>
            <option>EUR</option>
            <option>CNY</option>
            <option>INR</option>
        </select>
    </div>

    <div class="input-group">
        <label>Amount Required</label>
        <input type="text" placeholder="Enter Amount">
    </div>

    <div class="input-group">
        <label>Pick Up Option</label>
        <select>
            <option>Pick Up</option>
            <option>Home Delivery</option>
        </select>
    </div>

    <div class="checkbox-group">
        <input type="checkbox" checked>
        <label>Documents required: Pan Card, Passport, Flight Ticket, Visa Copy</label>
    </div>

    <div class="button-group">
        <button class="whatsapp-btn">WhatsApp</button>
        <button class="submit-btn">Send Enquiry</button>
    </div>
</div>

  <style>
      #forex-popup-form {
        /* display: none; */
            position: fixed;
            top: -200%;
            left: 50%;
            transform: translateX(-50%);
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            transition: top 0.5s ease-in-out; /* Smooth animation */
            z-index: 4;

        }

        /* Show form */
        #forex-popup-form.show {
            top: 50px; /* Moves down smoothly */
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-header h2 {
            margin: 0;
        }

        .close-btn {
            cursor: pointer;
            font-size: 20px;
            color: gray;
            transition: 0.3s;
        }

        .close-btn:hover {
            color: red;
        }

        .input-group {
            margin-top: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            font-weight: bold;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #007bff;
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.3);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .checkbox-group input {
            margin-right: 5px;
        }

        .button-group {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .whatsapp-btn {
            background-color: #25D366;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .whatsapp-btn:hover {
            background-color: #1da851;
        }

        .submit-btn {
            background-color: #6a0dad;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #580aaf;
        }

  </style>
 <script>
        function toggleForexForm() {
            var form = document.getElementById("forex-popup-form");

            if (form.classList.contains("show")) {
                form.classList.remove("show"); // Hide form
            } else {
                form.classList.add("show"); // Show form
            }
        }
    </script>
<!-----forex-form-div-style-script-end----------------->
</section>
