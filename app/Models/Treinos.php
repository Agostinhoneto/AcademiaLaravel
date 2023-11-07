<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treinos extends Model
{
    use HasFactory;


    protected $fillable = [
        'titulo',
        'descricao',
        'duracao',
        'serie',
        'repeticoes',
        'carga',
        'data_inicio',
        'data_fim',
        'instrutores_id',
        'grupo_musculares_id',
        'aluno_id',

    ];

    public function alunos(): BelongsTo
    {
        return $this->belongsTo(Alunos::class);
    }
}
