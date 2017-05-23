<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    //
    protected $table = 'tiket';
    protected $guarded = ['id_tiket'];
    protected $primaryKey = 'id_tiket';

    public function kategori()
    {
    	return $this->belongsTo('App\kategori','id_kategori');
    }
    public function relasi_tpt()
    {
    	return $this->hasMany(relasi_tpt::class,'id_tiket');
    }
}