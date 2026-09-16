<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - School Ngani</title>

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

                <a href="{{ url('/dashboard') }}">
                    Dashboard
                </a>

                <a href="profile.html">
                    Profile
                </a>

                <a href="about.html" class="active">
                    About
                </a>

        </nav>

        <details class="user-menu">
            <summary class="user-info">
                <div class="avatar">ST</div>
                <div class="user-details">
                    <strong>Student</strong>
                    <small>Student</small>
                </div>
            </summary>
            <div class="user-dropdown">
                <a href="#notifications">Notifications <span>12</span></a>
                <a href="{{ url('/login') }}" class="logout-btn">Logout</a>
            </div>
        </details>
    </header>


    <!-- About Content -->
    <main class="dashboard-container">

        <section class="page-heading">

            <p class="page-label">INFORMATION</p>

            <h1>About School Ngani</h1>

            <p>
                Learn more about this simple school web system.
            </p>

        </section>


        <section class="about-card">

            <h2>School Ngani</h2>

            <p>
                School Ngani is a simple web system designed to
                provide students with an organized and
                user-friendly platform for accessing school
                information and activities.
            </p>


            <!-- Features -->
            <div class="about-features">

                <div class="feature">
                    <h3>Simple</h3>

                    <p>
                        Easy-to-understand interface for students.
                    </p>
                </div>


                <div class="feature">
                    <h3>Responsive</h3>

                    <p>
                        Works on computers, tablets, and mobile devices.
                    </p>
                </div>


                <div class="feature">
                    <h3>Organized</h3>

                    <p>
                        Information is presented in a clean and
                        organized layout.
                    </p>
                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="footer">
        <p>© 2026 School Ngani. All rights reserved.</p>
    </footer>

</body>
</html>