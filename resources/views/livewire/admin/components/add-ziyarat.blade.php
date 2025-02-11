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
                      <div class="col-md-6 mb-3">
                            <label for="package_name" class="form-label">Package Master Name*</label>
                            <input type="text" id="package_name" wire:model="package_name" class="form-control" placeholder="Enter Package Master Name">
                            @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                     <div class="col-md-6 mb-3">
                            <label class="form-label">Package Name</label>
                            <select class="form-control" id="service_type" wire:model.live="service_type" required>
                                <option value="">Select Package Type</option>
                                @foreach ($ziyaratCity as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->ziyarat_city }}</option>
                                @endforeach
                            </select>
                            @error("service_type") <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label for="package_days" class="form-label">No Of Days*</label>
                            <input type="number" min="1" id="package_days" wire:model="package_days" class="form-control" placeholder="Enter No of Days">
                            @error('package_days') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--Package Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="packageDescription" class="form-label">Description*</label>
                            <textarea id="packageDescription" wire:model="packageDescription" class="form-control" placeholder="Enter Description"></textarea>
                            @error('packageDescription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Package Image -->
                        <div class="col-md-12 mb-6">
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
                                    <label class="form-check-label" for="{{$value->InclusionName}}">{{$value->InclusionName}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('includes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Flight Name -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Flights</label>

                        <div class="">
                            @foreach ($flightList as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$value->FlightName}}" value="{{$value->id}}" wire:model="flights">
                                    <label class="form-check-label" for="{{$value->FlightName}}">{{$value->	FlightName}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('flights') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Departure City Name -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Departure City</label>

                        <div class="">
                            @foreach ($DepartureCity as $index => $value)
                                <div class="form-check" style="margin-right:20px">
                                    <input class="form-check-input" type="checkbox" id="{{$value->CityName}}" value="{{$value->CityName}}" wire:model="departureCities">
                                    <label class="form-check-label" for="{{$value->CityName}}">{{$value->CityName}}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('departureCities') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                  <!-- Laundry Type -->


                            <!-- Meal Type -->


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

                      <div class="col-lg-12 mb-3 d-flex justify-content-evenly">

                           <!-- Sharing -->
                            <div class="col-lg-3">
                                <label class="form-label">Sharing*</label>
                                <input type="text" id="g_share_price" wire:model="g_share_price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("g_share_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Quint -->
                            <div class="col-lg-3">
                                <label  class="form-label">Quint*</label>
                                <input type="text" id="SuperSaver_Quint" wire:model="qt_share_price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("qt_share_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Quad -->
                            <div class="col-lg-3">
                                <label class="form-label">Quad*</label>
                                <input type="text" id="qd_share_price" wire:model="qd_share_price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("qd_share_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                      </div>
                      <div class="col-lg-12 mb-3 d-flex justify-content-evenly">

                           <!-- Triple -->
                            <div class="col-lg-3">
                                <label  class="form-label">Triple*</label>
                                <input type="text" id="t_share_price" wire:model="t_share_price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("t_share_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        <!-- Double -->
                            <div class="col-lg-3">
                                <label  class="form-label">Double*</label>
                                <input type="text" id="d_share_price" wire:model="d_share_price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("d_share_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        <!-- Single -->
                            <div class="col-lg-3">
                                <label  class="form-label">Single*</label>
                                <input type="text" id="single_price" wire:model="single_price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("single_price") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-lg-12  mb-3 d-flex justify-content-evenly">
                            <!-- Child with Bed* -->
                            <div class="col-lg-3">
                                <label  class="form-label">Child With Bed*</label>
                                <input type="text" id="child_w_b" wire:model="child_w_b" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_w_b") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Child without Bed* -->
                            <div class="col-lg-3">
                                <label class="form-label">Child Without Bed*</label>
                                <input type="text" id="child_wo_b" wire:model="child_wo_b" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("child_wo_b") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-lg-3">
                                <label  class="form-label">Child Infant*</label>
                                <input type="text" id="infants" wire:model="infants" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                @error("infants") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="d-flex">
                            <button type="button" wire:click="increaseHotelFields" class="btn btn-primary mx-3">Add Hotel</button>
                            <button type="button" wire:click="decreaseHotelFields" class="btn btn-danger mx-3">Remove Hotel</button>
                        </div>


                        @foreach ($hotels as $index => $hotel)
                            <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                                <!-- Hotel City -->
                                <div class="col-lg-3">
                                    <label class="form-label">Hotel City</label>
                                    <select class="form-control" wire:model="hotels.{{$index}}.city">
                                        <option value="">Select Hotel City</option>
                                        @foreach ($HotelCities as $Hotelcity)
                                            <option value="{{ $Hotelcity->hotel_city }}">{{ $Hotelcity->hotel_city }}</option>
                                        @endforeach
                                    </select>
                                    @error("hotels.{$index}.city") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <!-- Hotel Category -->
                                <div class="col-lg-3">
                                    <label class="form-label">Hotel Category</label>
                                    <select class="form-control" wire:model="hotels.{{$index}}.category" wire:change="getHotelCategory({{$index}})">
                                        <option value="">Select Hotel Category</option>
                                        <option value="1">One Star</option>
                                        <option value="2">Two Star</option>
                                        <option value="3">Three Star</option>
                                        <option value="4">Four Star</option>
                                        <option value="5">Five Star</option>
                                        <option value="Standard Hotel">Standard Hotel</option>
                                        <option value="Building Accommodation">Building Accommodation</option>
                                    </select>
                                    @error("hotels.{$index}.category") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <!-- Hotel Name -->
                                <div class="col-lg-3">
                                    <label class="form-label">Hotel Name</label>
                                    <select class="form-control" wire:model="hotels.{{$index}}.selected_name">
                                        <option value="">Select Hotel Name</option>
                                        @if (!empty($hotel['names']) && is_array($hotel['names']))
                                            @foreach ($hotel['names'] as $id => $hotelName)
                                                <option value="{{ $id }}">{{ $hotelName  }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error("hotels.{$index}.selected_name") <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        @endforeach

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
