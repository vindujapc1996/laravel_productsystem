<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'place'=>'calicut',
            'contact'=>'3456789',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'type'=>'admin',
        ]);
    }
}
