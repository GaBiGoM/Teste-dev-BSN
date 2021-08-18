<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linguagem extends Model
{
    use HasFactory;
    protected $table = 'linguagems';

    public $timestamps = false;

    protected $fillable = ['nome'];
}
