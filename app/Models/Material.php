<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materiais';
    protected $fillable = ['descricao', 'valor', 'quantidade', 'fornecedor_id', 'tipo_id'];
}
