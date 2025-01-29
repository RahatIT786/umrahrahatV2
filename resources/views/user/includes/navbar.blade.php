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
                                <a class="me-3" href="https://www.facebook.com/rahattravelsofindia/"><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href="https://x.com/i/flow/login?redirect_after_login=%2FRahatTravelsInd"><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href="https://www.linkedin.com/in/imran-rahat-00267274/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href="https://www.instagram.com/rahattravelsofindia/"><i class="fab fa-instagram"></i></a>
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
                                    <a class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center" id="umrahDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img style="height:30px;" src="{{asset('images/umrah_Icon.png')}}" alt="">
                                        <span>Umrah</span>
                                    </a>
                                    <div class="dropdown-menu rounded-0 m-0" aria-labelledby="umrahDropdown">
                                        <a href="{{route('umrah-by-bus-from-uae')}}" class="dropdown-item">By Bus From UAE</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">By Flight from UAE</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Land Packages (All Gulf)</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">

                                    <a href="{{route('about')}}"  class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:30px;" src="{{asset('images/ramzaanLogo.png')}}" alt="">
                                        Ramzan
                                        
                                    </a>

                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{route('ramzaan.bybus')}}" class="dropdown-item">By Bus from UAE</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">By Flight from UAE</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Land Packages (All Gulf)</a>
                     
                                    </div>
                                </div>
                                <div class="nav-item dropdown">

                                    <a    class="nav-link dropdown-toggle d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" data-bs-toggle="dropdown">
                                        <img style="height:30px;" src="{{asset('images/Majid_Icon.png')}}" alt="">
                                        Ziyarats</a>

                                    <div class="dropdown-menu rounded-0 m-0" >
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Jordan</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Baghdad</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Egypt</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Turkey</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Uzbekistan</a>
                                        <a href="{{route('coming-soon')}}" class="dropdown-item">Azerbaijan</a>
                     
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
                                <a href=""  class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" >
                                    <img style="height:30px;" src="{{asset('images/Transport_Icon.png')}}" alt="">
                                    Transfers </a>
                                <a href="{{route('sightseeing')}}"  class="nav-item nav-link  d-flex flex-lg-column flex-row align-items-center text-center zoom-effect" >
                                    <img style="height:30px;" src="{{asset('images/SIGHTSEEING_2nd_Icon.png')}}" alt="">
                                    Sightseeing</a>
                                
                                <a href="{{route('catring')}}" class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect">
                                    <img style="height: 30px; display: block;" src="{{asset('images/Catering_Icon.png')}}" alt="Catering Icon">
                                    <span>Catering</span>
                                </a>
                                <a href="" class="nav-item nav-link d-flex flex-lg-column flex-row align-items-center text-center zoom-effect">
                                    <img style="height: 30px; display: block" src="{{asset('images/Holiday_Icon.png')}}" alt="">
                                   <span>Holidays</span>
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
                            <div class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                                <a style="color:black" href="{{route('partner-with-us')}}">Join Us</a> &nbsp;
                            </div>
                            
                            <div style="margin-left: 0px;" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                                
                                <a style="color:black" href="{{route('contact-us')}}">Contact Us</a>
                            </div>
                  
                            <!-- <a href="{{route('contact-us')}}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a> -->

                        </div>
                    </nav>
                </div>
            </div>
      </div>
  <!-- Header End -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</section>
