<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    
    protected $table = 'tarefa';
    protected $primarykey = 'id_tarefa';

    public $timestamps = false;

    protected $fillable = [
        'responsavel',
        'descricao',
        'data_conclusao',
    ];

}
