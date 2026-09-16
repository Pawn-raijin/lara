<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - School Ngani</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- Authentication Container -->
    <main class="auth-page">

        <!-- Login Card -->
        <section class="auth-card">

            <img class="auth-logo" src="{{ asset('image/logo.jpg') }}" alt="School Ngani school logo">

            <h1>Welcome Back!</h1>

            <p class="auth-subtitle">
                Login to your School Ngani account
            </p>

            <!-- Login Form -->
            <form action="{{ route('login.submit') }}" method="POST">

                @csrf

                <!-- Email / Username -->
                <div class="form-group">
                    <label for="username">
                        Email or Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your email or username"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary btn-full">
                    Login
                </button>

            </form>

            <!-- Registration Link -->
            <p class="auth-footer">
                Don't have an account?
                <a href="{{ route('register') }}">Register</a>
            </p>

        </section>

    </main>

</body>
</html>