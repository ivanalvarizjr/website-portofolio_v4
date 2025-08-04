<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'sopian Aji',
            'hp' => '085123456781',
        ]);
        Anggota::create([
            'nama' => 'Husni Faqih',
            'hp' => '085123456782',
        ]);
        Anggota::create([
            'nama' => 'Rousyati',
            'hp' => '085123456783',
        ]); 
    }
}
