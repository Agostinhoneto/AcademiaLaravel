<?php

namespace Database\Seeders;

use App\Models\Instrutores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instrutores::create([
            'nome' => 'Nome do Instrutor',
            'especializacao' => 'Especialidade do Instrutor',
        ]);
    }
}
