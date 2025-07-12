<form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="current_password" class="form-label">Current Password</label>
        <input id="current_password" name="current_password" type="password"
               class="form-control @error('current_password') is-invalid @enderror"
               autocomplete="current-password">
        @error('current_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input id="password" name="password" type="password"
               class="form-control @error('password') is-invalid @enderror"
               autocomplete="new-password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password"
               class="form-control @error('password_confirmation') is-invalid @enderror"
               autocomplete="new-password">
        @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Save</button>

    @if (session('status') === 'password-updated')
        <div class="mt-2 text-success">Saved.</div>
    @endif
</form>