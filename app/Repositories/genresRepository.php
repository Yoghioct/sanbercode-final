<?php

namespace App\Repositories;

use App\Models\genres;
use App\Repositories\BaseRepository;

/**
 * Class genresRepository
 * @package App\Repositories
 * @version November 16, 2022, 11:54 am UTC
*/

class genresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'genre'
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
        return genres::class;
    }
}
