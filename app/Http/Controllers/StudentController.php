<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     */
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        Student::create([
            'name' => $request->name,
            'course' => $request->course,
            'subject' => $request->subject,
        ]);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified student.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the student.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        $student->update([
            'name' => $request->name,
            'course' => $request->course,
            'subject' => $request->subject,
        ]);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    /**
     * Delete the specified student.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
}