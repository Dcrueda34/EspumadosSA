<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $cedula
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property Role[] $roles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{

    static $rules = [
        'name' => 'required',
        'cedula' => 'required',
        'email' => 'required',
        'password' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'cedula', 'email', 'password'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles()
    {
        return $this->hasMany('App\Models\Role', 'user_id', 'id');
    }
}
