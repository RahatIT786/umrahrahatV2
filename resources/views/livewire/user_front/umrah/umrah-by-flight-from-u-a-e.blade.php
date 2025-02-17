<section style="margin-bottom:150px">
  <!---package-style-start----->
  <style>
    .package-image {
        width: 18vw;
        height: 18vw;
        max-width: 100%;
        max-height: 100%;
        aspect-ratio: 1 / 1; /* Ensures a square shape */
        border-radius: 15px;
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
</style>
  <!---package-style-end----->






        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Umrah By Flight From UAE</h1>
                    <nav aria-label="breadcrumb">

                    </nav>
                </div>
            </div>
        </div>
    <!-- Page Header End -->
    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <div class="bg-white shadow" style="padding: 35px;">
              <div class="row g-2">
                 {{-- <form wire:submit.prevent="searchSubmit" > --}}


                    <div class="col-md-12">
                        <div class="row g-2">
                            <div class="col-md-8">
                                <form wire:submit.prevent="" class="date" id="date2" >
                                    <input  wire:model.live="searchPackage" type="text" class="form-control" placeholder="Search Package Name" />
                                </form>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary w-100">Search Package</button>
                            </div>
                        </div>
                    </div>
                {{-- </form>--}}
              </div>
          </div>
      </div>
  </div>
  <!-- Booking End -->


  <style>
    .filter-box {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); Adds a soft shadow */
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }
    .package-card img {
        border-radius: 10px;
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .package-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .package-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .package-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .hotel-list {
            list-style-type: none;
            padding: 0;
        }
        .hotel-list li {
            margin-bottom: 10px;
        }
        .package-id {
            font-weight: bold;
        }
        .price-section {
            text-align: right;
        }
        .price-section .starting-from {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .price-section .sharing-type {
            font-size: 14px;
            color: #666;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin: 5px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .text-center {
            text-align: center;
        }
        /* .outer_box {
            border: 2px solid black ;
        } */
        .activities {
            text-align: center;
        }

        .activities .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .activities .day {
            text-align: left;
            margin-left: 20px;
            font-size: 20px;
        }

        .activities .locations {
            text-align: right;
            margin-right: 20px;
            font-size: 16px;
            word-wrap: break-word; /* Ensures the long list wraps if necessary */
        }
        .inclusions {
            max-height: 300px;
            overflow-y: auto;  /* Allows vertical scrolling */
            overflow-x: hidden;  /* Hides horizontal scrolling */
        }

</style>

        <!-- Package Start -->
        <div class="container-fluid p-4" style=" max-width: 75% !important">
            <div class="outer_box col-lg-12 p-4 col-md-12  shadow-lg rounded bg-white">
                <h5 class="text-start text-primary fw-bold mb-0">
                    (16N/17D) - Fix Departure: 16 Days Umrah Package SV Delhi-Mumbai
                </h5>

                <div class="row d-flex justify-content-center  mt-4 outer_box">
                    <!-- Image Section -->
                    <div class="d-flex flex-column align-items-center justify-content-center col-lg-3 col-md-3  p-0 outer_box">
                        <div>
                            <img src="{{ asset('./asserts/user/img/masjid-shajar.jpg') }}"
                            class="img-fluid rounded shadow-sm"
                            style="height: 100%; width: 100%; object-fit: cover; border-radius: 25px !important;">
                        </div>
                        <p style="" class="p-4">Package ID : 78935</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-dark w-100 fw-semibold">View Detailed Itinerary</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 p-0 outer_box">
                        <div class="package-card p-0 border rounded shadow-sm bg-light">

                            <div>
                                <ul class="nav nav-tabs d-flex justify-content-evenly" id="packageTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="hotels-tab" data-bs-toggle="tab" href="#hotels" role="tab" aria-controls="hotels" aria-selected="true">Hotels</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="flights-tab" data-bs-toggle="tab" href="#flights" role="tab" aria-controls="flights" aria-selected="false">Flights</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="sightseeing-tab" data-bs-toggle="tab" href="#sightseeing" role="tab" aria-controls="sightseeing" aria-selected="false">Sightseeing</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="inclusion-tab" data-bs-toggle="tab" href="#inclusion" role="tab" aria-controls="inclusion" aria-selected="false">Inclusion</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="exclusion-tab" data-bs-toggle="tab" href="#exclusion" role="tab" aria-controls="exclusion" aria-selected="false">Exclusion</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="dates-tab" data-bs-toggle="tab" href="#dates" role="tab" aria-controls="dates" aria-selected="false">Dates</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tab Content -->
                            <div class="tab-content mt-3" id="packageTabsContent">
                                <!-- Hotels Tab -->

                                <div class="tab-pane fade show active" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">

                                    <div class="mt-3">
                                        <ul class="nav nav-pills d-flex justify-content-start" id="packageFilterTabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="super-saver-tab" data-bs-toggle="tab" href="#super-saver" role="tab" aria-controls="super-saver" aria-selected="true">Super Saver</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="royal-tab" data-bs-toggle="tab" href="#royal" role="tab" aria-controls="royal" aria-selected="false">Royal</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="classic-tab" data-bs-toggle="tab" href="#classic" role="tab" aria-controls="classic" aria-selected="false">Classic</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="bronze-tab" data-bs-toggle="tab" href="#bronze" role="tab" aria-controls="bronze" aria-selected="false">Bronze</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hotels-section mb-3">
                                        <div class="mx-2">
                                            <h6 class="text-success fw-semibold my-3">Hotels Included in Package</h4>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Hotel Name</th>
                                                    <th scope="col">Nights</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Makkah</td>
                                                    <td>Jouhara Mouassar or Mayar Mayyasaar</td>
                                                    <td>9 Nights</td>
                                                </tr>
                                                <tr>
                                                    <td>Madinah</td>
                                                    <td>Jood al Marjaan or Nassar al Salaam</td>
                                                    <td>3 Nights</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Inclusions Section -->
                                    <div class="inclusions-section mt-4 d-flex justify-content-start align-items-center ">
                                        <h6 class="text-success fw-semibold mx-2">Inclusions</h4>
                                        <ul class="list-unstyled d-flex">
                                            <li class="me-4">
                                                <i class="bi bi-airplane-engines" style="font-size: 24px;"></i>
                                                <span>Flight</span>
                                            </li>
                                            <li class="me-4">
                                                <i class="bi bi-house-door" style="font-size: 24px;"></i>
                                                <span>Hotel</span>
                                            </li>
                                            <li class="me-4">
                                                <i class="bi bi-egg" style="font-size: 24px;"></i>
                                                <span>All Meals</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Flights Tab -->
                                <div class="tab-pane fade" id="flights" role="tabpanel" aria-labelledby="flights-tab">
                                    <div class="flights-section mb-3">
                                       <h6>Onward Flight included in the package</h6>
                                       <table class="table  table-sm" align="center">
                                        <tr>
                                            <!-- Airline Logo and Data Section -->
                                            <td rowspan="2" width="10%"  class="text-center align-middle">
                                                <img src="{{ asset('./asserts/user/img/jabl-e-rehmat.jpg') }}" style="height:50px;width:50px"  alt="Airline Logo" class="img-fluid rounded-circle" style="max-width: 100px;">
                                            </td>

                                            <!-- Airline Name -->
                                            <td width="20%" class="font-weight-bold text-center">Saudi Arabian Airlines</td>

                                            <!-- Departure Code -->
                                            <td width="20%"></td>

                                            <!-- Flight Duration -->
                                            <td width="20%" class="text-center" style="vertical-align: middle; position: relative;">
                                                5 Hours
                                                <span class="arrow"></span>
                                            </td>

                                            <!-- Arrival Airport -->
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <!-- Airline Code -->
                                            <td width="20%" class="text-center">SV-759</td>

                                            <!-- Departure Time -->
                                            <td width="20%" class="text-center">20:05:00</td>

                                            <!-- Flight Inventory Length -->
                                            <td width="20%"></td>

                                            <!-- Arrival Time -->
                                            <td width="20%">23:05:00</td>
                                        </tr>
                                       </table>


                                    </div>
                                </div>

                                <!-- Sightseeing Tab -->
                                <div class="tab-pane fade" id="sightseeing" role="tabpanel" aria-labelledby="sightseeing-tab">
                                    <div class="sightseeing-section mb-3">
                                        <div class="activities">
                                            <p class="title">Activities / Sightseeing</p>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td width="20%" class="day text-center align-middle">Day 1</td>
                                                    <td class="locations text-start">
                                                        Arafat, Jabl E Rehmat, Jabl E Sour, Jable E Noor, Jamaraat, Jannat Ul Muallah, Masjid Al-Jinn, Masjid Al-Khaif, Masjid al-Mashar al-Haram, Masjid Fatah, Masjid Jurana, Masjid Nimrah, Masjid Shajarah, Mina, Muzdalifa, Ghazwa-e-Khandaq (Masjid E Sabaa ), Jabl E Uhud, Jannatul Baqi, Masijd Ali, Masjid Al-Ghamamah, Masjid E Jumma, Masjid E Qiblatain, Masjid E Quba, Masjid E Umar, Masjid E Usman, Masjid Ijaaba, Shuhada Uhud
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Inclusion Tab -->
                                <div class="tab-pane fade" id="inclusion" role="tabpanel" aria-labelledby="inclusion-tab">
                                    <div class="inclusion-section mb-3">
                                        <div class="inclusions" style="max-height: 300px; overflow-y: auto;">
                                            <h4>Inclusions</h4>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-check-circle text-success"></i> Return Air Tickets.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Umrah Visa with Insurance.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Hotel Stay in Makkah & Madinah.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Food: Indian Set Menu (3 Meals).</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Ziarats in Makkah & Madinah.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Round Trip Transfers.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Complimentary items provided by the Tour operator (Not for bookings without bed).</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Saudi Simcard.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Laundry (2 times in Makkah and 2 times in Madinah).</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Zamzam.</li>
                                                <li><i class="bi bi-check-circle text-success"></i> Internal Transportation by bus in Groups.</li>
                                            </ul>
                                            <p><strong>Note:</strong> Travel Bags, Laundry, Sim Cards, Zamzam are Complimentary items given as Free Gifts by the Tour operator. Laundry (2 times in Makkah and 2 times in Madinah) will be provided Complimentary by the Tour Operator.</p>
                                        </div>


                                    </div>
                                </div>

                                <!-- Exclusion Tab -->
                                <div class="tab-pane fade" id="exclusion" role="tabpanel" aria-labelledby="exclusion-tab">
                                    <div class="exclusion-section mb-3">
                                        <div class="exclusions">
                                            <h4>Exclusions</h4>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-x-circle text-danger"></i> GST & TCS.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> Private & Personal Transfers.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> Room Service.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> Anything not Mentioned in Inclusions.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> Bucket and Tubs will not be available in hotels.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> No Fans are available in Rooms, only AC.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> Indian Toilets are not available, only English Toilets.</li>
                                                <li><i class="bi bi-x-circle text-danger"></i> Water is available only on Buffet, not in Rooms.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dates Tab -->
                                <div class="tab-pane fade" id="dates" role="tabpanel" aria-labelledby="dates-tab">
                                    <div class="dates-section mb-3">
                                        <h4 class="text-success fw-semibold">Departure Dates</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 ">
                        <div class="py-1">
                            <label for="stateSelect" class="form-label">Departure City:</label>
                            <select id="stateSelect" class="form-select">
                                <option value="" selected disabled>Choose a Departure City</option>
                                <option value="delhi">Delhi</option>
                                <option value="maharashtra">Maharashtra</option>
                                <option value="uttar-pradesh">Uttar Pradesh</option>
                            </select>
                        </div>
                        <div class="py-1">
                            <label for="packageSelect" class="form-label">Select Package:</label>
                            <select id="packageSelect" class="form-select">
                                <option value="" selected disabled>Choose a package</option>
                                <option value="super-saver">Super Saver</option>
                                <option value="gold">Gold</option>
                                <option value="bronze">Bronze</option>
                            </select>
                        </div>
                        <div class="text-center py-3">
                            <h6>Starting From</h6>
                            <h4>INR 29,146</h4>
                            {{-- <p>Hexa Sharing</p> --}}
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="btn btn-dark w-100 fw-semibold">Get Quote</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="btn btn-dark w-100 fw-semibold">Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @if($isOpen)
        <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><i class="fas fa-calendar-check"></i> Book Now</h5>
                        <button type="button" class="btn-close text-white" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <livewire:CommonForm :package="$package" />
                    </div>
                </div>
            </div>
        </div>
    @endif



        <!--enquire form start-->
      {{-- @if ($umrahEmquire) --}}
      <div id="popupContainer">
        <div id="popupForm" class="popup-form hdden">
          <div class="form-container">
            <button id="closeForm" class="close-btn" wire:click='umrahEnquirePopupClose'>&times;</button>
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
                <input type="text" id="mobile" placeholder="Enter your mobile number" wire:model='mobile' required>
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
        document.getElementById('popupContainer').classList.add('show');
    }, 4000); // Show the form after 3 seconds
});

