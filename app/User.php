<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'name', 
                'email', 
                'password',
                'role_id',
                'siswa_id'
            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'sometimes|required|email|unique:users',
        'password' => 'required'
    ];

    /*
    * Method untuk yang mendefinisikan relasi antara model user dan model Role
    */
    public function role()
    {
        return $this->belongsTo("App\Models\Role");
    }

    public function is($role)
    {
        if ($this->role->name == $role) {
            return true;
        }

        return false;
    }

    public function siswa()
    {
        return $this->belongsTo("App\Models\Siswa");
    }
}