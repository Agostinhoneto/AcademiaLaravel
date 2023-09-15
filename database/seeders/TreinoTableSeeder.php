<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treinos')->insert([
            'titulo' => 'teste',
            'descricao' => 'teste123',
            'duracao' => 30,
            'serie' => 4,
            'repeticoes' => 12,
            'carga' => 10,
            'data_inicio' => '2023-09-05',
            'data_fim' => '2023-09-05',
            'created_at' => now(),
            'updated_at' => now(),
            'instrutores_id' => 1,
            'grupo_musculares_id' => 1,
            'aluno_id' => 1,
        ]);
    }
}
