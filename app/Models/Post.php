<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'subtitle', 'content','photo'
    ];
    
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'    
    ];
    
    public function comment(){
    
        return $this->hasMany('App\Models\Comment');
        
    }
}
