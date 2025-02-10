<section style="margin-bottom:100px">
    <!-- ------------------------------------------------------------------ -->
<!-- ---------------------- Start Makkah Sightseeing ---------------- -->
<!-- ------------------------------------------------------------------ -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item imgZoom  active">
                        <img class="w-100 " src="{{asset('newImg/bannerImage/sightseeing2.png')}}" alt="Image" style="height: 15vw; object-position:top; object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                {{-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">RAHAT GROUP</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Sightseeing</h1> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <div class="bg-white shadow" style="padding: 35px;">
              <div class="row g-2">
                  <div class="col-md-3">
                      <button class="btn btn-primary w-100">Search Package</button>
                  </div>
                  <div class="col-md-9">
                      <div class="row g-2">
                          <form class="col-md-6"  wire:submit.prevent="">
                              <select class="form-select" wire:model.live="sightCity">
                                  <option value='' selected>City</option>
                                  <option value="MAKKAH">MAKKAH</option>
                                  <option value="MADINAH">MADINAH</option>
                                  <option value="BAGHDAD">BAGHDAD</option>
                                  <option value="NAJAF">NAJAF</option>
                                  <option value="KARBALA">KARBALA</option>
                              </select>
                          </form>
                          <div class="col-md-6">
                              <form wire:submit.prevent="" class="date" id="date2" >
                                  <input  wire:model.live="searchName" type="text" class="form-control" placeholder="Sight Name" />
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

        <div class="container mt-5 mb-5">
    <h4 class="text-center text-dark mb-5 font-weight-bold">Explore Makkah's Historical & Spiritual Landmarks</h4>
    
    <div class="row">
        <!-- Jabal-e-Soor Card -->
         @foreach ($allSights as $allSight)
         <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <img style="height: 20rem;" src="{{asset('storage/' . $allSight->sightMainImage)}}" class="card-img-top" alt="Jabal-e-Soor">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-dark font-weight-semibold">{{$allSight->sightName}}</h5>
                        <div  class="d-flex"><i style="font-size: 20px;color:#FEAF39" class="bi bi-geo-alt-fill"></i> &nbsp; <h4>{{$allSight->sightCity}}</h4> </div>
                    </div>
                    
                    <p class="card-text text-dark font-italic mt-3">
                    {{ \Illuminate\Support\Str::limit($allSight->sightDiscription, 250, '...') }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="{{route('singleSightSeeing',['id'=>$allSight->id])}}" class="btn btn-sm btn-primary rounded py-2 px-4 me-2" >
                            <i class="fa-solid fa-file-zipper"></i> More info
                        </a>
                        <a class="btn btn-sm btn-dark rounded py-2 px-4">
                            <i class="fa-regular fa-paper-plane"></i>  Book Enquire
                        </a>
                    </div>
                </div>
            </div>
        </div>
         @endforeach
    </div>
                @if(count($allSights) >= $limit)
                    <div class="text-center " style="margin-bottom:150px;margin-top:50px">
                        <button class="btn btn-primary" wire:click="loadMore">Load More</button>
                    </div>
                @endif
</div>
</section>
