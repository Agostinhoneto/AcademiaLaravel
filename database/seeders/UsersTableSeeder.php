<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // Inserir um usuário de exemplo
            DB::table('users')->insert([
                'name' => 'Agostinho',
                'email' => 'agostneto6@gmail.com',
                'password' => Hash::make('123'),
            ]);        
    }
}
