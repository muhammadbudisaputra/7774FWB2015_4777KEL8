<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pengguna extends Model implements AuthenticatableContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Authenticatable;
    protected $table = 'Pengguna';


    protected $fillable = [
        'username', 'password',
    ];
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
