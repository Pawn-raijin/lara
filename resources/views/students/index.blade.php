<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students - School Ngani</title>

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

        /* Navigation */
        .navbar {
            height: 60px;
            background: #fffaf2;
            border-bottom: 1px solid #ddd9d0;
            display: flex;
            align-items: center;
            padding: 0 7%;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #173f46;
            font-size: 17px;
            font-weight: bold;
        }

        .brand-logo,
        .avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
        }

        .brand-logo {
            object-fit: cover;
        }

        .user-menu {
            position: relative;
        }

        .user-menu summary {
            list-style: none;
        }

        .user-menu summary::-webkit-details-marker {
            display: none;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .avatar {
            display: grid;
            place-items: center;
            background: #e3f0e6;
            color: #173f46;
            font-size: 11px;
            font-weight: bold;
        }

        .user-details {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .user-details strong {
            font-size: 13px;
        }

        .user-details small {
            color: #66808a;
            font-size: 11px;
        }

        .user-dropdown {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            z-index: 10;
            min-width: 150px;
            padding: 6px;
            background: #fffaf2;
            border: 1px solid #ddd9d0;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(23, 63, 70, 0.12);
        }

        .user-dropdown a {
            display: block;
            padding: 9px 12px;
            border-radius: 5px;
            color: #173f46;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .user-dropdown a:hover {
            background: #e3f0e6;
        }

        /* Main */
        .container {
            width: 85%;
            max-width: 1100px;
            margin: 55px auto;
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
            margin-bottom: 35px;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .add-btn {
            background: #173f46;
            color: white;
            text-decoration: none;
            padding: 13px 20px;
            border-radius: 8px;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #f47745;
        }

        /* Success message */
        .success {
            background: #e3f0e6;
            border: 1px solid #c5ddca;
            color: #35613e;
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Table */
        .table-card {
            background: #fffaf2;
            border: 1px solid #ddd9d0;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            color: #66808a;
            font-size: 14px;
            padding: 15px;
            border-bottom: 1px solid #ddd9d0;
        }

        td {
            padding: 18px 15px;
            border-bottom: 1px solid #e5e1d8;
            color: #173f46;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 8px 13px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .view {
            background: #e6eef0;
            color: #173f46;
        }

        .edit {
            background: #fff0e8;
            color: #f47745;
        }

        .delete {
            background: #fbe0d7;
            color: #b94f2e;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #66808a;
        }

        /* Footer */
        footer {
            text-align: center;
            color: #66808a;
            font-size: 13px;
            margin: 70px 0 30px;
        }

        /* Mobile */
        @media (max-width: 700px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-links {
                gap: 12px;
            }

            .container {
                width: 92%;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 700px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">
        <a href="{{ route('home') }}" class="brand">
            <img class="brand-logo" src="{{ asset('image/logo.jpg') }}" alt="School Ngani school logo">
            <span>School Ngani</span>
        </a>

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
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </details>
    </nav>


    <!-- Main Content -->
    <main class="container">

        <div class="label">STUDENT MANAGEMENT</div>

        <div class="page-header">
            <div>
                <h1>Students</h1>
                <p class="description">
                    Manage student records for School Ngani.
                </p>
            </div>

            <a href="{{ route('students.create') }}" class="add-btn">
                + Add Student
            </a>
        </div>


        <!-- Success Message -->
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif


        <!-- Student Table -->
        <div class="table-card">

            @if ($students->count() > 0)

                <table>

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($students as $student)

                            <tr>
                                <td>{{ $student->id }}</td>

                                <td>
                                    <strong>{{ $student->name }}</strong>
                                </td>

                                <td>
                                    {{ $student->course }}
                                </td>

                                <td>
                                    {{ $student->subject }}
                                </td>

                                <td>
                                    <div class="actions">

                                        <a
                                            href="{{ route('students.show', $student->id) }}"
                                            class="btn view">
                                            View
                                        </a>

                                        <a
                                            href="{{ route('students.edit', $student->id) }}"
                                            class="btn edit">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('students.destroy', $student->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this student?');">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn delete">
                                                Delete
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            @else

                <div class="empty">
                    <h3>No students found</h3>
                    <p>Click "Add Student" to create your first student record.</p>
                </div>

            @endif

        </div>

    </main>


    <footer>
        © 2026 School Ngani. All rights reserved.
    </footer>

</body>
</html>