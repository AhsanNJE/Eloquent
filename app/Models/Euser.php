<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Euser extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email'
    ];
    
    public function phone()
    {
        return $this->hasOne(Euser::class);
    }
}
