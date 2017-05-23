<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kapten extends Model
{
    //
    protected $table = 'kapten';
    protected $guarded = ['id_kapten'];
    protected $primaryKey = 'id_kapten';

    public function kapal()
    {
    	return $this->belongsTo('App\kapal','id_kapal');
    }
}