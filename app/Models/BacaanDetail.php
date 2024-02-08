<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BacaanDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $connection = 'pgsql';
    protected $primaryKey = 'id_bacaan_detail';
    protected $guarded = ['id_bacaan_detail'];

    public function bacaan(){
        return $this->belongsTo(Bacaan::class,'bacaan_id','id_bacaan');
    }
}
