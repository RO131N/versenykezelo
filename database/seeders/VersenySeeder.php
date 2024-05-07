<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Verseny;
use DB;

class VersenySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('versenyek')->insert([

        [
            'megnevezes' => 'Városi',
            'datum' => '2022',
            'nyelvek' => 'magyar,angol',
            'jopontok' => '2',
            'rosszpontok' => '3',
            'urespontok' => '0',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),

        ],
        [
            'megnevezes' => 'Megyei',
            'datum' => '2023',
            'nyelvek' => 'magyar,angol,francia',
            'jopontok' => '1',
            'rosszpontok' => '1',
            'urespontok' => '1',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),

        ],
        [
            'megnevezes' => 'Országos',
            'datum' => '2024',
            'nyelvek' => 'magyar,angol,spanyol,francia,orosz',
            'jopontok' => '2',
            'rosszpontok' => '5',
            'urespontok' => '3',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),

        ],

    ]);
}
}
