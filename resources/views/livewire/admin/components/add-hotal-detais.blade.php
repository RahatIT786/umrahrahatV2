<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">{{$hotelName ? 'Edit Hotal Details' : 'Add Hotal Details'}}</h5>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form class="row g-3 needs-validation" wire:submit.prevent="submit">
                        
                        <!-- Hotel Name -->
                        <div class="col-md-12 mb-3">
                            <label for="hotelName" class="form-label">Hotel Name</label>
                            <input type="text" id="hotelName" wire:model="hotelName" class="form-control" placeholder="Enter Hotel Name">
                            @error('hotelName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <!-- Currency Selection -->
                        <div class="col-md-6 mb-3">
                        <label class="form-label">Select Currency</label>
                            <div class="">
                                <div class="form-check mx-3">
                                    <input type="radio" id="currencyINR" name="currency" value="INR" wire:model="currency" class="form-check-input">
                                    <label for="currencyINR" class="form-check-label">INR</label>
                                </div>
                                <div class="form-check mx-3">
                                    <input type="radio" id="currencyAED" name="currency" value="AED" wire:model="currency" class="form-check-input">
                                    <label for="currencyAED" class="form-check-label">AED</label>
                                </div>
                                <div class="form-check mx-3">
                                    <input type="radio" id="currencyUSD" name="currency" value="USD" wire:model="currency" class="form-check-input">
                                    <label for="currencyUSD" class="form-check-label">USD</label>
                                </div>
                                <div class="form-check mx-3">
                                    <input type="radio" id="currencySAR" name="currency" value="SAR" wire:model="currency" class="form-check-input">
                                    <label for="currencySAR" class="form-check-label">SAR</label>
                                </div>
                            </div>
                            @error('currency') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Select Hotel Amenities</label>
                            <div class=" flex-wrap">
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityTV" value="1" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityTV" class="form-check-label">TV</label>
                                </div>
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityElevator" value="2" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityElevator" class="form-check-label">Elevator</label>
                                </div>
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityFridge" value="3" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityFridge" class="form-check-label">Fridge</label>
                                </div>
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityWashroom" value="4" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityWashroom" class="form-check-label">Attached Washroom</label>
                                </div>
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityAC" value="5" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityAC" class="form-check-label">AC</label>
                                </div>
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityCarpetedRooms" value="6" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityCarpetedRooms" class="form-check-label">Carpeted Rooms</label>
                                </div>
                                <div class="form-check mx-2">
                                    <input type="checkbox" id="amenityIronRooms" value="7" wire:model="hotel_amenities" class="form-check-input">
                                    <label for="amenityIronRooms" class="form-check-label">Iron Rooms</label>
                                </div>
                            </div>
                            @error('hotel_amenities') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!-- Hotel City -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelCity" class="form-label">Hotel City</label>
                            <select class="form-select" id="hotelCity" wire:model="hotelCity">
                                <option value="">Select City</option>
                                @foreach ($hotel_cities as $hotel_city)
                                    <option value="{{$hotel_city->hotel_city}}">{{$hotel_city->hotel_city}}</option>
                                @endforeach
                            </select>
                            @error('hotelCity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Star Rating -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelStarRating" class="form-label">Hotel Star Rating</label>
                            <select class="form-select" id="hotelStarRating" wire:model="hotelStarRating">
                                <option value="">Star Rating</option>
                                <option value="2">2 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="5">5 Stars</option>
                                <option value="6">Building Accomutation Stars</option>
                                <option value="7">Standard Hotel Stars</option>
                            </select>
                            @error('hotelStarRating') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel You Tube Video -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelYouTube" class="form-label">Hotel YouTube Video Link</label>
                            <input type="text" id="hotelYouTube" wire:model="hotelYouTube" class="form-control" placeholder="Enter Hotel YouTube Video Link">
                            @error('hotelYouTube') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel You Tube Video -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelMap" class="form-label">Hotel Map Link</label>
                            <input type="text" id="hotelMap" wire:model="hotelMap" class="form-control" placeholder="Enter Hotel Map Link">
                            @error('hotelMap') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelDiscription" class="form-label">Hotel Discription</label>
                            <textarea id="hotelDiscription" wire:model="hotelDiscription" class="form-control" placeholder="Enter Hotel Discription"></textarea>
                            @error('hotelDiscription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!-- Hotel Address -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelAddress" class="form-label">Hotel Address</label>
                            <textarea id="hotelAddress" wire:model="hotelAddress" class="form-control" placeholder="Enter Hotel Address"></textarea>
                            @error('hotelAddress') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Manager Contect -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelManagerContect" class="form-label">Hotel Manager Contect</label>
                            <textarea id="hotelManagerContect" wire:model="hotelManagerContect" class="form-control" placeholder="Enter Manager Contect"></textarea>
                            @error('hotelManagerContect') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--Hotel Distance-->
                        <div class="col-md-6 mb-3">
                            <label for="hotelDistance" class="form-label">Distance away from Center City</label>
                            <input type="number" min="0" id="hotelDistance" class="form-control" wire:model="hotelDistance" placeholder="Enter Distance away from Center City">
                            @error('hotelDistance') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!--Hotel CheckIn Time-->
                        <div class="col-md-6 mb-3">
                            <label for="hotelCheckInTime" class="form-label">Hotel Check In Time</label>
                            <input type="time" id="hotelCheckInTime" class="form-control" wire:model="hotelCheckInTime" placeholder="Enter Check In Time">
                            @error('hotelCheckInTime') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--Hotel CheckOut Time-->
                        <div class="col-md-6 mb-3">
                            <label for="hotelCheckOutTime" class="form-label">Hotel Check Out Time</label>
                            <input type="time"  id="hotelCheckOutTime" class="form-control" wire:model="hotelCheckOutTime" placeholder="Enter Check Out Time">
                            @error('hotelCheckOutTime') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <!-- File Upload for Main Hotel Image -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelMainImage" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelMainImage" class="form-control" wire:model="hotelMainImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelMainImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelMainImage)
                                <div class="mt-3">
                                    <img src="{{ $hotelMainImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($hotelId && $hotelMainImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelMainImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 1 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage1" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage1" class="form-control" wire:model="hotelImage1" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage1') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage1)
                                <div class="mt-3">
                                    <img src="{{ $hotelImage1->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($hotelId && $hotelImage1Path)
                                <div class="mt-3">
                                    <img src="{{ asset( $hotelImage1Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 2 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage2" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage2" class="form-control" wire:model="hotelImage2" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage2') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage2)
                                <div class="mt-3">
                                    <img src="{{ $hotelImage2->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($hotelId && $hotelImage1Path)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelImage2Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 3 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage3" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage3" class="form-control" wire:model="hotelImage3" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage3') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage3)
                                <div class="mt-3">
                                    <img src="{{ $hotelImage3->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($hotelId && $hotelImage3Path)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelImage3Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 4 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage4" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage4" class="form-control" wire:model="hotelImage4" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage4') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage4)
                                <div class="mt-3">
                                    <img src="{{ $hotelImage4->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($hotelId && $hotelImage4Path)
                                <div class="mt-3">
                                    <img src="{{ asset( $hotelImage4Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 4 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage5" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage5" class="form-control" wire:model="hotelImage5" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage5') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage5)
                                <div class="mt-3">
                                    <img src="{{ $hotelImage5->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($hotelId && $hotelImage5Path)
                                <div class="mt-3">
                                    <img src="{{ asset( $hotelImage5Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex">
                            <button type="button" wire:click="increaseHotelFields" class="btn btn-primary mx-3">Add Periods</button>
                            <button type="button" wire:click="decreaseHotelFields" class="btn btn-danger mx-3">Remove Periods</button>
                        </div>

                        @foreach ($hotels as $i => $hotel)
                            <div class="col-lg-12 mb-3 d-flex justify-content-evenly">
                                <div class="col-md-2 mb-4">
                                    <label for="hotelSeasonStart.{{$i}}" class="form-label">Season Start</label>
                                    <input type="date" id="hotelSeasonStart.{{$i}}" wire:model="hotelSeasonStart.{{$i}}" class="form-control" placeholder="Enter Season Start">
                                    @error('hotelSeasonStart.{{$i}}') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="col-md-2 mb-4">
                                    <label for="hotelSeasonEnd.{{$i}}" class="form-label">Season End</label>
                                    <input type="date" id="hotelSeasonEnd.{{$i}}" wire:model="hotelSeasonEnd.{{$i}}" class="form-control" placeholder="Enter Season End">
                                    @error('hotelSeasonEnd.{{$i}}') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-2 mb-4">
                                    <label for="hotelMeal.{{$i}}" class="form-label">Meal Type</label>
                                    <select class="form-select" id="hotelMeal.{{$i}}" wire:model="hotelMeal.{{$i}}">
                                        <option value="">Food Type</option>
                                        <option value="Suhoor or Iftar">Suhoor or Iftar</option>
                                        <option value="Full Board">Full Board</option>
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Iftar">Iftar</option>
                                        <option value="Room Only">Room Only</option>
                                        <option value="Indian FB">Indian FB</option>
                                    </select>
                                    @error('hotelMeal.{{$i}}') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-2 mb-3">
                                    <label for="hotelDouble.{{$i}}" class="form-label">Double</label>
                                    <input type="text" id="hotelDouble.{{$i}}" wire:model="hotelDouble.{{$i}}" class="form-control" placeholder="Enter Double Price">
                                    @error('hotelDouble.{{$i}}') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="col-md-2 mb-3">
                                    <label for="hotelTriple.{{$i}}" class="form-label">Triple</label>
                                    <input type="text" id="hotelTriple.{{$i}}" wire:model="hotelTriple.{{$i}}" class="form-control" placeholder="Enter Triple Price">
                                    @error('hotelTriple.{{$i}}') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-2 mb-3">
                                    <label for="hotelQuad.{{$i}}" class="form-label">Quad</label>
                                    <input type="text" id="hotelQuad.{{$i}}" wire:model="hotelQuad.{{$i}}" class="form-control" placeholder="Enter Quad Price">
                                    @error('hotelQuad.{{$i}}') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                            </div>

                            <hr>
                        @endforeach


                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit Hotel Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
