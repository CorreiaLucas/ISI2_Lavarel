<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =['lib_genre'];

    public function mangas(){
        return $this->hasMany(Mangas::class);
    }
}

