<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'nama' => 'Admin Senja Printing',
            'username' => 'Admin',
            'password' => '$2a$12$V7tt1JsmBYRB0bpMuVz.0eHeglKC/vBDYV2FvvPu2q0aRNF6jKY5C',//Senjaprinting
            'email' => 'senjaprintin3@gmail.com',
            'alamat' => 'Ditempat',
            'no_hp' => '081228615885',
            'role' => 'admin'
        ];

        foreach ($users as $user) {
            user::create($user);
        }
    }
}
