<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class genres
 * @package App\Models
 * @version November 16, 2022, 11:54 am UTC
 *
 * @property string $genre
 */
class genres extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'genres';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'genre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'genre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'genre' => 'required'
    ];

    
}
