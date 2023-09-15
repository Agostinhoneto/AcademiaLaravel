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
            'duracao' => 30, 120, // Duração em minutos
            'serie' => 4,
            'repeticoes' => 12,
            'carga' => 10,
            'data_inicio' => now(),
            'data_final' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
