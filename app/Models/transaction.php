<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Definisikan nama tabel jika berbeda dari jamak model (opsional jika nama tabel 'transactions')
    protected $table = 'transactions';

    // Sesuaikan Primary Key karena Anda menggunakan 'transaction_id' bukan 'id'
    protected $primaryKey = 'transaction_id';

    // Field yang diizinkan untuk diisi secara massal (mass assignment)
    protected $fillable = [
        'user_id',
        'course_id',
        'date_time',
        'status',
        'duration',
    ];

    /**
     * Relasi ke tabel users (Pelajar yang memesan)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    /**
     * Relasi ke tabel courses (Kursus yang dipesan)
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }
}