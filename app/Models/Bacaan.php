<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bacaan extends Model
{
    use HasFactory,SoftDeletes;

    protected $primaryKey = 'id_bacaan';
    protected $guarded = ['id_bacaan'];

    public function bacaan_detail(){
        return $this->hasMany(BacaanDetail::class,'bacaan_id','id_bacaan');
    }
    public function cek_parent(){
        return $this->hasOne(BacaanDetail::class,'bacaan_id','id_bacaan');
    }
    public function favorit_user(){
        return $this->hasMany(FavoritUser::class,'bacaan_id','id_bacaan');
    }
}
