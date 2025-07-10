<x-guest-layout>
    <h2 class="text-center mb-4">Register</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops! Please check the fields below.</strong>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-floating mb-3">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
            <label for="name">Full Name</label>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required placeholder="Email">
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required placeholder="Password">
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input id="password_confirmation" type="password" class="form-control"
                   name="password_confirmation" required placeholder="Confirm Password">
            <label for="password_confirmation">Confirm Password</label>
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-success">Register</button>
        </div>

        <div class="text-center">
            <a href="{{ route('login') }}">Already have an account?</a>
        </div>
    </form>
</x-guest-layout>