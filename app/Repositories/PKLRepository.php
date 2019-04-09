<?php

namespace App\Repositories;

use App\Models\PKL;
use App\Repositories\BaseRepository;

/**
 * Class PKLRepository
 * @package App\Repositories
 * @version April 6, 2019, 3:42 pm UTC
*/

class PKLRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'nis',
        'academic_year',
        'company',
        'start_date',
        'end_date',
        'major',
        'class'
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
        return PKL::class;
    }
}
