<div class="card">
    <div class="card-body">

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Header with Create Button -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h6 class="card-title mb-0">Transport Management</h6>
            <a style="height: 40px; width: 140px; background-color: #007bff; color: white !important; text-decoration: none; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-weight: 600; transition: background-color 0.3s ease;" 
   class="text-danger" data-bs-placement="bottom" title="Create Car" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
    <i class="bx bx-plus me-1"></i> Create Car Sector
</a>

        </div>

        <!-- Search Bar -->
        <div class="d-flex align-items-center mb-3">
            <h4 class="mb-0">All Car Sector</h4>
            <form class="ms-auto position-relative" wire:submit.prevent="">
                <input type="text" class="form-control" placeholder="Search Sector" wire:model.live="search">
            </form>
        </div>

        <!-- Visa Details Table -->
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th class="border-0 py-2">S.No</th>
                        <th class="border-0 py-2">Car Sector</th>
                        <th class="border-0 py-2">Status</th>
                        <th class="border-0 py-2 text-center">Edit</th>
                        <th class="border-0 py-2 text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carSectors as $index => $cartype)
                        <tr>
                            <td>{{  $index + 1 }}</td>
                            <td>{{ $cartype->car_sector }}</td>
                            <td>
                                @if ( $cartype->delete_status == 1 )
                                    Active
                                @endif
                            </td>
                            <td class="text-center">
                                <a class="text-primary"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a wire:click="confirmDelete({{ $cartype->id }})" class="text-danger" data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal1">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Delete Confirmation -->
        <div class="modal fade @if($showModal) show @endif" 
             id="exampleVerticallycenteredModal1" 
             tabindex="-1" 
             aria-labelledby="exampleModalCenterTitle1" 
             aria-hidden="true"
             @if($showModal) style="display: block;" @endif>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle1">Confirm Deletion</h5>
                        <button type="button" class="btn-close" 
                                data-bs-dismiss="modal" 
                                aria-label="Close"
                                wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this Car Sector?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" 
                                data-bs-dismiss="modal" 
                                wire:click="closeModal">Cancel</button>
                        <button type="button" class="btn btn-danger" 
                                wire:click="deleteData" 
                                data-bs-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>

       {{-- <div class="modal fade @if($showAddModal) show @endif" 
             id="exampleVerticallycenteredModal" 
             tabindex="-1" 
             aria-labelledby="exampleModalCenterTitle" 
             aria-hidden="true"
             @if($showAddModal) style="display: block;" @endif>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Deletion</h5>
                        <button type="button" class="btn-close" 
                                data-bs-dismiss="modal" 
                                aria-label="Close"
                                wire:click="closeModal"></button>
                    </div>
                    <form wire:submit.prevent="save"></form>
                    <div class="modal-body">
                        
                            <label for="car_type" class="form-label">Car Type Name</label>
                            <input type="text" class="form-control" id="car_type" wire:model="carType" required>
                            @error('car_type') <span class="text-danger">{{ $message }}</span> @enderror
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" 
                                data-bs-dismiss="modal" 
                                wire:click="closeModal">Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>--}}
        <div class="modal @if($showAddModal) fade show @endif" 
     id="exampleVerticallycenteredModal" 
     tabindex="-1" 
     aria-labelledby="exampleModalCenterTitle" 
     aria-hidden="true"
     @if($showAddModal) style="display: block;" @endif>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Car Type</h5>
                <button type="button" class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="save" onsubmit="location.reload()">
                <div class="modal-body">
                    <label for="car_sector" class="form-label">Car Type Name</label>
                    <input type="text" class="form-control" id="car_sector" wire:model="car_sector" required>
                    @error('car_sector') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" 
                            data-bs-dismiss="modal" 
                            wire:click="closeModal">Cancel
                    </button>
                    <button type="submit" onclick="reloadPage()" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function reloadPage() {
        setTimeout(() => {
            location.reload();  // Reloads the page after a short delay
        }, 100);  // Delay to ensure the Livewire 'save' method is called
    }
</script>



        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-3">
            {{ $carSectors->links('vendor.pagination.custom') }}
        </div>

    </div>
</div>
