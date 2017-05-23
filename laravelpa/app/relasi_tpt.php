<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relasi_tpt extends Model
{
    //
    protected $table = 'relasi_tpt';
    protected $guarded = ['id_relasi'];
    protected $primaryKey = 'id_relasi';

    public function tujuan()
    {
    	return $this->belongsTo('App\tujuan','id_tujuan');
    }

    public function tiket()
    {
    	return $this->belongsTo(tiket::class,'id_tiket');
    }

    public function penumpang()
    {
    	return $this->belongsTo(Penumpang::class,'id_penumpang');
    }
}
