<div>
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="verifyOTP">
        <div class="mb-3">
            <label>Enter OTP</label>
            <input type="text" class="form-control" wire:model="otp">
        </div>
        <button type="submit" class="btn btn-success">Verify OTP</button>
    </form>
</div>
