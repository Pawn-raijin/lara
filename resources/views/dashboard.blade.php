<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - School Ngani</title>

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- ==============================
         HEADER
    =============================== -->
    <header class="main-header">

        <div class="brand">
            <img class="site-logo" src="{{ asset('image/logo.jpg') }}" alt="School Ngani school logo">
            <span>School Ngani</span>
        </div>

        <nav class="main-nav" aria-label="Main navigation">

                <a href="{{ route('students.index') }}" class="active">
                    Dashboard
                </a>

                <a href="{{ route('profile') }}">
                    Profile
                </a>

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
                <a href="{{ route('profile') }}">Profile</a>
                <a href="{{ route('logout') }}" class="logout-btn">Logout</a>
            </div>
        </details>
    </header>


    <!-- ==============================
         MAIN DASHBOARD
    =============================== -->
    <main class="dashboard-container">

        <!-- Welcome Section -->
        <section class="welcome-section">

            <div>
                <p class="page-label">DASHBOARD</p>

                <h1>Welcome to the Dashboard!</h1>

                <p>
                    Hello Student! Here's an overview of your
                    activities and information.
                </p>
            </div>

        </section>


        <!-- ==============================
             STATISTICS CARDS
        =============================== -->
        <section class="stats-grid">

            <!-- Subject -->
            <div class="stat-card">

                <div>
                    <p>Subject</p>
                    <h2>8</h2>
                </div>

            </div>


            <!-- Activities -->
            <div class="stat-card">

                <div>
                    <p>Activities</p>
                    <h2>86</h2>
                </div>

            </div>


        </section>


        <!-- ==============================
             POSTS AND COMMENTS
        =============================== -->
        <section class="posts-section">

            <div class="dashboard-card post-composer">
                <div class="card-header">
                    <div>
                        <h2>Posts and Comments</h2>
                        <p>Share updates and join the school conversation</p>
                    </div>
                </div>

                <form class="post-form" action="#posts" method="get">
                    <label for="post-content">Create a post</label>
                    <textarea id="post-content" name="post-content" rows="3" placeholder="Share something with your school community..."></textarea>
                    <div class="post-form-footer">
                        <span>School community</span>
                        <button type="submit" class="btn btn-primary">Publish Post</button>
                    </div>
                </form>
            </div>

            <div class="dashboard-card post-card" id="posts">
                <div class="post-author-row">
                    <div>
                        <strong>Ms. Mokoena</strong>
                        <span>Teacher · Today, 9:15 AM</span>
                    </div>
                </div>

                <h2>Welcome back, School Ngani students!</h2>
                <p class="post-body">Remember to review your subject notes before Friday's assessment. Ask questions and support one another as you prepare.</p>

                <div class="post-actions">
                    <span>12 likes</span>
                    <span>3 comments</span>
                </div>

                <div class="comments-list">
                    <div class="comment">
                        <div>
                            <strong>Student</strong>
                            <p>Thank you for the reminder, Ma'am.</p>
                        </div>
                    </div>
                    <div class="comment">
                        <div>
                            <strong>Linda Williams</strong>
                            <p>Our study group will meet after school today.</p>
                        </div>
                    </div>
                </div>

                <form class="comment-form" action="#posts" method="get">
                    <label for="comment-content">Add a comment</label>
                    <div class="comment-input-row">
                        <input type="text" id="comment-content" name="comment-content" placeholder="Write a comment...">
                        <button type="submit" class="btn btn-primary">Comment</button>
                    </div>
                </form>
            </div>

        </section>

    </main>


    <!-- ==============================
         FOOTER
    =============================== -->
    <footer class="footer">

        <p>
            © 2026 School Ngani. All rights reserved.
        </p>

    </footer>

</body>
</html>