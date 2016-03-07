<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'subtitle', 'content','photo'
    ];
    
    public function comment(){
    
        return $this->hasMany('App\Models\Comment');
        
    }
}
