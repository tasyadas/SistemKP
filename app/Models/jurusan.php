<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class jurusan
 * @package App\Models
 * @version April 7, 2019, 2:49 am UTC
 *
 * @property string name
 * @property string kode_jurusan
 */
class jurusan extends Model
{
    use SoftDeletes;

    public $table = 'jurusans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'kode_jurusan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'kode_jurusan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'kode_jurusan' => 'required'
    ];

    public function siswa()
    {
        return $this->hasMany("App\Models\Siswa");
    }

    
}
