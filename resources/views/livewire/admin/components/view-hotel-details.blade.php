<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">View Hotal Details</h5>
                </div>
                <div class="card-body">
                    <form class="row g-3 needs-validation" >
                        
                        <!-- Hotel Name -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelName" class="form-label">Hotel Name</label>
                            <input type="text" id="hotelName" wire:model="hotelName" class="form-control" placeholder="Enter Hotel Name" readonly>
                            @error('hotelName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <!-- Hotel Price -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelPrice" class="form-label">Hotel Price</label>
                            <input type="text" id="hotelPrice" wire:model="hotelPrice" class="form-control" placeholder="Enter Hotel Price" readonly>
                            @error('hotelPrice') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    
                        <!-- Currency Selection -->
                        <div class="col-md-12 mb-3 d-flex ">
                            <label class="form-label ml-4">Select Currency</label>
                            <div style="margin-left: 20px;" class="form-check ">
                                <input type="radio" id="currencyINR" name="currency" value="INR" wire:model="currency" class="form-check-input">
                                <label for="currencyINR" class="form-check-label ml-4">INR</label>
                            </div>
                            <div style="margin-left: 20px;" class="form-check ">
                                <input type="radio" id="currencyAED" name="currency" value="AED" wire:model="currency" class="form-check-input">
                                <label for="currencyAED" class="form-check-label ml-4">AED</label>
                            </div>
                            <div style="margin-left: 20px;" class="form-check ">
                                <input type="radio" id="currencyUSD" name="currency" value="USD" wire:model="currency" class="form-check-input">
                                <label for="currencyUSD" class="form-check-label ml-4">USD</label>
                            </div>
                            <div style="margin-left: 20px;" class="form-check ml-5">
                                <input type="radio" id="currencySAR" name="currency" value="SAR" wire:model="currency" class="form-check-input">
                                <label for="currencySAR" class="form-check-label">SAR</label>
                            </div>
                            @error('currency') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel City -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelCity" class="form-label">Hotel City</label>
                            <select class="form-select" id="hotelCity" wire:model="hotelCity" readonly>
                                <option value="">Select City</option>
                                <option value="MAKKAH">MAKKAH</option>
                                <option value="MADINAH">MADINAH</option>
                                <option value="BAGHDAD">BAGHDAD</option>
                                <option value="NAJAF">NAJAF</option>
                                <option value="KARBALA">KARBALA</option>
                            </select>
                            @error('hotelCity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Star Rating -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelStarRating" class="form-label">Hotel Star Rating</label>
                            <select class="form-select" id="hotelStarRating" wire:model="hotelStarRating" readonly>
                                <option value="">Star Rating</option>
                                <option value="2 Stars">2 Stars</option>
                                <option value="3 Stars">3 Stars</option>
                                <option value="4 Stars">4 Stars</option>
                                <option value="5 Stars">5 Stars</option>
                                <option value="Building Accomutation Stars">Building Accomutation Stars</option>
                                <option value="Standard Hotel Stars">Standard Hotel Stars</option>
                            </select>
                            @error('hotelStarRating') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!-- Hotel Address -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelAddress" class="form-label">Hotel Address</label>
                            <textarea id="hotelAddress" wire:model="hotelAddress" class="form-control" placeholder="Enter Hotel Address" readonly></textarea>
                            @error('hotelAddress') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelDiscription" class="form-label">Hotel Discription</label>
                            <textarea id="hotelDiscription" wire:model="hotelDiscription" class="form-control" placeholder="Enter Hotel Discription" readonly></textarea>
                            @error('hotelDiscription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--Hotel CheckIn Time-->
                        <div class="col-md-6 mb-3">
                            <label for="hotelCheckInTime" class="form-label">Hotel Check In Time</label>
                            <input type="time" id="hotelCheckInTime" class="form-control" wire:model="hotelCheckInTime" placeholder="Enter Check In Time" readonly>
                            @error('hotelCheckInTime') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--Hotel CheckOut Time-->
                        <div class="col-md-6 mb-3">
                            <label for="hotelCheckOutTime" class="form-label">Hotel Check Out Time</label>
                            <input type="time"  id="hotelCheckOutTime" class="form-control" wire:model="hotelCheckOutTime" placeholder="Enter Check Out Time" readonly>
                            @error('hotelCheckOutTime') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!--Hotel Distance-->
                        <div class="col-md-12 mb-3">
                            <label for="hotelDistance" class="form-label">Distance away from Center City</label>
                            <input type="number" min="0" id="hotelDistance" class="form-control" wire:model="hotelDistance" placeholder="Enter Distance away from Center City" readonly>
                            @error('hotelDistance') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- File Upload for Main Hotel Image -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelMainImage" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelMainImage" class="form-control" wire:model="hotelMainImage" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelMainImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelMainImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelMainImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 1 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage1" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage1" class="form-control" wire:model="hotelImage1" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage1') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage1Path)
                                <div class="mt-3">
                                    <img src="{{ asset( $hotelImage1Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 2 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage2" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage2" class="form-control" wire:model="hotelImage2" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage2') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage2Path)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelImage2Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 3 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage3" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage3" class="form-control" wire:model="hotelImage3" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage3') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage3Path)
                                <div class="mt-3">
                                    <img src="{{ asset($hotelImage3Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 4 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage4" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage4" class="form-control" wire:model="hotelImage4" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage4') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage4Path)
                                <div class="mt-3">
                                    <img src="{{ asset( $hotelImage4Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 4 -->
                        <div class="col-md-6 mb-3">
                            <label for="hotelImage5" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="hotelImage5" class="form-control" wire:model="hotelImage5" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('hotelImage5') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($hotelImage5Path)
                                <div class="mt-3">
                                    <img src="{{ asset( $hotelImage5Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
