<?php

namespace App\Repositories;

use App\Models\movies;
use App\Repositories\BaseRepository;

/**
 * Class moviesRepository
 * @package App\Repositories
 * @version November 16, 2022, 12:11 pm UTC
*/

class moviesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'synopsis',
        'rating',
        'director',
        'id_genres'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return movies::class;
    }
}
