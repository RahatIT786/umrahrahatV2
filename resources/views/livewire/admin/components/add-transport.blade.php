<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    
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
                            <label for="carType" class="form-label">Car Type</label>
                            <select class="form-select" id="carType" wire:model="carType">
                                <option value="">Select City</option>
                                @foreach ($allCarTypes as $carType)
                                    <option value="{{$carType->id}}">{{$carType->car_type}}</option>
                                @endforeach
                            </select>
                            @error('carType') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Price -->
                        <div class="col-md-6 mb-3">
                            <label for="carSector" class="form-label">Car Sector</label>
                            <select class="form-select" id="carSector" wire:model="carSector">
                                <option value="">Select City</option>
                                @foreach ($allCarSectors as $carSector)
                                    <option value="{{$carSector->id}}">{{$carSector->car_sector}}</option>
                                @endforeach
                            </select>
                            @error('carSector') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Currency Selection -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Select Currency</label>
                            <div class="d-flex">
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
                            @error('currency') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Hotel City -->
                        <div class="col-md-6 mb-3">
                            <label for="seatsCount" class="form-label">No of Seats</label>
                            <select class="form-select" id="seatsCount" wire:model="seatsCount">
                                <option value="">Select Seat</option>
                                @for ($i = 1; $i <= 50; $i++)
                                    <option value="{{ $i }}">{{ $i }} Seat{{ $i > 1 ? 's' : '' }}</option>
                                @endfor
                            </select>
                            @error('seatsCount') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Hotel Star Rating
                        <div class="col-md-6 mb-3">
                            <label for="airConditioner" class="form-label">Air Conditioner</label>
                            <select class="form-select" id="airConditioner" wire:model="airConditioner">
                                <option value="">Choose</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                            @error('airConditioner') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> --}}

                        
                        <!--Hotel CheckIn Time-->
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" min="0" id="price" class="form-control" wire:model="price" placeholder="Enter Price">
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- <div class="col-md-6 mb-3">
                            <label for="transportImage" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="transportImage" class="form-control" wire:model="transportImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('transportImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                           @if ($transportImage)
                                <div class="mt-3">
                                    <img src="{{ $transportImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($transportId && $transportImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset($transportImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div> --}}

                        <!-- Hotel Address -->
                        <div class="col-md-6 mb-3">
                            <label for="termsAndConditision" class="form-label">Terms & Conditions</label>
                            <textarea id="termsAndConditision" wire:model="termsAndConditision" class="form-control" placeholder="Enter Terms & Conditions"></textarea>
                            @error('termsAndConditision') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="discription" class="form-label">Discription</label>
                            <textarea id="discription" wire:model="discription" class="form-control" placeholder="Enter Discription"></textarea>
                            @error('discription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit Transport Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
