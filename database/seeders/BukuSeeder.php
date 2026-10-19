<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengisi data buku
        $buku = [
            [
                'judul' => 'Puji Syukur',
                'pengarang' => 'Komisi Liturgi KWI',
                'tahun_terbit' => '2005',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Berani Hidup',
                'pengarang' => 'AM. Roni Nurhayanto, dkk',
                'tahun_terbit' => '2013',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        // Memasukan data ke DB table buku
        DB::table('buku')->insert($buku);
    }
}
