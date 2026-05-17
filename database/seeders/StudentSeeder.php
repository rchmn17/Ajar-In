<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Menggunakan format data Indonesia (opsional)

        // 1. BUAT AKUN SPESIFIK UNTUK TESTING (Biar gampang login saat uji coba)
        
        // Akun Student Testing
        User::create([
            'name' => 'Budi Santoso',
            'role' => 'student',
            'education' => 'S1 Teknik Informatika',
            'profile_picture' => null,
            'state' => 'active',
            'nation' => 'Indonesia',
            'credit_card' => $faker->creditCardNumber(),
            'phone' => '081234567890',
            'birth_date' => '2002-05-15',
            'email' => 'student@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password: password
        ]);

        // Akun Instructor Testing
        User::create([
            'name' => 'Dr. Dian Wijaya',
            'role' => 'instructor',
            'education' => 'S3 Ilmu Komputer',
            'profile_picture' => null,
            'state' => 'active',
            'nation' => 'Indonesia',
            'credit_card' => $faker->creditCardNumber(),
            'phone' => '081298765432',
            'birth_date' => '1985-08-20',
            'email' => 'instructor@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password: password
        ]);


        // 2. BUAT DATA MASSAL (LOOPING DATA ACAK)

        // Membuat 15 data Student acak
        for ($i = 1; $i <= 15; $i++) {
            User::create([
                'name' => $faker->name(),
                'role' => 'student',
                'education' => $faker->randomElement(['SMA', 'D3 Keperawatan', 'S1 Sistem Informasi']),
                'profile_picture' => null,
                'state' => $faker->randomElement(['active', 'inactive']),
                'nation' => $faker->country(),
                'credit_card' => $faker->optional(0.5)->creditCardNumber(), // 50% kemungkinan null
                'phone' => $faker->phoneNumber(),
                'birth_date' => $faker->date('Y-m-d', '2006-12-31'), // Maksimal kelahiran tahun 2006
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Semua password acak diatur 'password'
            ]);
        }

        // Membuat 5 data Instructor acak
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => $faker->name(),
                'role' => 'instructor',
                'education' => $faker->randomElement(['S2 Manajemen', 'S2 Teknik Elektro', 'S3 Fisika']),
                'profile_picture' => null,
                'state' => 'active', // Instruktur di-default aktif semua untuk sampel
                'nation' => $faker->country(),
                'credit_card' => $faker->optional(0.7)->creditCardNumber(),
                'phone' => $faker->phoneNumber(),
                'birth_date' => $faker->date('Y-m-d', '1995-12-31'), // Instruktur berusia lebih matang
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);
        }
    }
}