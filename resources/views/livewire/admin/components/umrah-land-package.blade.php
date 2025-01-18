<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Create Package Master</h5>
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
                            <input type="text" id="package_name" wire:model="package_name" class="form-control" placeholder="Enter Package Master Name">
                            @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                     <!-- Package Type* -->
                     <div class="col-md-12 mb-3">
                        <label class="form-label">Package Includes</label>

                        <div class="d-flex">
                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="SuperSaver" value="1" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="SuperSaver">Super Saver</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Royal" value="2" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Royal">Royal</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Classic" value="3" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Classic">Classic</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Bronze" value="4" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Bronze">Bronze</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Silver" value="5" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Silver">Silver</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Gold" value="6" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Gold">Gold</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Elite" value="7" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Elite">Elite</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Esteem" value="8" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Esteem">Esteem</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="Executive" value="9" wire:model.live="package_type_ids">
                                <label class="form-check-label" for="Executive">Executive</label>
                            </div>
                        </div>

                        @error('packageType') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                        <!--Package Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="packageDescription" class="form-label">Description*</label>
                            <textarea id="packageDescription" wire:model="packageDescription" class="form-control" placeholder="Enter Description"></textarea>
                            @error('packageDescription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Package Image -->
                        <div class="col-md-6 mb-3">
                            <label for="packageImage" class="form-label">Package Image</label>
                            <input type="file" id="packageImage" class="form-control" wire:model="packageImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('packageImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($packageImage)
                                <div class="mt-3">
                                    <img src="{{ $packageImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            {{--@elseif ($hotelId && $hotelMainImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelMainImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif--}}
                            @endif
                        </div>


                     <!-- Package Includes -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Package Includes</label>

                        <div class="d-flex">
                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="zamzam" value="zamzam" wire:model="includes">
                                <label class="form-check-label" for="zamzam">Zamzam</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="transfers" value="transfers" wire:model="includes">
                                <label class="form-check-label" for="transfers">Transfers</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="saudiSim" value="saudiSim" wire:model="includes">
                                <label class="form-check-label" for="saudiSim">Saudi Sim</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="welcomeKit" value="welcomeKit" wire:model="includes">
                                <label class="form-check-label" for="welcomeKit">Welcome Kit</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="meals" value="meals" wire:model="includes">
                                <label class="form-check-label" for="meals">Meals</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="ziyarat" value="ziyarat" wire:model="includes">
                                <label class="form-check-label" for="ziyarat">Ziyarat</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="visa" value="visa" wire:model="includes">
                                <label class="form-check-label" for="visa">Visa</label>
                            </div>

                            <div class="form-check" style="margin-right:20px">
                                <input class="form-check-input" type="checkbox" id="ticket" value="ticket" wire:model="includes">
                                <label class="form-check-label" for="ticket">Ticket</label>
                            </div>
                        </div>
                        @error('includes') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <div class="col-md-4 mb-3">
                        <label for="FlightTransport" class="form-label">Flight & Transport</label>
                        <textarea id="FlightTransport" wire:model="FlightTransport" class="form-control" placeholder="Enter Flight & Transport"></textarea>
                        @error('FlightTransport') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Meals -->
                    <div class="col-md-4 mb-3">
                        <label for="packageMeals" class="form-label">Meals</label>
                        <textarea id="packageMeals" wire:model="packageMeals" class="form-control" placeholder="Enter Meals"></textarea>
                        @error('packageMeals') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Visa & Taxes -->
                    <div class="col-md-4 mb-3">
                        <label for="packageVisaTaxes" class="form-label">Visa & Taxes</label>
                        <textarea id="packageVisaTaxes" wire:model="packageVisaTaxes" class="form-control" placeholder="Enter Visa & Taxes"></textarea>
                        @error('packageVisaTaxes') <span class="text-danger">{{ $message }}</span> @enderror
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
                            @if ($v == 1)
                              <h4>Super Saver</h4>
                            @elseif($v == 2)
                              <h4>Gold</h4>
                            @elseif($v == 3)
                              <h4>Silver</h4>
                            @elseif($v == 4)
                              <h4>Executive</h4>
                            @elseif($v == 5)
                              <h4>Esteem</h4>
                            @elseif($v == 6)
                              <h4>Elite</h4>
                            @elseif($v == 7)
                              <h4>Bronze</h4>
                            @elseif($v == 8)
                              <h4>Royal</h4>
                            @elseif($v == 9)
                              <h4>Classic</h4>
                            @endif
                        </div>
                        <div class="col-lg-12 mb-3 d-flex justify-content-evenly">

                            <!-- Makkah Hotel -->
                            <div class="col-lg-2">
                                <label for="SuperSaver_makkahHotelRatings" class="form-label">Makka Hotel Category</label>
                                <select class="form-control" name="makka_rating" wire:model="makka_rating.{{$k}}" wire:change="getMakkaHotel({{ $k }})">
                                     <option value="">{{ 'Select' }} {{ 'Makka Hotel Category' }} </option>
                                     <option value="1">One Star</option>
                                     <option value="2">Two Star</option>
                                     <option value="3">Three Star</option>
                                     <option value="4">Four Star</option>
                                     <option value="5">Five Star</option>
                                     <option value="Standard Hotel">Standard Hotel</option>
                                     <option value="Building Accommodation">Building Accommodation</option>
                                </select>
                                @error("makka_rating.{$k}")<span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Display the fetched hotel names dynamically -->
                            <div class="col-lg-2">
                                <label  class="form-label">Makka Hotel</label>
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
                            <!-- Madina Hotel -->
                            <div class="col-lg-2">
                            <label  class="form-label">Madina Hotel Category</label>
                                <select class="form-control" wire:model="madina_rating.{{ $k }}" wire:change="getMadinaHotel({{ $k }})">
                                    <option value="">{{ 'Madina Hotel Category' }}</option>
                                    <option value="1">One Star</option>
                                    <option value="2">Two Star</option>
                                    <option value="3">Three Star</option>
                                    <option value="4">Four Star</option>
                                    <option value="5">Five Star</option>
                                    <option value="Standard Hotel">Standard Hotel</option>
                                    <option value="Building Accommodation">Building Accommodation</option>
                                </select>
                                @error("madina_rating.{$k}")<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <!-- Display the fetched hotel names dynamically -->
                            <div class="col-lg-2">
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
                            <!-- Meal Type -->
                            <div class="col-lg-2">
                            <label for="SuperSaver_MealType" class="form-label">Meal Type</label>
                            <select class="form-control" wire:model="food_type.{{ $k }}" >
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
                            @error("food_type.{$k}")<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                      </div>
                      <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                           <!-- Laundry Type -->
                            <div class="col-lg-2">
                                <label  class="form-label">Laundry Type</label>
                                <select class="form-control" wire:model="laundray_type.{{ $k }}">
                                    <option value="">Select Laundry Type</option>
                                    <option value="1">One Time</option>
                                    <option value="2">Two Time</option>
                                    <option value="3">Three Time</option>
                                    <option value="4">Daily</option>
                                    <option value="5">Alternative Days</option>
                                </select>
                                @error("laundray_type.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                           <!-- Sharing -->
                            <div class="col-lg-2">
                                <label class="form-label">Sharing*</label>
                                <input type="text" id="g_share_price{{ $k }}" wire:model="g_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                            <!-- Quint -->
                            <div class="col-lg-2">
                                <label  class="form-label">Quint*</label>
                                <input type="text" id="SuperSaver_Quint" wire:model="qt_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Quad -->
                            <div class="col-lg-2">
                                <label class="form-label">Quad*</label>
                                <input type="text" id="qd_share_price{{ $k }}" wire:model="qd_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("qd_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Triple -->
                            <div class="col-lg-2">
                                <label  class="form-label">Triple*</label>
                                <input type="text" id="t_share_price{{ $k }}" wire:model="t_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("t_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                      </div>
                      <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                        <!-- Double -->
                            <div class="col-lg-2">
                                <label  class="form-label">Double*</label>
                                <input type="text" id="d_share_price{{ $k }}" wire:model="d_share_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("d_share_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        <!-- Single -->
                            <div class="col-lg-2">
                                <label  class="form-label">Single*</label>
                                <input type="text" id="single_price{{ $k }}" wire:model="single_price.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("single_price.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Child with Bed* -->
                            <div class="col-lg-2">
                                <label  class="form-label">Child With Bed*</label>
                                <input type="text" id="child_w_b{{ $k }}" wire:model="child_w_b.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_w_b.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Child without Bed* -->
                            <div class="col-lg-2">
                                <label class="form-label">Child Without Bed*</label>
                                <input type="text" id="child_wo_b{{ $k }}" wire:model="child_wo_b.{{ $k }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_wo_b.{$k}") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-2">
                                <label  class="form-label">Child Infant Bed*</label>
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