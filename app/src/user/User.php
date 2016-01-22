<?php

namespace src\user;

use Illuminate\Foundation\Auth\User as Authenticatable;
use src/user;

class User extends Authenticatable
{

    /**
     * table name
     */
    protected $table = 'role';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','address','zip','profileimagepath','trainee_id','department_id',
        'company_id','lastlogin'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * user hasMany roles
     */
    public function role()
    {
        return $this->hasMany('src/user/role');
    }
}
