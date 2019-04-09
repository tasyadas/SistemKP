<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Siswa
 * @package App\Models
 * @version March 5, 2019, 9:23 am UTC
 *
 * @property string name
 * @property string class
 * @property string nis
 * @property string status
 */
class Siswa extends Model
{
    use SoftDeletes;

    public $table = 'siswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'class',
        'nis',
        'status',
        'jurusan_id',
        'bengkel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'class' => 'string',
        'nis' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'class' => 'required',
        'nis' => ['required', 'unique:siswas']
    ];

    public function jurusan()
    {
        return $this->belongsTo("App\Models\jurusan");
    }
    
    public function bengkel()
    {
        return $this->belongsTo("App\Models\Bengkel");
    }

    public function user()
    {
        return $this->hasOne("App\User");
    }
}
