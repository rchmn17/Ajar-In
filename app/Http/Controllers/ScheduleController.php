<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Mengambil daftar jam yang sudah tidak tersedia berdasarkan tanggal
     */
    public function getSchedules(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date'
        ]);

        // Asumsi user yang login adalah pengajar
        $userId = Auth::id(); 
        
        // Cari jam berapa saja yang sudah terekam di DB (tidak tersedia)
        $bookedHours = Schedule::where('user_id', $userId)
            ->where('tanggal', $request->tanggal)
            ->pluck('jam'); // Hanya ambil kolom jam

        return response()->json([
            'booked_hours' => $bookedHours
        ]);
    }

    /**
     * Menyimpan slot jadwal menjadi tidak tersedia
     */
    public function storeSchedules(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam'     => 'required|array', // Harus berupa array, contoh: ['07:00', '08:00']
        ]);

        $userId = Auth::id();
        $tanggal = $request->tanggal;

        // Proses setiap jam yang dikirim dari frontend
        foreach ($request->jam as $jam) {
            // Gunakan updateOrCreate untuk mencegah duplikasi data
            Schedule::updateOrCreate(
                [
                    'user_id' => $userId, 
                    'tanggal' => $tanggal, 
                    'jam' => $jam
                ],
                [
                    'status' => 'tidak tersedia'
                ]
            );
        }

        return response()->json(['message' => 'Jadwal berhasil disimpan!']);
    }
}