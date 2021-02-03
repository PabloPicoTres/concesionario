<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coche extends Model
{
    use HasFactory;
    
    
    protected $table = 'coche';
    
    protected $fillable = [
        'urlFoto',
        'marca',
        'modelo',
        'caballos',
        'cilindrada'
    ];
    
}
