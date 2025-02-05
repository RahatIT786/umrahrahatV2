<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Add Car Details</h5>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success" >
                            {{ session('message') }}
                        </div>
                    @endif
                    <form class="row g-3 needs-validation" wire:submit.prevent="submit">

                        <!-- Flight Name -->
                        <div class="col-md-6 mb-3">
                            <label for="carType" class="form-label">Car Name</label>
                            <input type="text" id="carType" wire:model="carType" class="form-control" placeholder="Enter Car Name">
                            @error('carType') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!-- File Upload for Supporting Image -->
                        <div class="col-md-6 mb-3">
                            <label for="carImage" class="form-label">Car Image</label>
                            <input type="file" id="carImage" class="form-control" wire:model="carImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('carImage') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($carImage)
                                <div class="mt-3">
                                    <img src="{{ $carImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($carId && $carImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $carImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>


                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit Car Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
