<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PKL
 * @package App\Models
 * @version April 6, 2019, 3:42 pm UTC
 *
 * @property string name
 * @property string nis
 * @property string academic_year
 * @property string company
 * @property string start_date
 * @property string end_date
 * @property string major
 * @property string class
 */
class PKL extends Model
{
    use SoftDeletes;

    public $table = 'p_k_l_s';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'nis',
        'academic_year',
        'company',
        'start_date',
        'end_date',
        'major',
        'class',
        'siswa_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'nis' => 'string',
        'academic_year' => 'string',
        'company' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'major' => 'string',
        'class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'nis' => ['required', 'unique:siswas'],
        'academic_year' => 'required',
        'company' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'major' => 'required',
        'class' => 'required',
        'siswa_id' => 'required',
    ];

    public function siswa()
    {
        return $this->belongsTo("App\Models\Siswa");
    }
    
}
