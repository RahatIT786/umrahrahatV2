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
            <h6 class="card-title mb-0">Ziyarat Cities Management</h6>
            <a style="height: 40px; width: 140px; background-color: #007bff; color: white !important; text-decoration: none; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-weight: 600; transition: background-color 0.3s ease;" 
   class="text-danger" data-bs-placement="bottom" title="Create Car" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
    <i class="bx bx-plus me-1"></i> Create  Ziyarat cities
</a>

        </div>

        <!-- Search Bar -->
        <div class="d-flex align-items-center mb-3">
            <h4 class="mb-0"></h4>
            <form class="ms-auto position-relative" wire:submit.prevent="">
                <input type="text" class="form-control" placeholder="Search Ziyarat Cities" wire:model.live="search">
            </form>
        </div>

        <!-- Visa Details Table -->
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th class="border-0 py-2">S.No</th>
                        <th class="border-0 py-2">City Name</th>
                        <th class="border-0 py-2 text-center">Edit</th>
                        <th class="border-0 py-2 text-center">Delete</th>
                    </tr>
                </thead>
               <tbody>
                    @foreach ($ziyaratCities as $index => $ziyaratCity)
                        <tr>
                            <td>{{  $index + 1 }}</td>
                            <td>{{ $ziyaratCity->ziyarat_city }}</td>
                            <td class="text-center">
                                <a class="text-primary" wire:click.prevent="edit({{ $ziyaratCity->id }})" data-bs-toggle="modal"  title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a wire:click="confirmDelete({{ $ziyaratCity->id }})" class="text-danger" data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal1">
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
                        Are you sure you want to delete this Ziyarat City?
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

        <div class="modal @if($showAddModal || $showEditModal) show @endif"
            id="exampleVerticallycenteredModal"
            tabindex="-1"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true"
            @if($showAddModal || $showEditModal) style="display: block;" @endif>
            
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">
                            {{ $showEditModal ? 'Edit Ziyarat Cities' : 'Add Ziyarat Cities' }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"></button>
                    </div>

                    <form wire:submit.prevent="{{ $showEditModal ? 'update' : 'save' }}" onsubmit="setTimeout(() => location.reload(), 1000); return false;">
                        <div class="modal-body">
                            <label for="ziyarat_city" class="form-label">Ziyarat City</label>
                            <input type="text" class="form-control" id="hotel_city" wire:model="ziyarat_city" required>
                            @error('ziyarat_city') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Cancel</button>
                            <button type="submit" class="btn btn-primary">{{ $showEditModal ? 'Update' : 'Save' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Pagination -->
      <div class="d-flex justify-content-end mt-3">
            {{ $ziyaratCities->links('vendor.pagination.custom') }}
        </div>

    </div>
</div>
