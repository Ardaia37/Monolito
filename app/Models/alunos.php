<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sobrenome', 'email', 'data_nascimento']; // Adicione 'sobrenome'
}
