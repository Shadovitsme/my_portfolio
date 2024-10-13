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
        Schema::create('my_stitches', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->timestamps();
        });
        Schema::create('my_animals', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->timestamps();
        });
        Schema::create('my_plants', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->timestamps();
        });
        Schema::create('skills_level', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->timestamps();
        });
        Schema::create('skills', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->timestamps();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->timestamps();
        });
        Schema::create('my_drafts', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('drafts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_stitches,my_animals,my_plants,siells_level,skills,projects');
    }
};
