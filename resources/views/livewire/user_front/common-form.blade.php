<div>
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="p-3">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label"><i class="fas fa-user"></i> Name</label>
                <input type="text" class="form-control" wire:model="name" placeholder="Enter your name">
                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" class="form-control" wire:model="email" placeholder="Enter your email">
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
                <label class="form-label"><i class="fas fa-phone"></i> Phone</label>
                <input type="text" class="form-control" wire:model="phone" placeholder="Enter your phone number">
                @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-3">
                <label class="form-label"><i class="fas fa-user-friends"></i> Adults</label>
                <input type="number" class="form-control" wire:model="adult" min="1">
                @error('adult') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-3">
                <label class="form-label"><i class="fas fa-child"></i> Children</label>
                <input type="number" class="form-control" wire:model="children" min="0">
                @error('children') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
        </div>

        {{-- CAPTCHA --}}
        {{-- <div class="d-flex align-items-center">
            <img style="margin: 10px" src="{{ captcha_src() }}" alt="CAPTCHA">
            <a href="javascript:void(0);" onclick="refreshCaptcha()"> 🔄 Refresh</a>
        </div>

        <input type="text" wire:model="captcha" class="form-control" placeholder="Enter CAPTCHA"> --}}

        {{-- @error('captcha')
            <p class="text-danger">{{ $message }}</p>
        @enderror --}}

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-4 py-2">
                <i class="fas fa-paper-plane"></i> Submit
            </button>
        </div>
    </form>
</div>

<script src="{{asset('asserts/captch.js')}}"></script>
