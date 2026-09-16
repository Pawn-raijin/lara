<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Ngani | Learn, Grow, Achieve</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="home-page">

    <header class="home-header">
        <a href="{{ url('/') }}" class="home-brand" aria-label="School_Ngani home">
            <img src="{{ asset('image/logo.jpg') }}" alt="School Ngani school logo">
            <span>School Ngani</span>
        </a>

        <nav class="home-nav" aria-label="Main navigation">
            <a href="#about">About us</a>
        </nav>
    </header>

    <main>
        <section class="home-hero">
            <div class="home-hero-copy">
                <p class="home-eyebrow">A community built for possibility</p>
                <h1>Welcome to <span>School Ngani</span></h1>
                <p class="home-subtitle">
                    Discover a place where students learn, grow, and achieve their goals.
                </p>
                <p class="home-description">
                    Stay updated with school news, activities, announcements, and important information.
                </p>
                <p class="home-description">
                    <p class="home-description">
                   <strong>Ready to be part of School Ngani?</strong>
                </p>
                </p>
                <a href="{{ route('login') }}" class="btn btn-primary home-cta">
                    Get Started <span aria-hidden="true">&#8594;</span>
                </a>
            </div>
        </section>

        <section class="home-about" id="about">
            <div class="home-about-heading">
                <p class="home-eyebrow">Our school community</p>
                <h2>Where every student can find their next step.</h2>
            </div>
            <div class="home-about-copy">
                <p>
                    <strong>School Ngani</strong> is a welcoming school community dedicated to helping students learn, grow, and achieve their full potential. Our website provides students, teachers, parents, and visitors with easy access to school information, announcements, activities, and important updates.
                </p>
                <p>
                    <strong>We aim</strong> to create a supportive learning environment where every student can develop their skills, discover their talents, and prepare for a successful future.
                </p>
                 <p>
                   <strong>What We Offer</strong>
<br>
                <strong>Quality Education</strong>— Learn through engaging lessons and supportive teaching.<br>
                <strong>Student Growth</strong> — Develop skills, confidence, and leadership.<br>
                <strong>Community</strong> — Connect students, teachers, and parents.<br>
                <strong>Opportunities</strong> — Discover talents through activities and programs.<br>
                </p>
            </div>
        </section>
    </main>

    <footer class="home-footer">
        <span>School Ngani</span>
        <span>Learning today. Leading tomorrow.</span>
    </footer>

</body>
</html>