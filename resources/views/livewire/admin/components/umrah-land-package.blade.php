<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Create Package Master</h5>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif
                  <form class="row g-3" wire:submit.prevent="save" onsubmit="event.preventDefault();">
                        
                        <!-- Package Master Name* -->
                        <div class="col-md-6 mb-3">
                            <label for="package_name" class="form-label">Package Master Name*</label>
                            <input type="text" id="package_name" wire:model="package_name" class="form-control" placeholder="Enter Package Master Name">
                            @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Package Name</label>
                            <select class="form-control" id="packageType" wire:model.live="selected_package_type" wr required>
                                <option value="">Select Package Type</option>
                                @foreach ($packageType as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->packageType }}</option>
                                @endforeach
                            </select>
                            @error("selected_package_type") <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="package_days" class="form-label">No Of Days*</label>
                            <input type="number" min="1" id="package_days" wire:model="package_days" class="form-control" placeholder="Enter No of Days">
                            @error('package_days') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                        <label  class="form-label">Service Type</label>
                                <select class="form-control" wire:model="service_type" wire:change="service_type">
                                    <option value="">Select Service Type</option>
                                    @foreach ($packageServiceType as $type )
                                        <option value="{{$type->service_type}}">{{ucfirst($type->service_type)}}</option>
                                    @endforeach
                                </select>
                                @error("service_type")<span class="text-danger">{{ $message }}</span>@enderror
                        </div>


                     <!-- Package Type* -->
                    {{-- <div class="col-md-12 mb-3">
                        <label class="form-label">Package Type</label>

                        <div class="d-flex">
                            @foreach ($packageType as $key => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{ $value->id }}" value="{{ $value->id }}" wire:model.live="package_type_ids">
                                    <label class="form-check-label" for="{{ $value->id }}">{{ $value->packageType }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('packageType') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}

                    <div class="col-md-6 mb-3">
                        <label for="package_days" class="form-label">Departure Type</label>
                        <select class="form-control" wire:model="departure_type" wire:change="changeDeparture($event.target.value)">
                            <option value="">Select Departure Type</option>
                           @foreach ($departureTypes as $type)

                              <option value="{{$type->type}}">{{ucfirst($type->type)}}</option> 
                           @endforeach
                        </select>
                        @error('package_da') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                        <!--Package Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="packageDescription" class="form-label">Description*</label>
                            <textarea id="packageDescription" wire:model="packageDescription" class="form-control" placeholder="Enter Description"></textarea>
                            @error('packageDescription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Package Image -->
                        <div class="col-md-12 mb-3">
                            <label for="packageImage" class="form-label">Package Image</label>
                            <input type="file" id="packageImage" class="form-control" wire:model="packageImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('packageImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($packageImage)
                                <div class="mt-3">
                                    <img src="{{ $packageImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
        
                        </div>


                     <!-- Package Includes -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Package Includes</label>

                        <div class="">
                            @foreach ($packageIncludes as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$value->InclusionName}}" value="{{$value->id}}" wire:model="includes">
                                    <label class="form-check-label" for="{{$value->InclusionName}}">{{ucfirst($value->InclusionName)}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('includes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Flight Name -->
                   
                  @if (strtolower((string) $departure_type) === strtolower((string) $flightValue))
                  <div class="col-md-4 mb-3">
                    <label class="form-label">Flights</label>

                    <div class="">
                        @foreach ($flightList as $index => $value)
                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="{{$value->FlightName}}" value="{{$value->id}}" wire:model="flights">
                                <label class="form-check-label" for="{{$value->FlightName}}">{{ucfirst($value->	FlightName)}}</label>
                            </div>
                        @endforeach
                    </div>
                    @error('flights') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                  
                  @endif

                    <!-- Departure City Name -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Departure City</label>

                        <div class="">
                            @foreach ($DepartureCity as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$value->CityName}}" value="{{$value->CityName}}" wire:model="departureCities">
                                    <label class="form-check-label" for="{{$value->CityName}}">{{ucfirst($value->CityName)}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('departureCity') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Policies -->
                    <h5>Policies</h5>
                    <hr>
                    <!-- Payment Policy -->
                    <div class="col-md-4 mb-3">
                        <label for="paymentPolicy" class="form-label">Payment Policy</label>
                        <textarea id="paymentPolicy" wire:model="paymentPolicy" class="form-control" placeholder="Enter Payment Policy"></textarea>
                        @error('paymentPolicy') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Important Notes -->
                    <div class="col-md-4 mb-3">
                        <label for="importantNotes" class="form-label">Important Notes</label>
                        <textarea id="importantNotes" wire:model="importantNotes" class="form-control" placeholder="Enter Important Notes"></textarea>
                        @error('importantNotes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Cancellation Policy -->
                    <div class="col-md-4 mb-3">
                        <label for="cancellationPolicy" class="form-label">Cancellation Policy</label>
                        <textarea id="cancellationPolicy" wire:model="cancellationPolicy" class="form-control" placeholder="Enter Cancellation Policy"></textarea>
                        @error('cancellationPolicy') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Package Overview -->
                    <h5>Package Overview</h5>
                    <hr>
                    <!-- Flight & Transport -->
                    {{-- <div class="col-md-4 mb-3">
                        <label for="FlightTransport" class="form-label">Flight & Transport</label>
                        <textarea id="FlightTransport" wire:model="FlightTransport" class="form-control" placeholder="Enter Flight & Transport"></textarea>
                        @error('FlightTransport') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="col-lg-12 mb-3  d-flex justify-content-evenly">
                     <!-- Meals -->
                    <div class="col-lg-5 mb-6">
                        <label for="packageMeals" class="form-label">Meals</label>
                        <textarea id="packageMeals" wire:model="packageMeals" class="form-control" placeholder="Enter Meals"></textarea>
                        @error('packageMeals') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Visa & Taxes -->
                    <div class="col-lg-5 mb-6">
                        <label for="packageVisaTaxes" class="form-label">Visa & Taxes</label>
                        <textarea id="packageVisaTaxes" wire:model="packageVisaTaxes" class="form-control" placeholder="Enter Visa & Taxes"></textarea>
                        @error('packageVisaTaxes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>


                    <!-- Inclusion , Exclusion And Itinerary -->
                    <h5>Inclusion , Exclusion And Itinerary</h5>
                    <hr>
                    <!-- Inclusion -->
                    <div class="col-md-4 mb-3">
                        <label for="packageInclusion" class="form-label">Inclusion</label>
                        <textarea id="packageInclusion" wire:model="packageInclusion" class="form-control" placeholder="Enter Inclusion"></textarea>
                        @error('packageInclusion') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Exclusion -->
                    <div class="col-md-4 mb-3">
                        <label for="packageExclusion" class="form-label">Exclusion</label>
                        <textarea id="packageExclusion" wire:model="packageExclusion" class="form-control" placeholder="Enter Exclusion"></textarea>
                        @error('packageExclusion') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Itinerary -->
                    <div class="col-md-4 mb-3">
                        <label for="packageItinerary" class="form-label">Itinerary</label>
                        <textarea id="packageItinerary" wire:model="packageItinerary" class="form-control" placeholder="Enter Itinerary"></textarea>
                        @error('packageItinerary') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    

                    @if ($this->package_type_ids != null)
                     @foreach ( $package_type_ids as $k => $v )
                         <hr>
                         <div class="card-header">
                            @foreach ($packageType as $key => $value)
                               @if ( $v == $value->id)
                                  <h4>{{ $value->packageType }}</h4>
                               @endif 
                            @endforeach
                        </div>
                        <div class="col-lg-12 mb-3 d-flex justify-content-evenly">

                            <!-- Makkah Hotel -->
                            <div class="col-lg-4">
                                <label for="SuperSaver_makkahHotelRatings" class="form-label">Makkah Hotel Category</label>
                                <select class="form-control" name="makka_rating" wire:model="makka_rating.{{$k}}" wire:change="getMakkaHotel({{ $k }})">
                                     <option value="">{{ 'Select' }} {{ 'Makka Hotel Category' }} </option>
                                     <option value="1">One Star</option>
                                     <option value="2">Two Star</option>
                                     <option value="3">Three Star</option>
                                     <option value="4">Four Star</option>
                                     <option value="5">Five Star</option>
                                     <option value="7">Standard Hotel</option>
                                     <option value="6">Building Accommodation</option>
                                </select>
                                @error("makka_rating.{$k}")<span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Display the fetched hotel names dynamically -->
                            <div class="col-lg-4">
                                <label  class="form-label">Makkah Hotel</label>
                                <select class="form-control" id="makka_hotel{{ $k }}" name="makka_hotel" wire:model="makka_hotel.{{ $k }}">
                                    <option value="">Select Hotels</option>
                                    @if (!empty($makkaHotel[$k]))
                                        @foreach ($makkaHotel[$k] as $id => $hotelName)
                                            <option value="{{ $id }}">{{ $hotelName }}</option>
                                        @endforeach
                                    @endif  
                                </select>
                                @error("makka_hotel.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Makkah Nights -->
                            <div class="col-lg-4 mb-3">
                                <label for="makkah_nights" class="form-label">Makkah Nights</label>
                                <input type="number" id="makkah_nights" wire:model="makkah_nights" class="form-control" placeholder="Enter Makkah Nights">
                                @error('makkah_nights') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-evenly">
                            <!-- Madina Hotel -->
                            <div class="col-lg-4">
                            <label  class="form-label">Madina Hotel Category</label>
                                <select class="form-control" wire:model="madina_rating.{{ $k }}" wire:change="getMadinaHotel({{ $k }})">
                                    <option value="">{{ 'Madina Hotel Category' }}</option>
                                    <option value="1">One Star</option>
                                    <option value="2">Two Star</option>
                                    <option value="3">Three Star</option>
                                    <option value="4">Four Star</option>
                                    <option value="5">Five Star</option>
                                    <option value="7">Standard Hotel</option>
                                    <option value="6">Building Accommodation</option>
                                </select>
                                @error("madina_rating.{$k}")<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <!-- Display the fetched hotel names dynamically -->
                            <div class="col-lg-4">
                            <label  class="form-label">Madina Hotel</label>
                            <select class="form-control" id="madina_hotel{{ $k }}" wire:model="madina_hotel.{{ $k }}">
                                <option value="">Select Hotels</option>
                                    @if (!empty($madinaHotel[$k]))
                                        @foreach ($madinaHotel[$k] as $id => $hotel_name)
                                            <option value="{{ $id }}">{{ $hotel_name }}</option>
                                        @endforeach
                                    @endif
                            </select>
                            @error("madina_hotel.{$k}")<span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Madina Hotel -->

                            <!-- madina Nights -->
                            <div class="col-lg-4 mb-3">
                                <label for="madina_nights" class="form-label">Madina Nights</label>
                                <input type="number" id="madina_nights" wire:model="madina_nights" class="form-control" placeholder="Enter Madina Nights">
                                @error('madina_nights') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                      </div>
                      <div class="col-lg-12 d-flex justify-content-evenly">
                          <!-- Meal Type -->
                          <div class="col-lg-6">
                            <label for="SuperSaver_MealType" class="form-label">Meal Type</label>
                            <select class="form-control" wire:model="food_type.{{ $k }}" >
                                <option value="">Select Meal Type</option>
                                @foreach ($foodController as $index => $value)
                                  <option value="{{$value->id }}">{{$value->foodType}}</option>
                                @endforeach
                            </select>
                            @error("food_type.{$k}")<span class="text-danger">{{ $message }}</span>@enderror
                         </div>
                         <!-- Laundry Type -->
                          <div class="col-lg-6">
                                <label  class="form-label">Laundry Type</label>
                                <select class="form-control" wire:model="laundray_type.{{ $k }}">
                                    <option value="">Select Laundry Type</option>
                                    @foreach ($laundrayController as $index => $value)
                                    <option value="{{$value->id }}">{{$value->laundry_type}}</option>
                                    @endforeach
                                </select>
                                @error("laundray_type.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                      </div>
  
                      <div class="col-lg-12 mb-3 d-flex justify-content-evenly">

                           <!-- Sharing -->
                            <div class="col-lg-4">
                                <label class="form-label">Sharing*</label>
                                <input type="text" id="g_share_price{{ $k }}" wire:model="g_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <!-- Quint -->
                            <div class="col-lg-4">
                                <label  class="form-label">Quint*</label>
                                <input type="text" id="SuperSaver_Quint" wire:model="qt_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Quad -->
                            <div class="col-lg-4">
                                <label class="form-label">Quad*</label>
                                <input type="text" id="qd_share_price{{ $k }}" wire:model="qd_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("qd_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                           
                      </div>
                      <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                         <!-- Triple -->
                         <div class="col-lg-4">
                                <label  class="form-label">Triple*</label>
                                <input type="text" id="t_share_price{{ $k }}" wire:model="t_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("t_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        <!-- Double -->
                            <div class="col-lg-4">
                                <label  class="form-label">Double*</label>
                                <input type="text" id="d_share_price{{ $k }}" wire:model="d_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("d_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        <!-- Single -->
                            <div class="col-lg-4">
                                <label  class="form-label">Single*</label>
                                <input type="text" id="single_price{{ $k }}" wire:model="single_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("single_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-12  mb-3 d-flex justify-content-evenly">
                            <!-- Child with Bed* -->
                            <div class="col-lg-4">
                                <label  class="form-label">Child With Bed*</label>
                                <input type="text" id="child_w_b{{ $k }}" wire:model="child_w_b.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_w_b.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Child without Bed* -->
                            <div class="col-lg-4">
                                <label class="form-label">Child Without Bed*</label>
                                <input type="text" id="child_wo_b{{ $k }}" wire:model="child_wo_b.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_wo_b.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-4">
                                <label  class="form-label">Child Infant*</label>
                                <input type="text" id="infants{{ $k }}" wire:model="infants.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("infants.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                     @endforeach
                    @endif

                    <!-- Submit Button -->
                    <div class="col-md-4 d-flex justify-content-end">
                        <button class="btn btn-primary w-100">Submit Hotel Details</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
