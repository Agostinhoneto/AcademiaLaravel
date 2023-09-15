<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alunos extends Model
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
    ];

    public function treinos(): BelongsToMany
    {
        return $this->belongsToMany(Treinos::class, 'treinos');
    }

}
