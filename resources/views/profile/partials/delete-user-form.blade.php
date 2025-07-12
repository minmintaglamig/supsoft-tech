<form method="post" action="{{ route('profile.destroy') }}">
    @csrf
    @method('delete')

    <p class="mb-3">Once your account is deleted, all resources will be permanently removed. Please enter your password to confirm deletion.</p>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" name="password" type="password"
               class="form-control @error('password') is-invalid @enderror"
               placeholder="Password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-danger">Delete Account</button>
</form>