<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;

// HOME / INDEX
Route::get('/', function () {
    return view('index');
})->name('home');

// LOGIN PAGE
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'username' => ['required', 'string', 'max:255'],
    ]);

    session([
        'user.name' => $data['username'],
        'user.username' => $data['username'],
    ]);

    return redirect()->route('students.index');
})->name('login.submit');

// REGISTER PAGE
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'fullname' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
    ]);

    session([
        'user.name' => $data['fullname'],
        'user.username' => $data['username'],
        'user.email' => $data['email'],
    ]);

    return redirect()->route('students.index');
})->name('register.submit');

// PROFILE PAGE
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::post('/profile', function (Request $request) {
    $data = $request->validate([
        'fullname' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255'],
    ]);

    session([
        'user.name' => $data['fullname'],
        'user.username' => $data['username'],
    ]);

    return redirect()->route('profile');
})->name('profile.update');

Route::get('/dashboard', function () {
    return redirect()->route('students.index');
})->name('dashboard');

Route::get('/logout', function (Request $request) {
    $request->session()->forget('user');

    return redirect()->route('login');
})->name('logout');

// STUDENT CRUD
Route::resource('students', StudentController::class);