<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded=[];
    public function kategori(){
        return $this->belongsTo(Tiket::class, 'id_tiket');
    }
}
