<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Catigory(){
        return $this->belongsTo(Catigory::class);
    }

    public function Borrow(){
        return $this->hasMany(Brrow::class);
    }
}
