<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $primaryKey = 'course_id';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'source'
    ];

    // Relasi ke User (Pemilik kursus / Tutor)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}