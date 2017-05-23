<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    //
    protected $table = 'penumpang';
    protected $guarded = ['id_penumpang'];
    protected $primaryKey = 'id_penumpang';

    public function relasi_tpt()
    {
    	return $this->hasMany(relasi_tpt::class,'id_penumpang');
    }
}
