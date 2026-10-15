<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DentalSmart - Register</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="auth-container">
    <div class="auth-card">

        <!-- BACK BUTTON -->
        <a href="{{ url('/') }}" class="back-link">
            &larr; Back
        </a>

        <!-- LOGO AND TITLE -->
        <div class="auth-logo">🦷</div>

        <h1 class="auth-title">Dental Smart</h1>
        <p class="auth-subtitle">Create your account</p>

        <!-- VALIDATION ERRORS -->
        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- SUCCESS MESSAGE -->
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- REGISTER FORM -->
        <form method="POST" action="{{ route('Register') }}">
            @csrf

            <!-- FULL NAME -->
            <div class="form-group">
                <label for="name" class="form-label">
                    Full Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-input"
                    value="{{ old('name') }}"
                    placeholder="Enter your full name"
                    autocomplete="name"
                    required
                >
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email" class="form-label">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-input"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    autocomplete="email"
                    required
                >
                @error('email')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <!-- PASSWORD -->
            <div class="form-group">
                <label for="password" class="form-label">
                    Password
                </label>

                    <div class="password-wrapper">
                    <input
                    id="register_password"
                    type="password"
                    name="password"
                    class="form-input"
                    placeholder="Enter your password"
                    minlength="8"
                    required
                >

                    <button type="button"
                        class="toggle-password"
                        data-target="register_password"
                        aria-label="Show password"
                        aria-pressed="false">

                        <svg class="eye-icon"
                            width="22" height="22"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="display: none;">
                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>

                        <svg class="eye-off-icon"
                            width="22" height="22"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="display: block;">
                            <path d="M3 3l18 18"/>
                            <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>
                            <path d="M9.9 5.2A11 11 0 0 1 12 5c6.5 0 10 7 10 7a15 15 0 0 1-4 4.8"/>
                            <path d="M6.2 6.2C3.5 8 2 12 2 12s3.5 7 10 7c1.1 0 2.1-.2 3-.5"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">
                    Confirm Password
                </label>

                <div class="password-wrapper">
                    <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    class="form-input"
                    placeholder="Confirm your password"
                    required
                >

                    <button type="button"
                    class="toggle-password"
                    data-target="password_confirmation"
                    aria-label="Show password"
                    aria-pressed="false">
                        <svg class="eye-icon"
                            width="22" height="22"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="display: none;">
                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>

                        <svg class="eye-off-icon"
                             width="22" height="22"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             style="display:block;">
                            <path d="M3 3l18 18"/>
                            <path d="M10.6 10.6a2 2 0 0 0 2.8 2.8"/>
                            <path d="M9.9 5.2A11 11 0 0 1 12 5c6.5 0 10 7 10 7a15 15 0 0 1-4 4.8"/>
                            <path d="M6.2 6.2C3.5 8 2 12 2 12s3.5 7 10 7c1.1 0 2.1-.2 3-.5"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" class="auth-button">
                Create Account
            </button>
        </form>

        <!-- LOGIN LINK -->
        <div class="auth-footer">
            Already have an account?
            <a href="{{ url('/Login') }}">Log In</a>
        </div>

    </div>
</div>

<!-- External JavaScript -->
<script src="{{ asset('js/auth.js') }}" defer></script>

</body>
</html>
