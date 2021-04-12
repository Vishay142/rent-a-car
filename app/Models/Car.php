<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $guarded = [''];

    public function rent (){
        return $this->hasMany(Rent::class, 'car_id', 'id');
    }
}
