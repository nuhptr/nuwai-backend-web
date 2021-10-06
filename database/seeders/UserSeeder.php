<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => 1,
                'name' => 'Adi Nugraha Putra',
                'email' => 'nugrahaadi733@gmail.com',
                'lama_terakhir_bekerja' => 6.0,
                'tempat_terakhir_bekerja' => 'Air BnB',
                'posisi_terakhir_bekerja' => 'Flutter Mobile Developer',
                'prestasi' => 'Hackaton Fest Applikasi',
                'skill' => 'Mobile Developer',
                'pendidikan' => 'D3',
                'kewarganegaraan' => 'Indonesia',
                'alamat' => 'Gadingrejo, Pringsewu',
                'roles' => 'USER',
                'password' => '12345678',
            ],
            [
                'id' => 2,
                'name' => 'Khan',
                'email' => 'khan@gmail.com',
                'lama_terakhir_bekerja' => null,
                'tempat_terakhir_bekerja' => null,
                'posisi_terakhir_bekerja' => null,
                'prestasi' => null,
                'skill' => 'Web Developer',
                'pendidikan' => null,
                'kewarganegaraan' => 'Indonesia',
                'alamat' => 'Gadingrejo, Pringsewu',
                'roles' => 'ADMIN',
                'password' => 'nugrahaputra',
            ],
        ];

        User::insert($user);
    }
}
