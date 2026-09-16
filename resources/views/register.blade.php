<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - School Ngani</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- Registration Container -->
    <main class="auth-page">

        <!-- Registration Card -->
        <section class="auth-card register-card">

            <img class="auth-logo" src="{{ asset('image/logo.jpg') }}" alt="School Ngani school logo">

            <h1>Create Account</h1>

            <p class="auth-subtitle">
                Register for a new School Ngani account
            </p>

            <!-- Registration Form -->
            <form action="{{ route('register.submit') }}" method="POST">

                @csrf

                <!-- Full Name -->
                <div class="form-group">
                    <label for="fullname">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Enter your full name"
                        required
                    >
                </div>

                <!-- Username -->
                <div class="form-group">
                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Choose a username"
                        required
                    >
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="register-password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="register-password"
                        name="password"
                        placeholder="Create a password"
                        required
                    >
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="confirm-password">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="confirm-password"
                        name="confirm-password"
                        placeholder="Confirm your password"
                        required
                    >
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn btn-primary btn-full">
                    Register
                </button>

            </form>

            <!-- Login Link -->
            <p class="auth-footer">
                Already have an account?
                <a href="{{ route('login') }}">Login</a>
            </p>

        </section>

    </main>

</body>
</html>