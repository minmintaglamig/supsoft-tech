<x-guest-layout>
    <h2 class="text-center mb-4">Login</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops! Something went wrong.</strong>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-floating mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
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

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

        <div class="text-center mb-3">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>

        <hr>
        <div class="text-center">
            <a href="{{ route('auth.linkedin') }}" class="btn btn-outline-secondary w-100">
                <i class="fab fa-linkedin me-2"></i> Login with LinkedIn
            </a>
        </div>
    </form>
</x-guest-layout>