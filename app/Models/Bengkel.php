<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bengkel
 * @package App\Models
 * @version March 4, 2019, 3:25 pm UTC
 *
 * @property string name
 * @property string alamat
 * @property integer kuota
 */
class Bengkel extends Model
{
    use SoftDeletes;

    public $table = 'bengkels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'alamat',
        'kuota'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'alamat' => 'string',
        'kuota' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'alamat' => 'required',
        'kuota' => 'required'
    ];

    
}
