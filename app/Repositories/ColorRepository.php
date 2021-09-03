<?php

namespace App\Repositories;

use App\Models\Color;
use App\Repositories\BaseRepository;

/**
 * Class ColorRepository
 * @package App\Repositories
 * @version September 3, 2021, 3:14 pm UTC
*/

class ColorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Color::class;
    }
}
