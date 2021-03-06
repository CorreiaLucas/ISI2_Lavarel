<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mangas extends Model
{
    use HasFactory;
    //On ne prendra pas en charge le timestamp associé à la table
    public $timestamps = false;

    public function dessinateur()
    {
        return $this->belongsTo(Dessinateur::class);
    }

    public function scenariste()
    {
        return $this->belongsTo(Scenariste::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }
}
