<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fordulo extends Model
{
    use HasFactory;
    protected $table = 'fordulok';
    protected $fillable=['versenynev','datum'];
}
