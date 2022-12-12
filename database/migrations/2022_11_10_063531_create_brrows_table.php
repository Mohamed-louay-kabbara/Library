<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('brrows', function (Blueprint $table) {
            $table->id();
            $table->date('firstData');
            $table->date('lastData');
            $table->integer('numbercart')->default(0);
            $table->foreignId('user_id')->constrained('users')->CascadeOnDelete();
            $table->foreignId('book_id')->constrained('books')->CascadeOnDelete();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('brrows');
    }
};
