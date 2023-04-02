<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tarefa
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tarefa query()
 * @mixin \Eloquent
 */
class Tarefa extends Model
{
    use HasFactory;
    protected $table = 'tarefa';
    protected $primaryKey = 'id_tarefa';

    public $timestamps = false;
    protected $fillable = [
    'id_tarefa',
    'responsavel',
    'descricao',
    'data_conclusao'    
    
    ];

    protected $guarded = [];
}
