<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Add Inclusions</h5>
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
                            <label for="InclusionName" class="form-label">Inclusions Name</label>
                            <input type="text" id="InclusionName" wire:model="InclusionName" class="form-control" placeholder="Enter Inclusion Type">
                            @error('InclusionName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary w-100">Submit Package Type</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
