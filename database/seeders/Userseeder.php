<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auser = [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password')
        ];
        User::create($auser);
    }
}
