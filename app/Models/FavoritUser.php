<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoritUser extends Model
{
    use HasFactory,SoftDeletes;


    protected $primaryKey = 'id_favorit_user';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id_user');
    }
    public function bacaan(){
        return $this->belongsTo(Bacaan::class,'bacaan_id','id_bacaan');
    }
}
