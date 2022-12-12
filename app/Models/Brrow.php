<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brrow extends Model
{
    protected $fillable = ['firstData','numbercart','lastData','user_id','book_id'];
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Book(){
        return $this->belongsTo(Book::class);
    }
}
