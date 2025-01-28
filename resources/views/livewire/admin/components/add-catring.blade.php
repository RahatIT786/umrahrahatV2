<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                   {{--<h5 class="card-title mb-0">{{$hotelName ? 'Edit Hotal Details' : 'Add Hotal Details'}}</h5>--}} 
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form class="row g-3 needs-validation" wire:submit.prevent="submit">
                        
                        <!-- Hotel Name -->
                        <div class="col-md-6 mb-3">
                            <label for="foodType" class="form-label">Food Type</label>
                            <input type="text" id="foodType" wire:model="foodType" class="form-control" placeholder="Enter Food Type">
                          {{--  @error('hotelName') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>

                        <!-- Hotel Price -->
                        <div class="col-md-6 mb-3">
                            <label for="footPrice" class="form-label"> Price</label>
                            <input type="text" id="footPrice" wire:model="footPrice" class="form-control" placeholder="Enter Price">
                          {{--  @error('hotelPrice') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>

                        <!-- Currency Selection -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Select Currency</label>
                            <div class="form-check">
                                <input type="radio" id="currencyINR" name="currency" value="INR" wire:model="currency" class="form-check-input">
                                <label for="currencyINR" class="form-check-label">INR</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="currencyAED" name="currency" value="AED" wire:model="currency" class="form-check-input">
                                <label for="currencyAED" class="form-check-label">AED</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="currencyUSD" name="currency" value="USD" wire:model="currency" class="form-check-input">
                                <label for="currencyUSD" class="form-check-label">USD</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="currencySAR" name="currency" value="SAR" wire:model="currency" class="form-check-input">
                                <label for="currencySAR" class="form-check-label">SAR</label>
                            </div>
                          {{--  @error('currency') <span class="text-danger">{{ $message }}</span> @enderror--}}
                        </div>





                    <h5>BreakFast , Lunch and Dinner</h5>
                    <hr>
                    <!-- Flight & Transport -->
                    <div class="col-md-4 mb-3">
                        <label for="FlightTransport" class="form-label">BreakFast</label>
                        <textarea id="FlightTransport" wire:model="FlightTransport" class="form-control summernote" placeholder="Enter Flight & Transport"></textarea>
                    </div>

                    <!-- Meals -->
                    <div class="col-md-4 mb-3">
                        <label for="packageMeals" class="form-label">Lunch</label>
                        <textarea id="packageMeals" wire:model="packageMeals" class="form-control summernote" placeholder="Enter Meals"></textarea> 
                    </div>

                    <!-- Visa & Taxes -->
                    <div class="col-md-4 mb-3">
                        <label for="packageVisaTaxes" class="form-label">Dinner</label>
                        <textarea id="packageVisaTaxes" wire:model="packageVisaTaxes" class="form-control summernote" placeholder="Enter Visa & Taxes"></textarea>
                    </div>

                     <!-- File Upload for Supporting Image -->
                      <div class="col-md-4 mb-3">
                            <label for="CityImage" class="form-label">Breakfast Image</label>
                            <input type="file" id="CityImage" class="form-control" wire:model="CityImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('CityImage') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>

                      <div class="col-md-4 mb-3">
                            <label for="CityImage" class="form-label">Lunch Image</label>
                            <input type="file" id="CityImage" class="form-control" wire:model="CityImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('CityImage') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>

                      <div class="col-md-4 mb-3">
                            <label for="CityImage" class="form-label">Dinner Image</label>
                            <input type="file" id="CityImage" class="form-control" wire:model="CityImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('CityImage') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>

                      <div class="col-md-12 mb-3">
                            <label for="CityImage" class="form-label">Food PDF</label>
                            <input type="file" id="CityImage" class="form-control" wire:model="CityImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('CityImage') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>


               
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
