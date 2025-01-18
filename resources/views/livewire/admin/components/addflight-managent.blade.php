<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Add Flight Details</h5>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form class="row g-3 needs-validation" wire:submit.prevent="submit">

                        <!-- Flight Name -->
                        <div class="col-md-6 mb-3">
                            <label for="FlightName" class="form-label">Flight Name</label>
                            <input type="text" id="FlightName" wire:model="FlightName" class="form-control" placeholder="Enter Flight Name">
                            @error('FlightName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <!-- File Upload for Supporting Image -->
                        <div class="col-md-6 mb-3">
                            <label for="FlightImage" class="form-label">Flight Image</label>
                            <input type="file" id="FlightImage" class="form-control" wire:model="FlightImage" accept="image/*">
                            <small class="form-text text-muted">Allowed file types: .jpg, .jpeg, .png</small>
                            @error('FlightImage') <span class="text-danger">{{ $message }}</span> @enderror

                            <!-- Show Uploaded or Current Image -->
                            @if ($FlightImage)
                                <div class="mt-3">
                                    <img src="{{ $FlightImage->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($flightId && $FlightImagePath)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $FlightImagePath) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>


                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit flight Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
