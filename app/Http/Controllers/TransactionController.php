<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class TransactionController extends Controller
{
    public function initial_user()
    {
        // Ambil ID user yang sedang login
        // Jika belum ada sistem login, Anda bisa ganti dengan angka statis misal: $userId = 1;
        $userId = Auth::id(); 
        // Ambil data transaksi milik user tersebut
        // Gunakan with('course') untuk memanggil relasi kursus agar kita bisa menampilkan nama kursus
        $sessions = Transaction::with('course')
                            ->where('user_id', $userId)
                            ->orderBy('date_time', 'desc') // Urutkan dari jadwal terbaru
                            ->get();

        // Kirim variabel $transactions ke file view 'dashboard.blade.php'
        return view('student.dashboard', compact('sessions'));
    }
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk dari Fetch API frontend
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'date_time' => 'required|date',
            'duration'  => 'required|integer|min:1',
        ]);

        try {
            // 2. Ambil ID User (Pelajar). 
            // Jika aplikasi Anda sudah menggunakan fitur Login Laravel (Auth):
            // $userId = Auth::id();
            
            // *Catatan: Untuk keperluan testing jika belum ada sistem login, 
            // kita asumsikan user_id = 1 (Rizky)
            $userId = Auth::check() ? Auth::id() : 1; 

            // 3. Simpan data ke tabel transactions
            $transaction = Transaction::create([
                'user_id'   => $userId,
                'course_id' => $request->course_id,
                'date_time' => $request->date_time,
                'duration'  => $request->duration,
                'status'    => 'ongoing' // Sesuai default schema Anda
            ]);

            // 4. Kembalikan response sukses ke JavaScript
            return response()->json([
                'success' => true,
                'message' => 'Transaksi berhasil disimpan!',
                'data'    => $transaction
            ]);

        } catch (\Exception $e) {
            // Tangkap error jika terjadi kegagalan sistem/database
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan transaksi: ' . $e->getMessage()
            ], 500);
        }
    }
}