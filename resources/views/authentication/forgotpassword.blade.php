
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forgot Password | Dental Smart</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-card">

            <!-- Back to Login -->
            <a href="{{ route('Login') }}" class="back-link">
                <span aria-hidden="true">←</span>
                <span>Back to Login</span>
            </a>

            <!-- Logo -->
            <div class="logo">🦷</div>

            <!-- Title -->
            <h1 class="title">Forgot Password?</h1>

            <p class="subtitle">
                Enter your email address and we will send you
                a password reset link.
            </p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="success-message">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email Reset Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-input"
                        placeholder="Enter your registered email"
                        required
                        autofocus
                        autocomplete="email"
                    >

                    @error('email')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="login-button">
                    Send Password Reset Link
                </button>
            </form>

            <!-- Footer -->
            <div class="auth-footer">
                Remember your password?
                <a href="{{ route('Login') }}">Log in</a>
            </div>

        </div>
    </div>
</body>
</html>
