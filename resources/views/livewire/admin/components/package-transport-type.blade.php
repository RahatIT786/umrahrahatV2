<div class="card">
    <div class="card-body">

        <!-- Success Message -->
         @if(session()->has('message'))
         <div class="alert alert-success">
            {{session('message')}}
         </div>
         @endif
        

        <!-- Header with Create Button -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h6 class="card-title mb-0">Package Transport Type </h6>
            <!-- <a wire:click="createType" class="btn btn-sm btn-primary" 
            data-bs-target="#transportTypeModal" data-bs-toggle="modal" data-bs-placement="bottom">
                <i class="bx bx-plus me-1"></i> CREATE
            </a> -->
        </div>

        <!-- Search Bar -->
        <div class="d-flex align-items-center justify-content-between mb-3">
           
            <div>
            <form class="ms-auto position-relative" wire:submit.prevent="">
                <input type="text" class="form-control" placeholder="Search Type" wire:model.live="search">
            </form>

            </div>
           <div>
           <form wire:submit.prevent="saveDepartureType" class="d-flex gap-2 align-items-end justify-content-center">
                <div>
                <label for="">Add Type</label>
                <input type="text" class="form-control" wire:model="departureType" placeholder="Enter Type" required>
                </div>
                <div>
                    <button class="btn btn-success" type="submit">ADD</button>
                </div>
          
            </form>
           </div>
        </div>

        <!-- Visa Details Table -->
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th class="border-0 py-2">S.No</th>
                        <!-- <th class="border-0 py-2">City Image</th> -->
                        <th class="border-0 py-2">TYPE</th>
                        <th></th>
                        <th class="border-0 py-2 text-center" >Edit</th>
                        <th class="border-0 py-2 text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                           
                            <td><input id="{{$data->id}}" style="border: none;" type="text" value="{{ucfirst($data->type)}}" class="form-control" readonly></td>
                            <td>
                                @if ($typeEdit && $editId==$data->id )
                              <form  class="d-flex gap-2" model:submit.prevent="saveEditedType" >
                           <div>
                            <input style="border: none;" type="text" value="{{ $data->type }}" >
                           </div>
                           <div>
                            <button class="btn btn-success" type="submit">SAVE</button>
                           </div>
                              </form>
                               
                                @endif
                            </td>
                            {{-- <td>
                                @if ($typeEdit && $editId==$data->id )
                              
                            <input style="border: none;" type="text" value="{{ $data->type }}" >
                          
                               
                                @endif
                            </td>  --}}
                            {{-- <td class="text-center">
                                <a class="text-primary" href="{{ route('editCitydata', ['id' => $data->id]) }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td> --}}
                            <td class="text-center">
                                <a class="text-primary" wire:click="typeEditModal({{ $data->id}})" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a wire:click="confirmDelete({{ $data->id }})" class="text-danger" data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Delete Confirmation -->
        <!-- <div class="modal fade @if($showModal) show @endif" 
             id="exampleVerticallycenteredModal" 
             tabindex="-1" 
             aria-labelledby="exampleModalCenterTitle" 
             aria-hidden="true"
             @if($showModal) style="display: block;" @endif>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Deletion</h5>
                        <button type="button" class="btn-close" 
                                data-bs-dismiss="modal" 
                                aria-label="Close"
                                wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this City?
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
        </div> -->
    </div>


<script>
    function reloadPage() {
        setTimeout(() => {
            location.reload();  // Reloads the page after a short delay
        }, 100);  // Delay to ensure the Livewire 'save' method is called
    }
</script>













</div>
