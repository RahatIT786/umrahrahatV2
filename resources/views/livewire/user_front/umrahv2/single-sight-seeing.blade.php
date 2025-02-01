<section style="margin-bottom:100px">
    <!-- ------------------------------------------------------------------ -->
<!-- ---------------------- Start Makkah Sightseeing ---------------- -->
<!-- ------------------------------------------------------------------ -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 " src="{{asset('asserts/user/img/haj/mecca1.jpg')}}" alt="Image" style="height: 30vh; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">{{$sight_detail->sightName}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container mt-5 mb-5">
    <h4 class="text-center text-dark mb-5 font-weight-bold">Explore Makkah's Historical & Spiritual Landmarks</h4>
    <style>
        .price-box {
            display: inline-block;
            padding: 5px 20px; /* Smaller padding */
            border: 2px solid #007bff;
            background-color: #f0f8ff;
            color: #007bff;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            height: 50px; /* Set a fixed height */
            line-height: 40px; /* Vertically center the text within the box */
        }
        .price-box1 {
            display: inline-block;
            padding: 5px 20px; /* Smaller padding */
            border: 2px solid #27c621;
            background-color: #f0f8ff;
            color: #27c621;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            height: 50px; /* Set a fixed height */
            line-height: 40px; /* Vertically center the text within the box */
        }
    </style>
    
    <div class="row">
    <!-- Image Column -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
             <img src="{{ asset('storage/' . $sight_detail->sightMainImage) }}" class="card-img-top" alt="Jabal-e-Soor" style="height: 30rem; object-fit: cover;">
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-lg-6 mb-4 d-flex">
            <div class="card shadow-sm w-100 d-flex flex-column">
                <div class="card-body d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title text-dark font-weight-semibold mb-5">{{$sight_detail->sightName}}</h3>
                        <p class="price-box">Price for 4 people: 200 AED</p>
                    </div>
                    <div  class="d-flex justify-content-between">
                        <div class="d-flex">
                            <i style="font-size: 20px;color:chocolate;margin-right:15px" class="bi bi-geo-alt-fill"></i>
                            <h5>{{$sight_detail->sightCity}}</h5>
                        </div>
                        <div>
                        <p class="price-box1">Price for 7 people: 300 AED</p>
                        </div>
                    </div>
                    <h6 class="card-text text-dark font-italic">
                        {{$sight_detail->sightDiscription}}
                    </h6>
                </div>

                <div class="d-flex justify-content-evenly p-3" style="margin-top: auto;">
                    <!-- <a class="btn btn-sm btn-primary rounded py-2 px-4 me-2" >
                        <i class="fa-solid fa-book"></i> View Brochure
                    </a> -->
                    <a class="btn btn-sm btn-dark rounded py-2 px-4">
                      <i class="fa-regular fa-paper-plane"></i>  Book Enquire
                    </a>
                </div>
            </div>
        </div>

    </div>
     <!-- Jabal-e-Soor Card -->
</div>

</section>
