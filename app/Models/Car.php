<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'number','owner_id','description','model','color','engine_type','car_category'
    ];

    public function owner()  
    {  
        return $this->belongsTo('App\Models\Owner');  
    }  
    
}