// JavaScript function to close the form
function closeForm() {
    document.getElementById('popupContainer').classList.remove('show');
}
</script>

<style>
    /* Scoped Styles for #popupContainer */

  /* Global Container for Scoping */
  #popupContainer {
    position: relative;
    display: none;
          opacity: 0;
          transition: opacity 0.3s ease;
  }

  #popupContainer.show {
          display: block;
          opacity: 1;
      }
  /* Open Form Button */
  #popupContainer .open-form-btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  #popupContainer .open-form-btn:hover {
    background-color: #0056b3;
  }

  /* Popup Form */
  #popupContainer .popup-form {
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
  #popupContainer .hidden {
    display: none;
  }

  /* Form Container */
  #popupContainer .form-container {
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
  #popupContainer .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: transparent;
    border: none;
    font-size: 20px;
    cursor: pointer;
  }

  /* Form Title */
  #popupContainer .form-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
  }

  /* Form Group */
  #popupContainer .form-group {
    margin-bottom: 15px;
  }
  #popupContainer .form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #555;
  }
  #popupContainer .form-group input,
  #popupContainer .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
  }

  /* Submit Button */
  #popupContainer .submit-btn {
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
  #popupContainer .submit-btn:hover {
    background-color: #218838;
  }

  </style>






      {{-- @endif --}}
        <!---enquire form end-->
    <!-- Room End -->
</section>
