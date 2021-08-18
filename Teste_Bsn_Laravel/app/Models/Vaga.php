<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Linguagem;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'id_linguagem'];

    public function linguagem()
    {
        return $this->belongsTo(Linguagem::class, 'id_linguagem');
    }

}
