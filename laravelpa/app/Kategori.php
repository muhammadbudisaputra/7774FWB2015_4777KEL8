<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = 'kategori';
    protected $guarded = ['id_kategori'];
    protected $primaryKey = 'id_kategori';

    public function tiket()
    {
    	return $this->hasMany('App\Tiket','id_tiket');
    }

    public function listkategori()
    {
    	 $out = [];
        foreach ($this->all() as $ktg)
        {
            $out[$ktg->id_kategori] = "{$ktg->class} ({$ktg->harga}) ({$ktg->pelayanan})";
        }
        return $out;
    }
}
