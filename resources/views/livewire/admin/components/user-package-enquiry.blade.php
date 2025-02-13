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
            <h6 class="card-title mb-0">User Enquiry</h6>

        </div>

        <!-- Search Bar -->


        <!-- Visa Details Table -->
        <div class="table-responsive mt-3">
          <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th class="border-0 py-2">S.No</th>
                        <th class="border-0 py-2">User Name</th>
                        <th class="border-0 py-2">Email</th>
                        <th class="border-0 py-2">Phone</th>
                        <th class="border-0 py-2">Adult</th>
                        <th class="border-0 py-2">Child</th>
                        <th class="border-0 py-2">Packagen Name</th>
                        <th class="border-0 py-2">Package Type</th>
                        <th class="border-0 py-2">Enquiry create Time</th>
                        {{-- <th class="border-0 py-2 text-center">Delete</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userEnquiry as $index => $enquiry)

                        <tr>
                            <td>{{  $index  + 1}}</td>
                            <td>{{ $enquiry->user_name }}</td>
                            <td>{{ $enquiry->user_email }}</td>
                            <td>{{ $enquiry->user_phone }}</td>
                            <td>{{ $enquiry->user_adult }}</td>
                            <td>{{ $enquiry->user_children }}</td>
                            <td>{{ $enquiry->package_name }}</td>
                            <td>{{ $enquiry->package_type }}</td>
                            <td>{{ $enquiry->created_at }}</td>
                            {{-- <td class="text-center">
                                <a wire:click="confirmDelete({{ $enquiry->id }})" class="text-danger" data-bs-placement="bottom" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Delete Confirmation -->
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
                        Are you sure you want to delete this enquiry?
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

             <!-- Pagination -->
        <div class="d-flex justify-content-end mt-3">
            {{ $userEnquiry->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
