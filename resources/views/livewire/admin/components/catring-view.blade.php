<section>
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
                    <form class="row g-3 needs-validation" wire:submit.prevent="submit" enctype="multipart/form-data">
                        
                        <!-- Hotel Name -->
                        <div class="col-md-6 mb-3">
                            <label for="foodType" class="form-label">Food Type</label>
                            <input type="text" id="foodType" wire:model="foodType" class="form-control" placeholder="Enter Food Type" readonly>
                          {{--  @error('hotelName') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>

                        <!-- Hotel Price -->
                        <div class="col-md-6 mb-3">
                            <label for="footPrice" class="form-label"> Price</label>
                            <input type="text" id="footPrice" wire:model="foodPrice" class="form-control" placeholder="Enter Price" readonly>
                          {{--  @error('hotelPrice') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>

                        <!-- Currency Selection -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Select Currency</label>
                            <div class="form-check">
                                <input type="radio" id="currencyINR" name="currency" value="INR" wire:model="currency" class="form-check-input" readonly>
                                <label for="currencyINR" class="form-check-label">INR</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="currencyAED" name="currency" value="AED" wire:model="currency" class="form-check-input" readonly>
                                <label for="currencyAED" class="form-check-label">AED</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="currencyUSD" name="currency" value="USD" wire:model="currency" class="form-check-input" readonly>
                                <label for="currencyUSD" class="form-check-label">USD</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="currencySAR" name="currency" value="SAR" wire:model="currency" class="form-check-input" readonly>
                                <label for="currencySAR" class="form-check-label">SAR</label>
                            </div>
                          {{--  @error('currency') <span class="text-danger">{{ $message }}</span> @enderror--}}
                        </div>





                    {{-- <h5>BreakFast , Lunch and Dinner</h5> --}}
                    <h5>Food Description</h5>
                    <hr>
                    <!-- Flight & Transport -->
                   
                        <div class="col-md-12 mb-3">
                            <label for="foodBreakFast" class="form-label">Description</label>
                            <textarea id="foodBreakFast" wire:model="foodBreakFast" class="form-control " placeholder="Enter Breakfast " readonly></textarea>
                        </div>

                        {{-- <!-- Meals -->
                        <div class="col-md-4 mb-3">
                            <label for="foodLunch" class="form-label">Lunch</label>
                            <textarea id="foodLunch" wire:model="foodLunch" class="form-control " placeholder="Enter Lunch" readonly></textarea>
                        </div>

                        <!-- Visa & Taxes -->
                        <div class="col-md-4 mb-3">
                            <label for="foodDinner" class="form-label">Dinner</label>
                            <textarea id="foodDinner" wire:model="foodDinner" class="form-control " placeholder="Enter Dinner" readonly></textarea>
                        </div> --}}
             


                     <!-- File Upload for Supporting Image -->
                      <div class="col-md-6 mb-3">
                            <label for="foodBreakFastImage" class="form-label">Breakfast Image</label>
                            <input type="file" id="foodBreakFastImage" class="form-control" wire:model="foodBreakFastImage" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('foodBreakFastImage') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($foodBreakFastImage)
                                <div class="mt-3">
                                    <img src="{{ $foodBreakFastImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;" readonly>
                                </div>
                            @elseif ($foodId && $foodBreakFastImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $foodBreakFastImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                      </div>


                      {{-- <div class="col-md-4 mb-3">
                            <label for="foodLunchImage" class="form-label">Lunch Image</label>
                            <input type="file" id="foodLunchImage" class="form-control" wire:model="foodLunchImage" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('foodLunchImage') <span class="text-danger">{{ $message }}</span> @enderror

                                                        <!-- Show Uploaded or Current Image -->
                            @if ($foodLunchImage)
                            <div class="mt-3">
                                <img src="{{ $foodLunchImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;" readonly>
                            </div>
                            @elseif ($foodId && $foodLunchImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $foodLunchImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                      </div>

                      <div class="col-md-4 mb-3">
                            <label for="foodDinnerImage" class="form-label">Dinner Image</label>
                            <input type="file" id="foodDinnerImage" class="form-control" wire:model="foodDinnerImage" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('foodDinnerImage') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($foodDinnerImage)
                            <div class="mt-3">
                                <img src="{{ $foodDinnerImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                            @elseif ($foodId && $foodDinnerImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $foodDinnerImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                      </div> --}}

                      <div class="col-md-6 mb-3">
                            <label for="footPdf" class="form-label">Food PDF</label>
                           
                            {{-- @if ( $footPdfPath) --}}
                          <div>
                            <a href="{{ asset('storage/' . $footPdf) }}">click to view pdf</a>
                          </div>
{{--                                 
                            @endif --}}
                            {{-- <input type="file" id="footPdf" class="form-control" wire:model="footPdf" accept="image/*" readonly>
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('footPdf') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($footPdf)
                            <div class="mt-3">
                                <img src="{{ $footPdf->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                            @elseif ($foodId && $footPdfPath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $footPdfPath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif --}}
                      </div>


               
                        <!-- Submit Button -->
                        <!-- <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit Catring Details</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>