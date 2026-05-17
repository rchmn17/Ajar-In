<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Tampilkan halaman registrasi Student
     */
    public function showStudentRegisterForm()
    {
        return view('student.regist'); // Arahkan ke blade view Anda
    }

    /**
     * Proses registrasi Student
     */
    public function registerStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nation' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle upload file jika ada
        $profilePicturePath = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'role' => 'student', 
            'nation' => $request->nation,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'profile_picture' => $profilePicturePath,
            'state' => 'active',
        ]);


        return redirect()->route('student.login')->with('success', 'Registrasi Student Berhasil!');
    }

    /**
     * Tampilkan halaman registrasi Instructor
     */
    public function showInstructorRegisterForm()
    {
        return view('instructor.regist'); 
    }

    /**
     * Proses registrasi Instructor
     */
    public function registerInstructor(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'nation' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'education' => 'required|string|max:255', 
            'credit_card' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profilePicturePath = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'role' => 'instructor', 
            'nation' => $request->nation,
            'birth_date' => $request->birth_date,
            'education' => $request->education,
            'credit_card' => $request->credit_card,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'profile_picture' => $profilePicturePath,
            'state' => 'active',
        ]);


        return redirect()->route('instructor.login')->with('success', 'Registrasi Instructor Berhasil!');
    }
}