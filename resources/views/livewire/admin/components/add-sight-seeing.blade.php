<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">{{$sightName ? 'Edit Sight Details' : 'Add Sight Details'}}</h5>
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
                            <label for="sightName" class="form-label">Sight Name</label>
                            <input type="text" id="sightName" wire:model="sightName" class="form-control" placeholder="Enter Sight Name">
                            @error('sightName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Currency Selection -->
                        <div class="col-md-6 mb-3 ">
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

                        <!-- Hotel Price -->
                        <div class="col-md-6 mb-3">
                            <label for="sightPrice" class="form-label">Sight Price (4 peoples)</label>
                            <input type="text" id="sightPrice" wire:model="sightPrice" class="form-control" placeholder="Enter Sight Price">
                            @error('sightPrice') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <!-- Hotel Price -->
                        <div class="col-md-6 mb-3">
                            <label for="sightPrice1" class="form-label">Sight Price (7 peoples)</label>
                            <input type="text" id="sightPrice1" wire:model="sightPrice1" class="form-control" placeholder="Enter Sight Price">
                            @error('sightPrice1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>





                        <!-- Hotel City -->
                        <div class="col-md-6 mb-3">
                            <label for="sightCity" class="form-label">Sight City</label>
                            <select class="form-select" id="sightCity" wire:model="sightCity">
                                <option value="select city">Select City</option>
                                <option value="MAKKAH">MAKKAH</option>
                                <option value="MADINAH">MADINAH</option>
                                <option value="BAGHDAD">BAGHDAD</option>
                                <option value="NAJAF">NAJAF</option>
                                <option value="KARBALA">KARBALA</option>
                            </select>
                            @error('sightCity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hotel Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="sightDiscription" class="form-label">Sight Discription</label>
                            <textarea id="sightDiscription" wire:model="sightDiscription" class="form-control" placeholder="Enter Sight Discription"></textarea>
                            @error('sightDiscription') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        
                        <!-- Hotel Discription -->
                        {{-- <div class="col-md-6 mb-3">
                            <label for="sightInclusion" class="form-label">Sight Discription</label>
                            <textarea id="sightInclusion" wire:model="sightInclusion" class="form-control" placeholder="Enter Sight Inclusion"></textarea>
                            @error('sightInclusion') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        
                         Hotel Discription -->
                        <div class="col-md-6 mb-3">
                            <label for="sightNotes" class="form-label">Sight Discription</label>
                            <textarea id="sightNotes" wire:model="sightNotes" class="form-control" placeholder="Enter Sight Notes"></textarea>
                            @error('sightNotes') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> --}}

                        <!-- File Upload for Main Hotel Image -->
                        <div class="col-md-6 mb-3">
                            <label for="sightMainImage" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="sightMainImage" class="form-control" wire:model="sightMainImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('sightMainImage') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($sightMainImage)
                                <div class="mt-3">
                                    <img src="{{ $sightMainImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($sightId && $sightMainImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' .$sightMainImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 1 -->
                        <div class="col-md-6 mb-3">
                            <label for="sightImage1" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="sightImage1" class="form-control" wire:model="sightImage1" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('sightImage1') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($sightImage1)
                                <div class="mt-3">
                                    <img src="{{ $sightImage1->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($sightId && $sightImage1Path)
                                <div class="mt-3">
                                    <img src="{{ asset( 'storage/' .$sightImage1Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 2 -->
                        <div class="col-md-6 mb-3">
                            <label for="sightImage2" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="sightImage2" class="form-control" wire:model="sightImage2" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('sightImage2') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($sightImage2)
                                <div class="mt-3">
                                    <img src="{{ $sightImage2->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($sightId && $sightImage2Path)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' .$sightImage2Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Hotel Image 3 -->
                        <div class="col-md-6 mb-3">
                            <label for="sightImage3" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="sightImage3" class="form-control" wire:model="sightImage3" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('sightImage3') <span class="text-danger">{{ $message }}</span> @enderror

                            
                            @if ($sightImage3)
                                <div class="mt-3">
                                    <img src="{{ $sightImage3->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($sightId && $sightImage3Path)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' .$sightImage3Path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
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
