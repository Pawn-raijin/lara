<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student - School Ngani</title>

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
            max-width: 650px;
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

        .form-card {
            background: #fffaf2;
            border: 1px solid #ddd9d0;
            border-radius: 12px;
            padding: 35px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #c9d3d3;
            border-radius: 8px;
            background: #fffdf8;
            font-size: 15px;
            color: #173f46;
        }

        input:focus {
            outline: none;
            border-color: #f47745;
        }

        .error {
            color: #c94b32;
            font-size: 13px;
            margin-top: 6px;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .btn {
            padding: 13px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
            border: none;
            font-size: 14px;
        }

        .update {
            background: #173f46;
            color: white;
        }

        .update:hover {
            background: #f47745;
        }

        .cancel {
            background: #e7eeea;
            color: #173f46;
        }

        .cancel:hover {
            background: #dce5e0;
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

            .form-card {
                padding: 25px;
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
            STUDENT MANAGEMENT
        </div>

        <h1>
            Edit Student
        </h1>

        <p class="description">
            Update the student's information.
        </p>


        <div class="form-card">

            <form
                action="{{ route('students.update', $student->id) }}"
                method="POST">

                @csrf
                @method('PUT')


                <!-- Name -->
                <div class="form-group">

                    <label for="name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $student->name) }}"
                        required
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Course -->
                <div class="form-group">

                    <label for="course">
                        Course
                    </label>

                    <input
                        type="text"
                        id="course"
                        name="course"
                        value="{{ old('course', $student->course) }}"
                        required
                    >

                    @error('course')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Subject -->
                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        value="{{ old('subject', $student->subject) }}"
                        required
                    >

                    @error('subject')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="buttons">

                    <button
                        type="submit"
                        class="btn update">
                        Update Student
                    </button>

                    <a
                        href="{{ route('students.index') }}"
                        class="btn cancel">
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </main>


    <footer>
        © 2026 School Ngani. All rights reserved.
    </footer>

</body>
</html>