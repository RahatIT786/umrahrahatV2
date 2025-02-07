<section>
<!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
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
                              <div class="d-flex align-items-cente justify-content-between px-2 " style="position: absolute; top:5px; right: 25vw; border: 1px solid #b9b6b6; border-radius:9px;">
                                {{-- <span class="mt-2"><i class="fa-solid fa-language" "></i></span> --}}
                                <span class="mt-2"><i class="fa-solid fa-earth-asia" style="font-size: 20px;"></i></span>
                                <span id="google_translate_element"  class="me-2 "></span>
                              </div>
                                <div class="h-100 d-inline-flex align-items-center  me-4">
                                   
                                    <i class="fa-solid fa-user-tie text-primary me-2" ></i>
                                   
                                    <p class="mb-0"><a href=""  style="text-transform:uppercase;color:#666565;  font-size: 14px; font-weight: 500;">agent login</a></p> &nbsp; &nbsp;
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
                                        <a  class="dropdown-item">Forex</a>
                                       
                                       
                     
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
    
    </style>
    
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }

        var selectedLanguage = document.querySelector(".goog-te-combo");

// Select the first option and change its text
// if (selectedLanguage.option.length > 0) {
//     selectedLanguage.option[0].text = 'En'; // Change "Select Language" to "En"
// }

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
</section>
