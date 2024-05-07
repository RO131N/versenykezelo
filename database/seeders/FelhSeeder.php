<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Felhasznalo;
use DB;

class FelhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('felhasznalok')->insert([

            [
                'nev' => 'Robin',
                'email' => 'robin@app.com',
                'lakcim' => '6500baja',
                'telefon' => '06306616067',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
               
            ],
            [
                'nev' => 'Márk',
                'email' => 'mark@app.com',
                'lakcim' => '6500baja',
                'telefon' => '063063336867',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
               
            ],
            [
                'nev' => 'Geri',
                'email' => 'geri@app.com',
                'lakcim' => 'slovakia',
                'telefon' => '0636423447',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
               
            ]
            

        ]);
    }
    
}
