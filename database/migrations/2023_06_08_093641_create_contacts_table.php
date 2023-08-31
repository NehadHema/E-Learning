<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->default('logo.png');
            $table->string('favicon');
            $table->string('city');
            $table->string('address');
            $table->string('work_hours');
            $table->text('map');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('insta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
