<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vereador extends Model
{
    use HasFactory;
    protected $table = 'vereadores';
    protected $fillable = ['nome', 'matricula'];
}
