<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechaniccars extends Model
{
    protected $table="mechaniccars";
    protected $fillable = [
        'category','owner_id','mechanic_id'
    ];
    public function owner()  
    {  
        return $this->belongsTo('App\Models\Owner');  
    }  
    public function mechanic()  
    {  
        return $this->belongsTo('App\Models\Mechanic');  
    }  
}
