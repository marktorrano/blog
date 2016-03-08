<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Post extends Model
{
    //
    
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'subtitle', 'content','photo'
    ];
    
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'    
    ];
    
    public function scopeCreated($query)
    {
        $query->where('created_at', '<=', Carbon::now());
    }
//    
//    public function setCreatedAtAttribute($date){
//        $this->attributes['created_at'] = Carbon::createFromFormat('d-m-Y', $date);
//    }
    
    public function comment(){
    
        return $this->hasMany('App\Models\Comment');
        
    }
}
