<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'=>'gustavo',
            'email'=>'gustavo@hotmail.com',
            'password'=>bcrypt('gustavo123'),
        ])->assignRole('admin');
        
    }
}
