<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    public function Examination_pricess(){
        return $this->hasMany(Examination_prices::class);
    }


    public function Appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function Assessment(){
        return $this->hasMany(Assessment::class);
    }


}
