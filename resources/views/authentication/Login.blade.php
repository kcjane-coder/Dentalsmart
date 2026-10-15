
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Dental Clinic</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <script src="{{ asset('js/auth.js') }}" defer></script>
</head>

<body>
    <div class="login-container">
        <div class="login-card">

            <!-- Back to Welcome Page -->
            <a href="{{ route('welcome') }}" class="back-link">
                <span aria-hidden="true">←</span>
                <span>Back</span>
            </a>

            <!-- Logo -->
            <div class="logo">🦷</div>

            <!-- Title -->
            <h1 class="title">Dental Smart</h1>

            <p class="subtitle">Login to your account</p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('Login') }}">
                @csrf

                <!-- Email -->
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
                        placeholder="Enter your email"
                        required
                        autofocus
                        autocomplete="username"
                    >

                    @error('email')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                <div class="password-wrapper">
        <input
            id="password"
            type="password"
            name="password"
            class="form-input"
            placeholder="Enter your password"
            required
            autocomplete="current-password"
        >

        <button
            type="button"
            class="toggle-password"
            data-target="password"
            aria-label="Show password"
            aria-pressed="false"
        >
                    <svg class="eye-icon" style="display: none;"
                        viewBox="0 0 24 24" width="21" height="21"
                        fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7S2 12 2 12Z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>

                    <svg class="eye-off-icon" style="display: block;"
                        viewBox="0 0 24 24" width="21" height="21"
                        fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M3 3l18 18"/>
                        <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>
                        <path d="M9.9 5.2A10.8 10.8 0 0 1 12 5c5 0 8.3 3.1 10 7a11.8 11.8 0 0 1-4 4.8"/>
                        <path d="M6.6 6.6A12.2 12.2 0 0 0 2 12c1.7 3.9 5 7 10 7 1.3 0 2.5-.2 3.6-.7"/>
                    </svg>
                </button>
                </div>

                @error('password')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="login-button">
                Log in
            </button>
            </form>

            <!-- Forgot Password -->
            <div class="forgot-password">
                <a href="{{ route('ForgotPassword') }}">
                    Forgot Password?
                </a>
            </div>

            <!-- Register Link -->
            <div class="auth-footer">
                Create an account?
                <a href="{{ url('/Register') }}">Register</a>
            </div>

            </div> 
            </div> 

    
</body>
</html>
