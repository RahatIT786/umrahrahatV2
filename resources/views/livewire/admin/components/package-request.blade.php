<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            Package Request
        </h5>
        {{-- <p class="card-subtitle">
            A list of all package requests submitted by users, including details such as the customer name, title, email, package type, request status, and any associated notes or special requests
        </p> --}}
    </div>

    <div class="card-body">
    
        <div class="table-responsive">
            <div class="row d-flex justify-content-end me-3">
               
                <div class="col-4 mb-3 ">
                    <input type="text" class="form-control" placeholder="Search request" wire:model.live="search">
                </div>
            </div>
            <table class="table table-hover table-centered">
                <thead class="table-light">
                    <tr>
                        
                        <th scope="col">SI.No</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Package Name</th>
                        <th scope="col">Enquired Date</th>

                        <th scope="col">Call Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packageRequest as $data)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                {{-- <img src="/images/users/avatar-2.jpg" alt=""
                                    class="avatar-sm rounded-circle"> --}}
                                <div class="d-block">
                                    <span>{{$data->customer_name}}</span>
                                   
                                </div>
                            </div>
                        </td>
                        <td>{{$data->mobile}}</td>
                        <td>{{$data->package_name}}</td>
                        <td>{{$data->created_at->format('d M Y')}}</td>
                        <td ><span style="cursor: pointer;" id="responded" wire:click="command({{$data->id}})" 
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal"
                            class="badge 
                            @if($data->call_status =='pending') bg-light-warning text-warning 
                            @elseif ($data->call_status =='responded') bg-light-success text-success 
                            @elseif ($data->call_status == 'no responded') bg-light-danger text-danger 
                            @endif
                            w-100">{{$data->call_status}}</span></td>
                        <td><a wire:click="confirmDelete({{ $data->id }})" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal"  data-bs-target="#exampleVerticallycenteredModal">Delete</a></td>
                    </tr>
                    @endforeach
                    {{------------------------}}
                  
                </tbody>
            </table>
        </div>

    <div class="modal fade @if($showModal) show @endif" 
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
                Are you sure you want to delete this visa?
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

   <!-- Command Input Modal -->
   <div class="modal fade @if($showCommantModal) show @endif" 
     id="exampleModal" 
     tabindex="-1" 
     aria-labelledby="exampleModalLabel" 
     aria-hidden="{{ !$showCommantModal ? 'true' : 'false' }}"
     @if($showCommantModal) style="display: block;" @endif
     @if($showCommantModal == false) data-bs-dismiss="modal" @endif>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter Command</h5>
                <button type="button" class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Close" 
                        wire:click="closeCommandModal"></button>
            </div>
            <div class="modal-body">
                <label for="userCommandInput" class="form-label">Command</label>
                <textarea id="userCommandInput" 
                          class="form-control" 
                          placeholder="Type your command here..." 
                          wire:model.defer="userCommand"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" 
                        data-bs-dismiss="modal" 
                        wire:click="closeCommandModal">Close</button>
                <button type="button" class="btn btn-primary" 
                        data-bs-dismiss="modal"
                        wire:click="saveCommand">Save changes</button>
            </div>
        </div>
    </div>
</div>

        <!-- <div class="modal fade @if($showModal) show @endif"
         id="exampleModalCenter"
         tabindex="-1"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true"
         @if($showModal) style="display: block;" @endif>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Delete</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            wire:click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to delete this User Visa Request?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal"
                            wire:click="closeModal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            wire:click="deleteData">Yes</button>
                </div>
            </div>
        </div>
    </div> -->
    </div>



    
</div>