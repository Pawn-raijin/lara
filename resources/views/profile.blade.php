<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - School Ngani</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- Header -->
    <header class="main-header">

        <div class="brand">
            <img class="site-logo" src="{{ asset('image/logo.jpg') }}" alt="School Ngani school logo">
            <span>School Ngani</span>
        </div>

        <nav class="main-nav" aria-label="Main navigation">

        </nav>

        <details class="user-menu">
            <summary class="user-info">
                <div class="avatar">
                    {{ strtoupper(substr(session('user.username', 'Student'), 0, 2)) }}
                </div>
                <div class="user-details">
                    <strong>{{ session('user.username', 'Student') }}</strong>
                    <small>Student</small>
                </div>
            </summary>
            <div class="user-dropdown">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('logout') }}" class="logout-btn">Logout</a>
            </div>
        </details>
    </header>


    <!-- Main Content -->
    <main class="dashboard-container">

        <section class="page-heading">

            <p class="page-label">ACCOUNT</p>

            <h1>My Profile</h1>

            <p>
                View your personal account information.
            </p>

        </section>


        <section class="profile-card">

            <div class="profile-avatar">
                {{ strtoupper(substr(session('user.name', 'Student'), 0, 2)) }}
            </div>

            <h2>{{ session('user.name', 'Student') }}</h2>

            <p class="profile-role">
                Student
            </p>

            <!-- Profile Information -->
            <div class="profile-information">

                <form action="{{ route('profile.update') }}" method="POST" class="profile-edit-form">
                    @csrf
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" value="{{ session('user.name', 'Student') }}" required>

                    <label for="profile-username">Username</label>
                    <input type="text" id="profile-username" name="username" value="{{ session('user.username', 'student') }}" required>
                </form>

                <div class="profile-info-item">
                    <span>Email</span>
                    <strong>{{ session('user.email', 'Not provided') }}</strong>
                </div>

                <div class="profile-info-item">
                    <span>Account Status</span>
                    <strong class="status-active">Active</strong>
                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="footer">
        <p>© 2026 School Ngani. All rights reserved.</p>
    </footer>

</body>

<script>
    const profileForm = document.querySelector('.profile-edit-form');

    profileForm.querySelectorAll('input').forEach((input) => {
        input.addEventListener('change', () => profileForm.requestSubmit());
    });
</script>
</html>