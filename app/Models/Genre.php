<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lagu;

class Genre extends Model
{
    use HasFactory;

    public function lagus(){
        return $this->hasMany(Lagu::class);
    }

}
