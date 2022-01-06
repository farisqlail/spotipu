<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name_member' => 'Batagor',
                'description_member' => 'Dengarkan musik bebas iklan Download 50 lagu di perangkat seluler Buat playlist sesukamu',
                'price' => 5000,
                'account' => 1
            ],
            [
                'name_member' => 'Cireng',
                'description_member' => 'Dengarkan musik bebas iklan Download 1k lagu di perangkat seluler Buat playlist sesukamu Group Session',
                'price' => 50000,
                'account' => 1
            ],
            [
                'name_member' => 'Klantink',
                'description_member' => 'Dengarkan musik bebas iklan Download 5k lagu di perangkat seluler Buat playlist sesukamu Group Session Join 2 akun',
                'price' => 75000,
                'account' => 2
            ],
            [
                'name_member' => 'Klantink',
                'description_member' => 'Dengarkan musik bebas iklan Download 5k lagu di perangkat seluler Buat playlist sesukamu Group Session Join 2 akun',
                'price' => 75000,
                'account' => 2
            ],
        ]);
    }
}
