<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'phone',
        
    ];
    public function euser()
    {
        return $this->belongsTo(Euser::class,'user_id','id');  
    }
}
