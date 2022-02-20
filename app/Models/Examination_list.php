<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination_list extends Model
{
    use HasFactory;

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
