<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Details - School Ngani</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f2eb;
            color: #173f46;
        }

        .navbar {
            height: 74px;
            background: #fffaf2;
            border-bottom: 1px solid #ddd9d0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #173f46;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #f47745;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 60px auto;
        }

        .label {
            color: #f47745;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .description {
            color: #66808a;
            margin-bottom: 30px;
        }

        .student-card {
            background: #fffaf2;
            border: 1px solid #ddd9d0;
            border-radius: 12px;
            padding: 35px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .student-header {
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 1px solid #ddd9d0;
            margin-bottom: 10px;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #e0ece7;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 25px;
            font-weight: bold;
            color: #173f46;
        }

        .student-header h2 {
            margin-bottom: 5px;
        }

        .student-id {
            color: #66808a;
            font-size: 14px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 18px 5px;
            border-bottom: 1px solid #e5e1d8;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #66808a;
        }

        .info-value {
            font-weight: bold;
            text-align: right;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .back {
            background: #e7eeea;
            color: #173f46;
        }

        .edit {
            background: #173f46;
            color: white;
        }

        .edit:hover {
            background: #f47745;
        }

        footer {
            text-align: center;
            color: #66808a;
            font-size: 13px;
            margin: 70px 0 30px;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-links {
                gap: 12px;
            }

            .container {
                width: 92%;
            }

            .student-card {
                padding: 25px;
            }

            .info-row {
                flex-direction: column;
                gap: 6px;
            }

            .info-value {
                text-align: left;
            }

            .buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            School Ngani
        </div>

        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('students.index') }}">Students</a>
        </div>

    </nav>


    <main class="container">

        <div class="label">
            STUDENT INFORMATION
        </div>

        <h1>
            Student Details
        </h1>

        <p class="description">
            View the complete information of this student.
        </p>


        <div class="student-card">

            <div class="student-header">

                <div class="avatar">
                    {{ strtoupper(substr($student->name, 0, 1)) }}
                </div>

                <h2>
                    {{ $student->name }}
                </h2>

                <p class="student-id">
                    Student ID: {{ $student->id }}
                </p>

            </div>


            <div class="info-row">

                <span class="info-label">
                    Name
                </span>

                <span class="info-value">
                    {{ $student->name }}
                </span>

            </div>


            <div class="info-row">

                <span class="info-label">
                    Course
                </span>

                <span class="info-value">
                    {{ $student->course }}
                </span>

            </div>


            <div class="info-row">

                <span class="info-label">
                    Subject
                </span>

                <span class="info-value">
                    {{ $student->subject }}
                </span>

            </div>


            <div class="buttons">

                <a
                    href="{{ route('students.index') }}"
                    class="btn back">
                    ← Back to Students
                </a>

                <a
                    href="{{ route('students.edit', $student->id) }}"
                    class="btn edit">
                    Edit Student
                </a>

            </div>

        </div>

    </main>


    <footer>
        © 2026 School Ngani. All rights reserved.
    </footer>

</body>
</html>