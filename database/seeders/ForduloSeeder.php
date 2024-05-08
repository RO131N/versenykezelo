<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fordulo;
use DB;

class ForduloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fordulok')->insert([

            [
                'versenynev' => 'Városi',
                'datum' => '2022-12-12',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
               
            ],
            [
                'versenynev' => 'Megyei',
                'datum' => '2023-12-12',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
               
            ],
            [
                'versenynev' => 'Országos',
                'datum' => '2024-12-12',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
               
            ],

        ]);
    }
}
