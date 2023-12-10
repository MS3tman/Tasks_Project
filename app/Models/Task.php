<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',          // for forgien key.
        'completed'
    ];

    public function myUserRelation(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function check(){
        if('completed' != 'false'){
            
        }
    }

}
