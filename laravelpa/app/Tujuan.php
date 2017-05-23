<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    //
    protected $table ='tujuan';
    protected $guarded = ['id_tujuan'];
    protected $primaryKey = 'id_tujuan';

    public function kapal()
    {
    	return $this->hasMany('App\kapal');
    }
    public function relasi_tpt()
    {
    	return $this->hasMany(relasi_tpt::class,'id_tujuan');
    }
}