<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author_name');
            $table->date('history_bublish');
            $table->string('picture');
            $table->integer('price');
            $table->integer('count');
            $table->foreignId('user_id')->constrained('users')->CascadeOnDelete();
            $table->integer('cotigory_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
