<?php

namespace Database\Seeders;

use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Database\Seeder;

class LamaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: run seeder of Lamaran
        $lamaran = [
            [
                'id' => 1,
                'id_users' => 1,
                'id_pekerjaan' => 4,
                'created_at' => '2021-10-07 00:00:00',
                'updated_at' => '2021-10-07 00:00:00',
            ],
            [      
                'id' => 2,
                'id_users' => 1,
                'id_pekerjaan' => 5,
                'created_at' => '2021-10-07 00:00:00',
                'updated_at' => '2021-10-07 00:00:00',
            ],
        ];

        Lamaran::insert($lamaran);
    }
}
