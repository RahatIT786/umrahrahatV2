<div class="card">
    <div class="card-body">

        <!-- Search Bar -->
        <div class="d-flex align-items-center mb-3">
            <h4 class="mb-0">All Visa Types</h4>
            <form class="ms-auto position-relative" wire:submit.prevent="">
                <input type="text" class="form-control" placeholder="Search Visa" wire:model.live="search">
            </form>
        </div>

        <!-- Visa Details Table -->
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th class="border-0 py-2">S.No</th>
                        <th class="border-0 py-2">Email</th>
                        <th class="border-0 py-2">Create Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Newsletters as $index => $Newsletter)
                        <tr>
                            <td>{{ $Newsletters->firstItem() + $index }}</td>
                            <td>{{ $Newsletter->email }}</td>
                            <td>{{ $Newsletter->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-end mt-3 mb-3">
            {{ $Newsletters->links('vendor.pagination.custom') }}  <!-- Ensure custom pagination view is available -->
        </div>

    </div>
</div>

