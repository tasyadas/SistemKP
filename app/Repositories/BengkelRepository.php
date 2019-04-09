<?php

namespace App\Repositories;

use App\Models\Bengkel;
use App\Repositories\BaseRepository;

/**
 * Class BengkelRepository
 * @package App\Repositories
 * @version March 4, 2019, 3:25 pm UTC
*/

class BengkelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'alamat',
        'kuota',
        'status'
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
        return Bengkel::class;
    }
}
