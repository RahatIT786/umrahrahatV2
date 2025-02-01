<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Add Visa Details</h5>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form class="row g-3 needs-validation" wire:submit.prevent="submit">
                        <!-- Visa Type -->
            
                        <div class="col-md-6 mb-3">
                            <label for="VisaType" class="form-label">Visa Type</label>
                            <select class="form-select" id="VisaType" wire:model="visaType">
                                <option value="">Select visa type</option>
                                @foreach($visaTypes as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                            @error('visaType') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- country  -->
                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" wire:model="country" class="form-control" placeholder="Enter country">
                            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- validity  -->
                        <div class="col-md-6 mb-3">
                            <label for="validity" class="form-label">Validity</label>
                            <input type="number" id="validity" wire:model="validity" class="form-control" placeholder="Enter validity">
                            @error('validity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Documents Required -->
                        <div class="col-md-6 mb-3">
                            <label for="documentsRequired" class="form-label">Documents Required</label>
                            <input type="text" id="documentsRequired" wire:model="documentsRequired" class="form-control" placeholder="Enter Required Documents">
                            @error('documentsRequired') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Processing Time -->
                        <div class="col-md-6 mb-3">
                            <label for="processingTime" class="form-label">Processing Time (Days)</label>
                            <input type="number" min="0" id="processingTime" class="form-control" wire:model="processingTime" placeholder="Enter no of days">
                            @error('processingTime') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Price -->
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" class="form-control" min="0" wire:model="price" placeholder="Enter Price">
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- File Upload for Supporting Image -->
                        <div class="col-md-6 mb-3">
                            <label for="file1" class="form-label">Upload Supporting Image</label>
                            <input type="file" id="file1" class="form-control" wire:model="file" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('file') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($file)
                                <div class="mt-3">
                                    <img src="{{ $file->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($visaId && $filePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $filePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- File Upload for Flyer -->
                        <div class="col-md-6 mb-3">
                            <label for="file2" class="form-label">Saudi Visa Flyer</label>
                            <input type="file" id="file2" class="form-control" wire:model="flyer" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('flyer') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Flyer -->
                            @if ($flyer)
                                <div class="mt-3">
                                    <img src="{{ $flyer->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($visaId && $flyerPath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $flyerPath) }}" alt="Current Flyer" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit Visa Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
