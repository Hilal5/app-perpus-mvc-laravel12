<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 50 buku random
        Book::factory(50)->create();

        // Atau buat dengan state tertentu
        Book::factory(10)->classic()->create(); // 10 buku klasik
        Book::factory(15)->recent()->create();  // 15 buku terbaru

        // Atau buat data spesifik
        Book::factory()->create([
            'title' => 'Laravel 12 untuk Pemula',
            'author' => 'John Doe',
            'isbn' => '9781234567890',
            'publication_year' => 2025,
            'description' => 'Panduan lengkap belajar Laravel 12 dari dasar hingga mahir.'
        ]);
    }
}
