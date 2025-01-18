<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Add Departure City Details</h5>
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
                            <label for="CityName" class="form-label">City Name</label>
                            <input type="text" id="CityName" wire:model="CityName" class="form-control" placeholder="Enter City Name">
                            @error('CityName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!-- File Upload for Supporting Image -->
                        <div class="col-md-6 mb-3">
                            <label for="CityImage" class="form-label">Flight Image</label>
                            <input type="file" id="CityImage" class="form-control" wire:model="CityImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('CityImage') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($CityImage)
                                <div class="mt-3">
                                    <img src="{{ $CityImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($CityId && $CityImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $CityImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>


                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit City Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
