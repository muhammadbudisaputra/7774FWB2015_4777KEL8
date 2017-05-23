<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awak extends Model
{
    //
    protected $table = 'awak';
    protected $guarded = ['id_awak'];
    protected $primaryKey = 'id_awak';

    public function kapal()
    {
    	return $this->belongsTo('App\kapal','id_kapal');
    }
}