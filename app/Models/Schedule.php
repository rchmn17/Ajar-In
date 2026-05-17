<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Sesuaikan dengan primary key di migration
    protected $primaryKey = 'schedule_id';

    // Kolom yang diizinkan untuk diisi (mass assignment)
    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'status',
        'transaction_id'
    ];

    // Relasi ke tabel User (Pengajar)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'transaction_id');
    }
}