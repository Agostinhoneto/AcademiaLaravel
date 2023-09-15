<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('alunos')->insert([
            'nome' => 'Agostinho',
            'sobrenome' => 'Neto',
            'cpf' => '123456789',
            'rg' => '12345678',
            'email' => 'agostneto6@gmail.com',
            'celular' => '12 55555555',
            'genero' => 'masculino',
            'profissao' => 'dev',
            'celular' => '12 55555555',
            'observacao' => 'blablablalbalbla',
            'data_nascimento' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
