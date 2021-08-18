<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Vaga,Linguagem};

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'id_linguagem', 'id_vaga'];

    public function vaga()
    {
        return $this->belongsTo(Vaga::class, 'id_vaga');
    }

    public function linguagem()
    {
        return $this->belongsTo(Linguagem::class, 'id_linguagem');
    }

}
