<?php

namespace Database\Seeders;

use App\Models\Penjual;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apenjual = [
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('password')
        ];
        Penjual::create($apenjual);
    }
}
