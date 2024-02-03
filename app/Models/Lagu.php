<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\User;

class Lagu extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penyanyi',
        'genre_id',
        'deskripsi',
        'user_id'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
