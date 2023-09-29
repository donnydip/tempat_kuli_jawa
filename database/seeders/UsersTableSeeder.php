<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$user1 = User::create([
            'name' => 'Eren Yeager',
            'alamat' => 'Paradise',
            'handphone' => '085755410212',
            'email' => 'erenmika22@mail.com',
            'password' => bcrypt('1234567890'),
            'nik' => '3520080904010011',
            'keahlian' => 'Builder',
        ]);

$user2 = User::create([
            'name' => 'Sutoyo',
            'alamat' => 'Tulungagung',
            'handphone' => '085755410412',
            'email' => 'toyogamblang@mail.com',
            'password' => bcrypt('1234567890'),
            'nik' => '3520080904010111',
            'keahlian' => 'Mechanic',
        ]);

$user3 = User::create([
            'name' => 'Reyna',
            'alamat' => 'Breeze',
            'handphone' => '085755310212',
            'email' => 'reynapalak2@mail.com',
            'password' => bcrypt('1234567890'),
            'nik' => '3520080909010098',
            'keahlian' => 'Electronic Services',
        ]);
        $user1 ->assignRole('user');
        $user2 ->assignRole('user');
        $user3 ->assignRole('user');
        $user1 ->assignRole('tukang');
        $user2 ->assignRole('tukang');
        $user3 ->assignRole('tukang');

    }
}
