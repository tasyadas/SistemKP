<?php

namespace App\Repositories;

use App\Models\jurusan;
use App\Repositories\BaseRepository;

/**
 * Class jurusanRepository
 * @package App\Repositories
 * @version April 7, 2019, 2:49 am UTC
*/

class jurusanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'kode_jurusan'
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
        return jurusan::class;
    }
}
