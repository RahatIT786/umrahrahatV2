<div>
    <!-- ✅ Show success message when OTP is sent -->
    @if($successMessage)
        <div class="alert alert-{{ $otpSent ? 'success' : 'danger' }}">{{ $successMessage }}</div>
    @endif

    <!-- ✅ Hide registration form if OTP is sent -->
    @if(!$otpSent)
    <form wire:submit.prevent="sendOTP">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" class="form-control" wire:model="phone">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send OTP</button>
    </form>
    @endif
</div>

<script>
    window.addEventListener('openOtpModal', event => {
        var otpModal = new bootstrap.Modal(document.getElementById('otpModal'));
        otpModal.show();
    });

    window.addEventListener('closeOtpModal', event => {
        var otpModalEl = document.getElementById('otpModal');
        var otpModal = bootstrap.Modal.getInstance(otpModalEl);
        if (otpModal) {
            otpModal.hide();
        }
    });
</script>
