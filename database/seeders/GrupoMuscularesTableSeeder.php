<?php

namespace Database\Seeders;

use App\Models\GrupoMusculares;
use Illuminate\Database\Seeder;

class GrupoMuscularesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        GrupoMusculares::create([
            'id' => 1,
            'nome' => 'Peito',
            'descricao' => 'Superior',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
