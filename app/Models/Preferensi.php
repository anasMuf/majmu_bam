<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preferensi extends Model
{
    use HasFactory,SoftDeletes;


    protected $primaryKey = 'id_preferensi';

    public function preferensi_user(){
        return $this->hasMany(PreferensiUser::class,'preferensi_id','id_preferensi');
    }
}
