<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreferensiUser extends Model
{
    use HasFactory,SoftDeletes;

    protected $connection = 'pgsql';
    protected $primaryKey = 'id_preferensi_user';

    public function preferensi(){
        return $this->belongsTo(Preferensi::class,'preferensi_id','id_preferensi');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id_user');
    }
}
