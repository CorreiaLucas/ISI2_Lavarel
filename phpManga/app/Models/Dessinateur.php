<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Model
{
    use HasFactory;
    public function getAll(){
        $dessinateurs = DB::table('dessinateur')->get();
        return $dessinateurs; 
    }
}
