<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('age');
            $table->string('gender');
            $table->float('height');
            $table->float('weight');
            $table->enum('role', ['admin','moderator','user']);
            $table->timestamps(); // optional
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
