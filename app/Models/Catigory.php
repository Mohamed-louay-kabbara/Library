<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;

    public function catigory(){
        return $this->hasMany(Book::class);
    }
}
