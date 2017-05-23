<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    //
	protected $table = 'kapal';
	protected $guarded = ['id_kapal'];
	protected $primaryKey = 'id_kapal';

	public function kapten()
	{
		return $this->hasOne('App\Kapten');
	}
	public function awak()
	{
		return $this->hasMany('App\Awak','id_awak');
	}
	public function tujuan()
	{
		return $this->belongsTo('App\Tujuan','id_tujuan');
	}	
}