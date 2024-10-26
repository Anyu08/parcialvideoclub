<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    // Define los campos que pueden ser llenados masivamente
    protected $fillable = [
        'title',
        'year',
        'director',
        'poster',
        'rented',
        'synopsis',
    ];

    // Si necesitas definir la tabla en caso de que no siga la convención, puedes hacerlo aquí
    // protected $table = 'movies'; // Descomenta si la tabla no se llama 'movies'
}