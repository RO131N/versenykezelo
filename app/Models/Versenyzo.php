<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versenyzo extends Model
{
    use HasFactory;
    protected $table = 'versenyzok';
    protected $fillable =['nev','forddatum'];
}
