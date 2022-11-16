<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class movies
 * @package App\Models
 * @version November 16, 2022, 12:11 pm UTC
 *
 * @property string $name
 * @property string $synopsis
 * @property number $rating
 * @property string $director
 * @property number $id_genres
 */
class movies extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'movies';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'synopsis',
        'rating',
        'director',
        'id_genres'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'synopsis' => 'string',
        'rating' => 'double',
        'director' => 'string',
        'id_genres' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'synopsis' => 'required',
        'rating' => 'required',
        'director' => 'required',
        'id_genres' => 'required'
    ];

    
}
