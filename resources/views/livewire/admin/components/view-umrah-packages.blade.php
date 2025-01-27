<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">View Package Master</h5>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                  <form class="row g-3" wire:submit.prevent="save" onsubmit="event.preventDefault();">
                        
                        <!-- Package Master Name* -->
                        <div class="col-md-12 mb-3">
                            <label for="package_name" class="form-label">Package Master Name*</label>
                            <input type="text" id="package_name" wire:model="package_name" class="form-control" placeholder="Enter Package Master Name" readonly>
                            @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                     <!-- Package Type* -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Package Type</label>

                        <div class="d-flex">
                            @foreach ($packageType as $key => $value)
                            
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$key}}" value="{{ $key }}" wire:model.live="package_type_ids" readonly>
                                    <label class="form-check-label" for="{{$key }}">{{ $value }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('packageType') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                        <!--Package Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label">Description*</label>
                            <textarea id="description" wire:model="description" class="form-control" placeholder="Enter Description" readonly></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Package Image -->
                        <div class="col-md-6 mb-3">
                            <label for="packageImage" class="form-label">Package Image</label>
                            <input type="file" id="packageImage" class="form-control" wire:model="packageImage" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('packageImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($packageImage)
                                <div class="mt-3">
                                    <img src="{{ $packageImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ( $packageImagePath)
                                <div class="mt-3">

                                    <img src="{{ Storage::url($packageImagePath)}}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
        
                        </div>


                     <!-- Package Includes -->
                 <div class="col-md-12 mb-3">
                        <label class="form-label">Package Includes</label>

                        <div class="d-flex">
                            @foreach ($package_includes as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" readonly id="{{$index}}" value="{{$index}}" wire:model="package_includes_ids">
                                    <label class="form-check-label" for="{{$index}}">{{$value}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('package_includes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Flight Name -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Flights</label>

                        <div class="d-flex">
                            @foreach ($flights as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$index}}" value="{{$index}}" wire:model="flight_ids" readonly>
                                    <label class="form-check-label" for="{{$index}}">{{$value}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('flights') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 

                    <!-- Departure City Name -->
                   <div class="col-md-12 mb-3">
                        <label class="form-label">Departure City</label>

                        <div class="d-flex">
                            @foreach ($departureCities as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$index}}" value="{{$index}}" wire:model="departure_city_id" readonly>
                                    <label class="form-check-label" for="{{$index}}">{{$value}}</label>
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
                        <label for="payment_policy" class="form-label">Payment Policy</label>
                        <textarea id="payment_policy" wire:model="payment_policy" class="form-control" placeholder="Enter Payment Policy" readonly></textarea>
                        @error('payment_policy') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Important Notes -->
                    <div class="col-md-4 mb-3">
                        <label for="important_notes" class="form-label">Important Notes</label>
                        <textarea id="important_notes" wire:model="important_notes" class="form-control" placeholder="Enter Important Notes" readonly></textarea>
                        @error('important_notes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Cancellation Policy -->
                    <div class="col-md-4 mb-3">
                        <label for="cancellation_policy" class="form-label">Cancellation Policy</label>
                        <textarea id="cancellation_policy" wire:model="cancellation_policy" class="form-control" placeholder="Enter Cancellation Policy" readonly></textarea>
                        @error('cancellation_policy') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Package Overview -->
                    <h5>Package Overview</h5>
                    <hr>
                    <!-- Flight & Transport -->
                    <div class="col-md-4 mb-3">
                        <label for="flight_transport" class="form-label">Flight & Transport</label>
                        <textarea id="flight_transport" wire:model="flight_transport" class="form-control" placeholder="Enter Flight & Transport" readonly></textarea>
                        @error('flight_transport') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Meals -->
                    <div class="col-md-4 mb-3">
                        <label for="packageMeals" class="form-label">Meals</label>
                        <textarea id="packageMeals" wire:model="packageMeals" class="form-control" placeholder="Enter Meals" readonly></textarea>
                        @error('packageMeals') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Visa & Taxes -->
                    <div class="col-md-4 mb-3">
                        <label for="visa_taxes" class="form-label">Visa & Taxes</label>
                        <textarea id="visa_taxes" wire:model="visa_taxes" class="form-control" placeholder="Enter Visa & Taxes" readonly></textarea>
                        @error('visa_taxes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Inclusion , Exclusion And Itinerary -->
                    <h5>Inclusion , Exclusion And Itinerary</h5>
                    <hr>
                    <!-- Inclusion -->
                    <div class="col-md-4 mb-3">
                        <label for="inclusion" class="form-label">Inclusion</label>
                        <textarea id="inclusion" wire:model="inclusion" class="form-control" placeholder="Enter Inclusion" readonly></textarea>
                        @error('inclusion') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Exclusion -->
                    <div class="col-md-4 mb-3">
                        <label for="exlusion" class="form-label">Exclusion</label>
                        <textarea id="exlusion" wire:model="exlusion" class="form-control" placeholder="Enter Exclusion" readonly></textarea>
                        @error('exlusion') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Itinerary -->
                    <div class="col-md-4 mb-3">
                        <label for="itinerary" class="form-label">Itinerary</label>
                        <textarea id="itinerary" wire:model="itinerary" class="form-control" placeholder="Enter Itinerary" readonly></textarea>
                        @error('itinerary') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    

                    @if ($this->package_type_ids != null)
                     @foreach ( $package_type_ids as $k => $v )
                         <hr>
                         
                         <div class="card-header">
                            @foreach ($packageType as $key => $value)
                               @if ( $v == $key )
                                   <h4>{{$value}}</h4>
                               @endif 
                            @endforeach
                        </div>
                       
                        <div class="col-lg-12 mb-3 d-flex justify-content-evenly">

                            <!-- Makkah Hotel -->
                            <div class="col-lg-2">
                                <label for="SuperSaver_makkahHotelRatings" class="form-label">Makka Hotel Category</label>
                                <select class="form-control" name="makka_rating" wire:model="makka_rating.{{$v}}"  disabled   wire:change="getMakkaHotel({{ $v }})">
                                    
                                    <option value="">{{ 'Select' }} {{ 'Makka Hotel Category' }} </option>
                                     <option value="1">One Star</option>
                                     <option value="2">Two Star</option>
                                     <option value="3">Three Star</option>
                                     <option value="4">Four Star</option>
                                     <option value="5">Five Star</option>
                                     <option value="Standard Hotel">Standard Hotel</option>
                                     <option value="Building Accommodation">Building Accommodation</option>
                                </select>
                                @error("makka_rating.{$v}")<span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Display the fetched hotel names dynamically -->
                            <div class="col-lg-2">
                                <label  class="form-label">Makka Hotel</label>
                                <select class="form-control" id="makka_hotel{{ $v }}" name="makka_hotel" disabled wire:model="makka_hotel.{{ $v }}">
                                    <option value="">Select Hotels</option>
                                    @if (!empty($makkaHotel[$v]))
                                        @foreach ($makkaHotel[$v] as $id => $hotelName)
                                            <option value="{{ $id }}">{{ $hotelName }}</option>
                                        @endforeach
                                    @endif  
                                </select>
                                @error("makka_hotel.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Madina Hotel -->
                            <div class="col-lg-2">
                            <label  class="form-label">Madina Hotel Category</label>
                                <select class="form-control" wire:model="madina_rating.{{ $v }}" disabled wire:change="getMadinaHotel({{ $v }})">
                                    <option value="">{{ 'Madina Hotel Category' }}</option>
                                    <option value="1">One Star</option>
                                    <option value="2">Two Star</option>
                                    <option value="3">Three Star</option>
                                    <option value="4">Four Star</option>
                                    <option value="5">Five Star</option>
                                    <option value="Standard Hotel">Standard Hotel</option>
                                    <option value="Building Accommodation">Building Accommodation</option>
                                </select>
                                @error("madina_rating.{$v}")<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <!-- Display the fetched hotel names dynamically -->
                            <div class="col-lg-2">
                            <label  class="form-label">Madina Hotel</label>
                            <select class="form-control" id="madina_hotel{{ $v }}" wire:model="madina_hotel.{{ $v }}" disabled>
                                <option value="">Select Hotels</option>
                                    @if (!empty($madinaHotel[$v]))
                                        @foreach ($madinaHotel[$v] as $id => $hotel_name)
                                            <option value="{{ $id }}">{{ $hotel_name }}</option>
                                        @endforeach
                                    @endif
                            </select>
                            @error("madina_hotel.{$v}")<span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Madina Hotel -->
                            <!-- Meal Type -->
                            <div class="col-lg-2">
                            <label for="SuperSaver_MealType" class="form-label">Meal Type</label>
                            <select class="form-control" wire:model="food_type.{{ $v }}" disabled>
                                <option value="">Select Meal Type</option>
                                <option value="1">Super Saver</option>
                                <option value="2">Gold</option>
                                <option value="3">Sliver</option>
                                <option value="4">Executive</option>
                                <option value="5">Esteem</option>
                                <option value="6">Elite</option>
                                <option value="7">Bronze</option>
                                <option value="8">Royal</option>
                                <option value="9">Classic</option>
                            </select>
                            @error("food_type.{$v}")<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                           <!-- Laundry Type -->
                            <div class="col-lg-2">
                                <label  class="form-label">Laundry Type</label>
                                <select class="form-control" wire:model="laundray_type.{{ $v }}" disabled>
                                    <option value="">Select Laundry Type</option>
                                    <option value="1">One Time</option>
                                    <option value="2">Two Time</option>
                                    <option value="3">Three Time</option>
                                    <option value="4">Daily</option>
                                    <option value="5">Alternative Days</option>
                                </select>
                                @error("laundray_type.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                           <!-- Sharing -->
                            <div class="col-lg-2">
                                <label class="form-label">Sharing*</label>
                                <input type="text" id="g_share_price{{ $v }}" wire:model="g_share_price.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <!-- Quint -->
                            <div class="col-lg-2">
                                <label  class="form-label">Quint*</label>
                                <input type="text" id="SuperSaver_Quint" wire:model="qt_share_price.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Quad -->
                            <div class="col-lg-2">
                                <label class="form-label">Quad*</label>
                                <input type="text" id="qd_share_price{{ $v }}" wire:model="qd_share_price.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("qd_share_price.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Triple -->
                            <div class="col-lg-2">
                                <label  class="form-label">Triple*</label>
                                <input type="text" id="t_share_price{{ $v }}" wire:model="t_share_price.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("t_share_price.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                        <!-- Double -->
                            <div class="col-lg-2">
                                <label  class="form-label">Double*</label>
                                <input type="text" id="d_share_price{{ $v }}" wire:model="d_share_price.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("d_share_price.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        <!-- Single -->
                            <div class="col-lg-2">
                                <label  class="form-label">Single*</label>
                                <input type="text" id="single_price{{ $v }}" wire:model="single_price.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("single_price.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Child with Bed* -->
                            <div class="col-lg-2">
                                <label  class="form-label">Child With Bed*</label>
                                <input type="text" id="child_w_b{{ $v }}" wire:model="child_w_b.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_w_b.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Child without Bed* -->
                            <div class="col-lg-2">
                                <label class="form-label">Child Without Bed*</label>
                                <input type="text" id="child_wo_b{{ $v }}" wire:model="child_wo_b.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_wo_b.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-2">
                                <label  class="form-label">Child Infant Bed*</label>
                                <input type="text" id="infants{{ $v }}" wire:model="infants.{{ $v }}" class="form-control" readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("infants.{$v}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                     @endforeach
                    @endif

                    <!-- Submit Button -->
                    <!-- <div class="col-md-4 d-flex justify-content-end">
                        <button class="btn btn-primary w-100">Submit Hotel Details</button>
                    </div> -->
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>