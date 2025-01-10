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
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="#" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        {{-- <h1 class="m-0 text-primary text-uppercase">HajUmrah</h1> --}}
                        <img style="height:4rem;" src="public/asserts/user/img/haj/RAHAT_UMRAH_LOGO.png" alt="rahat_logo">
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                               
                                <p class="mb-0"><a href="mailto:info@rahat.in" style="color:#666565; " >info@rahat.in</a></p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                               
                                <p class="mb-0"><a href="tel:+917506195551" style="color:#666565; " >+917506195551</a></p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2 ">
                                <i class="fa-solid fa-globe text-primary me-2"></i>
                                <p class="mb-0"><a href="#footer-contact" style="color:#666565; " >Global</a></p>
                            </div>
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
                            <img style="height:4rem;" src="{{asset('asserts/user/img/haj/rahat_logo.png')}}" alt="rahat_logo">
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{route('layouts.app')}}"  class="nav-item nav-link active">Home</a>
                                <a href="{{route('about')}}"  class="nav-item nav-link">About</a>
                                <div class="nav-item dropdown">

                                    <a href="{{route('about')}}"  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Umrah Package</a>

                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{route('umrahByBus')}}" class="dropdown-item">Umrah Packages By Bus From Dubai</a>
                                        <a href="{{route('umrahByAir')}}" class="dropdown-item">Umrah Packages By Air From Dubai</a>
                                        <a href="{{route('umrahVisaDubai')}}" class="dropdown-item">Umrah Visa from Dubai</a>
                                        <a href="{{route('umrahPackageSharjah')}}" class="dropdown-item">Umrah Packages from Sharjah</a>
                                    </div>
                                </div>
                                <a href="{{route('saudi-visa')}}"  class="nav-item nav-link">Saudi Visa</a>
                                <a href="{{route('ramzan-umrah-package')}}"  class="nav-item nav-link">Ramadan Umrah Packages</a>
                                <a href="{{route('blog')}}"  class="nav-item nav-link">Blog</a>

                            </div>
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                            <a href="{{route('contact-us')}}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>

                        </div>
                    </nav>
                </div>
            </div>
      </div>
  <!-- Header End -->
</section>