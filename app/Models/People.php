<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory,SoftDeletes;

    protected $primaryKey = 'id_people';
    protected $guarded = ['id_people'];

    public function user(){
        return $this->hasOne(User::class,'people_id','id_people');
    }
}
